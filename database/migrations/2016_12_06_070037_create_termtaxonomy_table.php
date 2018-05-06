<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTermtaxonomyTable extends Migration
{
    /**
     * マイグレーション実行
     */
    public function up()
    {
        Schema::create('term_taxonomy', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('term_id');
            $table->string('taxonomy');
            $table->integer('parent_id')->default(0);

            $table->index(['id', 'taxonomy']);
        });
    }

    /**
     * マイグレーションを戻す
     */
    public function down()
    {
        Schema::drop('term_taxonomy');
    }
}
