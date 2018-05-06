<?php

namespace App\Behaviors\Storage;

use App\Kernel\Storage;

class SingleBehaviorStorage extends Storage
{
    /**
     * @var string
     */
    protected $configField = 'platform.single';
}
