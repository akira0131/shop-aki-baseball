<?php

namespace App\Behaviors\Storage;

use App\Kernel\Storage;

class ManyBehaviorStorage extends Storage
{
    /**
     * @var string
     */
    protected $configField = 'platform.many';
}
