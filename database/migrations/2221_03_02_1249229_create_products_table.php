<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->text('product_name_ar')->nullable();
            $table->text('product_name_en')->nullable();
            $table->longText('description_ar')->nullable();
            $table->longText('description_en')->nullable();
            $table->text('photo')->nullable();
            $table->text('add_by_ar')->nullable();
            $table->text('add_by_en')->nullable();
            $table->string('add_by_photo')->nullable();
            $table->text('discount')->nullable();
            $table->decimal('price_old',5,2)->default(0);
//-------------------------start virgin two
            $table->integer('department_id')->unsigned()->nullable();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');


            $table->decimal('price', 5, 2)->default(0);

            $table->integer('stock')->default(0);

            $table->date('start_at')->nullable();
            $table->date('end_at')->nullable();

            $table->date('start_offer_at')->nullable();
            $table->date('end_offer_at')->nullable();
            $table->decimal('price_offer',5,2)->default(0);

            $table->longtext('other_data')->nullable();
            $table->longtext('other_color')->nullable();


            $table->text('weight')->nullable();

            $table->enum('status',['pending','refused','active'])->default('pending');
            $table->longtext('reason')->nullable();



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
        Schema::dropIfExists('products');
    }
}
