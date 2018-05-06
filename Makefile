.DEFAULT_GOAL := help

build: ## build develoment environment with laradock
	git submodule update -i
	cp .env.example .env
	cp env-laradock ../laradock/.env
	cd laradock; docker-compose build nginx mysql php-fpm workspace
	cd laradock; docker-compose up -d nginx mysql
	cd laradock; docker-compose run workspace composer install
	cd laradock; docker-compose run workspace php artisan key:generate
	cd laradock; docker-compose run workspace php artisan migrate

up:
	cd laradock; docker-compose up -d nginx mysql

stop:
	cd laradock; docker-compose stop

login:
	cd laradock; docker-compose up -d workspace
	cd laradock; docker-compose exec workspace bash

install:
	#composer require watson/active
	#composer require spomky-labs/base64url
	#composer require ralouphie/mimey
	#composer require psr/http-message
	#composer require laravel/scout
	composer require intervention/image
	composer require guzzlehttp/psr7
	composer require cviebrock/eloquent-sluggable
	composer require composer/semver
	composer require cocur/slugify
	composer require cartalyst/tags
	composer require barryvdh/laravel-debugbar
	composer require laravel-ja/comja5
	composer require laravel/socialite

.PHONY: help
help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'
