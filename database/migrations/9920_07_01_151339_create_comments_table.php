<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned()->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->text   ('title')->nullable();
            $table->text   ('content')->nullable();
            $table->text   ('footer')->nullable();
            $table->text   ('photo')->nullable();
//            $table->string   ('status')->nullable();
            $table->enum('status_comment',['pen','approve','unacceptable','delete'])->nullable();

            $table->integer('child')->unsigned()->nullable();
            $table->foreign('child')->references('id')->on('comments')->onDelete('cascade');

            $table->integer('parent')->unsigned()->nullable();
            $table->foreign('parent')->references('id')->on('comments')->onDelete('cascade');
//            ----------------------
             $table->integer('parent_id')->nullable()->unsigned();
             $table->integer('commentable_id')->unsigned()->nullable();
            $table->string('commentable_type')->nullable()->nullable();
//            ----------------------
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
        Schema::dropIfExists('comments');
    }
}
