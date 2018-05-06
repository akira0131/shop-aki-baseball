<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * マイグレーション実行
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('type');
            $table->string('status')->nullable();
            $table->jsonb('content');
            $table->jsonb('options');
            $table->string('slug', '255')->unique();
            $table->timestamp('publish_at');
            $table->timestamps();
            $table->softDeletes();
            $table->index(['status', 'type']);
        });
    }

    /**
     * マイグレーションを戻す
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
