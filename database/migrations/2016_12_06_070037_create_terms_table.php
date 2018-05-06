<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTermsTable extends Migration
{
    /**
     * マイグレーション実行
     */
    public function up()
    {
        Schema::create('terms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->jsonb('content');
            $table->integer('term_group')->default(0);
            $table->timestamps();
        });
    }

    /**
     * マイグレーションを戻す
     */
    public function down()
    {
        Schema::drop('terms');
    }
}
