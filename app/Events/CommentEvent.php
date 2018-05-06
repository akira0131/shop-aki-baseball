<?php

namespace App\Events;

use App\Http\Forms\Comment\CommentFormGroup;

class CommentEvent
{
    /**
     * @var
     */
    protected $form;

    /**
     * Create a new event instance.
     * SomeEvent constructor.
     *
     * @param CommentFormGroup $form
     */
    public function __construct(CommentFormGroup $form)
    {
        $this->form = $form;
    }
}
