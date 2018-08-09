<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->string('branch_name', 150);
            $table->longText('branch_address');
            $table->string('map_address',155);
            $table->string('telephone',55);
            $table->string('mobile',55);
            $table->string('website',155);
            $table->string('email',155);
            $table->integer('created_by');
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
        Schema::dropIfExists('branch_detail');
    }
}
