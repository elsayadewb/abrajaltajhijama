<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('dep_name_ar');
            $table->text('dep_name_en');
            $table->text('description_ar')->nullable();
            $table->text('description_en')->nullable();
             $table->text('icon')->nullable();
             $table->text('link')->nullable();
            $table->integer('parent')->unsigned()->nullable();
            $table->foreign('parent')->references('id')->on('departments')->onDelete('cascade');
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
        Schema::dropIfExists('departments');
    }
}
