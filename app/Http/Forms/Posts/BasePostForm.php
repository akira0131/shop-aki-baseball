<?php

namespace App\Http\Forms\Posts;

use App\Models\Post;
use App\Models\Category;
use App\Models\Taxonomy;
use App\Forms\Form;
use App\Behaviors\Many as PostBehaviors;
use Illuminate\View\View;
use Illuminate\Support\Facades\App;

class BasePostForm extends Form
{
    /**
     * @var string
     */
    public $name = 'Information';

    /**
     * BasePostForm constructor.
     *
     * @param null $request
     */
    public function __construct($request = null)
    {
        $this->name = trans('dashboard::post/base.tabs.information');
        parent::__construct($request);
    }

    /**
     * Display Base Options.
     *
     * @param PostBehaviors|null $type
     * @param Post|null          $post
     *
     * @return \Illuminate\Contracts\View\Factory|View
     *
     * @internal param null $type
     */
    public function get(PostBehaviors $type = null, Post $post = null) : View
    {
        $currentCategory = (is_null($post)) ? [] : $post->taxonomies()->get()->pluck('taxonomy', 'id')->toArray();
        $category = Category::get();

        $category = $category->map(function ($item) use ($currentCategory) {
            if (array_key_exists($item->id, $currentCategory)) {
                $item->active = true;
            } else {
                $item->active = false;
            }

            return $item;
        });

        return view('dashboard::container.posts.modules.base', [
            'author'   => (is_null($post)) ? $post : $post->getUser(),
            'post'     => $post,
            'language' => App::getLocale(),
            'locales'  => config('platform.locales'),
            'category' => $category,
            'type'     => $type,
        ]);
    }

    /**
     * Save Base Role.
     *
     * @param null $type
     * @param Post $post
     *
     * @return void
     *
     * @internal param null $storage
     */
    public function persist($type = null, Post $post = null)
    {
        $post->setTags($this->request->get('tags', []));

        $post->taxonomies()->where('taxonomy', 'category')->detach();

        $category = [];
        foreach ($this->request->get('category', []) as $value) {
            $test = Taxonomy::select('id', 'term_id')->find($value);
            $category[] = $test;
        }

        $post->taxonomies()->saveMany($category);
    }
}
