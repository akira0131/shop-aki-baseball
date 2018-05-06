<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait Attachment
{
    /**
     * The Eloquent tags model name.
     *
     * @var string
     */
    protected static $attachmentModel = 'App\Models\Attachment';

    /**
     * @return string
     */
    public static function getAttachmentModel() : string
    {
        return static::$attachmentModel;
    }

    /**
     * @param $model
     */
    public static function setAttachmentModel($model) : void
    {
        static::$attachmentModel = $model;
    }

    /**
     * @param null $type
     *
     * @return MorphToMany
     */
    public function attachment($type = null) : MorphToMany
    {
        if (! is_null($type)) {
            return $this->morphToMany(static::$attachmentModel, 'attachmentable', 'attachmentable', 'attachmentable_id',
                'attachment_id')->whereIn('extension', config('platform.attachment.'.$type));
        }

        return $this->morphToMany(static::$attachmentModel, 'attachmentable', 'attachmentable', 'attachmentable_id',
            'attachment_id');
    }
}
