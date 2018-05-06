<?php

namespace App\Listeners\Comment;

use App\Http\Forms\Comment\BaseCommentForm;

class CommentBaseListener
{
    /**
     * Handle the event.
     *
     * @return string
     *
     * @internal param CommentEvent $event
     */
    public function handle() : string
    {
        return BaseCommentForm::class;
    }
}
