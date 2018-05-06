<?php

namespace App\Fields\Types;

use App\Fields\Field;

/**
 * Class ListField.
 * @method $this name($value = true)
 */
class ListField extends Field
{
    /**
     * @var string
     */
    public $view = 'dashboard::fields.list';

    /**
     * Required Attributes.
     *
     * @var array
     */
    public $required = [
        'name',
    ];

    public $inlineAttributes = [
        'name',
        'value',
    ];
}
