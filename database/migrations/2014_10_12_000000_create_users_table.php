<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_topic',function (Blueprint $table){
            $table->increments('id',50);
            $table->string('mod_email',50);
            $table->string('name',50);
            $table->string('url',255);
        });

        Schema::create('tbl_category',function (Blueprint $table){
            $table->increments('id',50);
            $table->string('topic_id',50);
            $table->string('name',255);
            $table->string('url',255);
        });
        Schema::create('tbl_user',function (Blueprint $table){
            $table->increments('id',50);
            $table->string('password',255);
            $table->string('first_name',50);
            $table->string('lastname',50);
            $table->string('avatar',255);
            $table->string('thumbnail',255);
            $table->string('gender',10);
            $table->date('birthday',255);
            $table->string('lever',15);
            $table->text('description',255);
            $table->timestamp('_time_ban');
        });
        Schema::create('tbl_post',function (Blueprint $table){
            $table->increments('id',50);
            $table->string(' user_email');
            $table->string('topic_id',50);
            $table->string('category_id',50);
            $table->string('title',255);
            $table->text('content',255);
            $table->string('url',255);
            $table->string('status',10);
        });
        Schema::create('tbl_repost',function (Blueprint $table){
            $table->increments('id',50);
            $table->string('reporter_email',50);
            $table->string('memeber_email',50);
            $table->string('post_id',255);
            $table->text('content',255);
        });
        Schema::create('tbl_notification',function (Blueprint $table){
            $table->increments('id',50);
            $table->string('recipient_email',50);
            $table->string('post_id',50);
            $table->text('content',255);
            $table->string('status',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
