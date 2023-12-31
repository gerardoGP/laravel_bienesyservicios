<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("typePost_id");
            $table->string("description","1000");
            $table->string("url_pdf","500");
            $table->foreignId("user_id");
            $table->datetime("start_date");
            $table->dateTime("last_date");
            $table->timestamps();
            $table->foreign('typePost_id')->references('id')->on('typePosts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
