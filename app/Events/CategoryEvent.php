<?php

namespace App\Events;

use App\Http\Forms\Category\CategoryFormGroup;

class CategoryEvent
{
    /**
     * @var
     */
    protected $form;

    /**
     * Create a new event instance.
     * SomeEvent constructor.
     *
     * @param CategoryFormGroup $form
     */
    public function __construct(CategoryFormGroup $form)
    {
        $this->form = $form;
    }
}
