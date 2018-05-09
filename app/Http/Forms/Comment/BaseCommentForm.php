<?php

namespace App\Http\Forms\Comment;

use App\Models\Comment;
use App\Forms\Form;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class BaseCommentForm extends Form
{
    /**
     * @var string
     */
    public $name = 'General Info';

    /**
     * Base Model.
     *
     * @var
     */
    protected $model = Comment::class;

    /**
     * Display Settings App.
     *
     * @param Comment|null $comment
     *
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function get(Comment $comment) : View
    {
        return view('dashboard.systems.comment.container.info', [
            'comment' => $comment,
            'post'    => $comment->post()->first(),
        ]);
    }

    /**
     * @param Request|null $request
     * @param Comment|null $comment
     *
     * @return mixed|void
     */
    public function persist(Request $request = null, Comment $comment = null)
    {
        $comment->approved = false;
        $comment->fill($request->all());
        $comment->save();
    }

    /**
     * @param Comment $comment
     *
     * @throws \Exception
     */
    public function delete(Comment $comment)
    {
        try {
            $comment->delete();
        } catch (\Exception $e) {
        }
    }
}
