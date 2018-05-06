<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentsAttachmentableTables extends Migration
{
    /**
     * マイグレーション実行
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('original_name');
            $table->string('mime');
            $table->string('extension')->nullable();
            $table->bigInteger('size')->default(0);
            $table->integer('sort')->default(0);
            $table->text('path');
            $table->text('description')->nullable();
            $table->text('alt')->nullable();
            $table->text('hash')->nullable();
            $table->integer('user_id')->nullable();
            $table->timestamps();
        });

        Schema::create('attachmentable', function (Blueprint $table) {
            $table->increments('id');
            $table->string('attachmentable_type');
            $table->integer('attachmentable_id');
            $table->integer('attachment_id');

            $table->index(['attachmentable_type', 'attachmentable_id']);
        });
    }

    /**
     * マイグレーションを戻す
     */
    public function down()
    {
        Schema::drop('attachments');
        Schema::drop('attachmentable');
    }
}
