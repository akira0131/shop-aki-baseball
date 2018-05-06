<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * マイグレーション実行
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->string('title')->nullable();
            $table->string('slug');
            $table->string('robot')->nullable();
            $table->string('style')->nullable();
            $table->string('target')->nullable();
            $table->boolean('auth')->default(false);
            $table->string('lang');
            $table->integer('parent')->default(0);
            $table->integer('sort')->default(0);
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * マイグレーションを戻す
     */
    public function down()
    {
        Schema::drop('menu');
    }
}
