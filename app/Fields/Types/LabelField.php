<?php

namespace App\Fields\Types;

use App\Fields\Field;

/**
 * Class LabelField.
 * @method $this name($value = true)
 */
class LabelField extends Field
{
    /**
     * @var string
     */
    public $view = 'dashboard::fields.label';

    /**
     * Required Attributes.
     *
     * @var array
     */
    public $required = [
        'name',
    ];
}
