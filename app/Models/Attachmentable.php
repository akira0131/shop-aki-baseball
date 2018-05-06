<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attachmentable extends Model
{
    /**
     * @var bool
     */
    public $timestamps = false;
    /**
     * @var string
     */
    protected $table = 'attachmentable';
}
