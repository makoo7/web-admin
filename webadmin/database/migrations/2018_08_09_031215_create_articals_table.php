<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artical', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 150);
            $table->longText('description');
            $table->string('image',150);
            $table->string('image_align',55);
            $table->integer('created_by');
            $table->text('flag');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artical');
    }
}
