<?php

namespace App\Http\Forms\Comment;

use App\Models\Comment;
use App\Forms\FormGroup;
use App\Events\CommentEvent;

use Illuminate\Contracts\View\View;

class CommentFormGroup extends FormGroup
{
    /**
     * @var
     */
    public $event = CommentEvent::class;

    /**
     * Description Attributes for group.
     *
     * @return array
     */
    public function attributes() : array
    {
        return [
            'name'        => trans('dashboard::systems/comment.title'),
            'description' => trans('dashboard::systems/comment.description'),
        ];
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|View|\Illuminate\View\View
     */
    public function main() : View
    {
        $comments = (new Comment())::with([
            'post' => function ($query) {
                $query->select('id', 'type', 'slug');
            },
        ])->latest()->paginate();

        return view('dashboard.systems.comment.index', [
            'comments' => $comments,
        ]);
    }
}
