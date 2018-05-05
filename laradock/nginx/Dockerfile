FROM nginx:alpine

LABEL maintainer="Mahmoud Zalt <mahmoud@zalt.me>"

#####################################
# Set Timezone
#####################################

ARG TZ
ENV TZ ${TZ}

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

#####################################
# Set Image
#####################################

COPY nginx.conf /etc/nginx/

# If you're in China, or you need to change sources, will be set CHANGE_SOURCE to true in .env.

ARG CHANGE_SOURCE=false
RUN if [ ${CHANGE_SOURCE} = true ]; then \
    # Change application source from dl-cdn.alpinelinux.org to aliyun source
    sed -i 's/dl-cdn.alpinelinux.org/mirrors.aliyun.com/' /etc/apk/repositories \
;fi

RUN apk update \
    && apk upgrade \
    && apk add --no-cache bash \
    && adduser -D -H -u 1000 -s /bin/bash www-data

ARG PHP_UPSTREAM_CONTAINER=php-fpm
ARG PHP_UPSTREAM_PORT=9000

# Set upstream conf and remove the default conf
RUN echo "upstream php-upstream { server ${PHP_UPSTREAM_CONTAINER}:${PHP_UPSTREAM_PORT}; }" > /etc/nginx/conf.d/upstream.conf \
    && rm /etc/nginx/conf.d/default.conf

#####################################
# Apply SSL
#####################################

ARG LOCAL_DOMAIN
ARG COMPANY_NAME
ARG COUNTRY_NAME
ENV LOCAL_DOMAIN ${LOCAL_DOMAIN}
ENV COMPANY_NAME ${COMPANY_NAME}
ENV COUNTRY_NAME ${COUNTRY_NAME}

RUN apk add --no-cache openssl \
    && mkdir /etc/nginx/ssl 2> /dev/null

RUN openssl genrsa -out "/etc/nginx/ssl/${LOCAL_DOMAIN}.key" 2048 \
    && openssl req -new -key "/etc/nginx/ssl/${LOCAL_DOMAIN}.key" -out "/etc/nginx/ssl/${LOCAL_DOMAIN}.csr" -subj "/CN=${LOCAL_DOMAIN}/O=${COMPANY_NAME}/C=${COUNTRY_NAME}" \
    && openssl x509 -req -days 3650 -in "/etc/nginx/ssl/${LOCAL_DOMAIN}.csr" -signkey "/etc/nginx/ssl/${LOCAL_DOMAIN}.key" -out "/etc/nginx/ssl/${LOCAL_DOMAIN}.crt"

CMD ["nginx"]

EXPOSE 80 443
