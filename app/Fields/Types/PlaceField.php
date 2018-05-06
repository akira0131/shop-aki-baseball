<?php

namespace App\Fields\Types;

use App\Fields\Field;

/**
 * Class PlaceField.
 * @method $this name($value = true)
 */
class PlaceField extends Field
{
    /**
     * @var string
     */
    public $view = 'dashboard::fields.place';

    /**
     * Required Attributes.
     *
     * @var array
     */
    public $required = [
        'name',
    ];
}
