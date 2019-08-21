<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tag');
            $table->timestamps();
        });

        Schema::create('document_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('document_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();

            $table->foreign('document_id')
                ->references('id')->on('documents')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('tag_id')
                ->references('id')->on('tags')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('document_tag');
        Schema::dropIfExists('tags');
    }
}
