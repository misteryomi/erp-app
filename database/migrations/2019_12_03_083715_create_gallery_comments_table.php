<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleryCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('gallery_id');
            $table->string('comment');
            $table->timestamps();

            // $table->foreign('gallery_id')->references('id')->on('galleries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallery_comments');
    }
}
