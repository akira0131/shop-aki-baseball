<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Attachmentable;

class PostsTableSeeder extends Seeder
{
    /**
     * データベース初期値設定実行
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 20)->create()->each(function ($p) {
            $p->comments()->saveMany(factory(Comment::class, 2)->create(['post_id' => $p->id])
                ->each(function ($c) {
                    $c->replies()->saveMany(factory(Comment::class, 1)->make(['post_id' => $c->post_id, 'parent_id' => $c->id]));
                }));
            factory(Attachmentable::class, 4)->create(['attachmentable_id' => $p->id]);
        });
    }
}
