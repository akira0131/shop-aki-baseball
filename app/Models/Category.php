<?php

namespace App\Models;

use App\Traits\Attachment;
use App\Traits\FilterTrait;
use App\Traits\MultiLanguage;

class Category extends Taxonomy
{
    use Attachment, MultiLanguage, FilterTrait;

    /**
     * Used to set the post's type.
     */
    protected $taxonomy = 'category';
}
