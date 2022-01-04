<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 	public function up() {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sitename_ar');
            $table->string('sitename_en');
            $table->string('logo')->nullable();
            $table->string('icon')->nullable();
            $table->string('img_maintenance')->nullable();
            $table->string('bg_maintenance')->nullable();
            $table->string('email')->nullable();
            $table->string('main_lang')->default('ar');
            $table->longtext('description')->nullable();
            $table->longtext('keywords')->nullable();
            $table->enum('status', ['open', 'close'])->default('open');
            $table->longtext('message_maintenance')->nullable();

//            ----------------------------------------------------

            $table->string('bg_main_dark')->nullable();
            $table->string('color_main_dark')->nullable();
            $table->string('font_main')->nullable();

            $table->string('bg_two_dark')->nullable();
            $table->string('color_two_dark')->nullable();
            $table->string('font_two')->nullable();

            $table->string('bg_three_dark')->nullable();
            $table->string('color_three_dark')->nullable();
            $table->string('font_three')->nullable();

            $table->string('bg_main_light')->nullable();
            $table->string('color_main_light')->nullable();

            $table->string('bg_two_light')->nullable();
            $table->string('color_two_light')->nullable();

            $table->string('bg_three_light')->nullable();
            $table->string('color_three_light')->nullable();
           /*

            * */

            $table->string('color_icon_light')->nullable();
            $table->string('color_icon_dark')->nullable();
            $table->string('alert_success')->nullable();
            $table->string('alert_error')->nullable();
/*


 * */


            $table->string('theme')->nullable();
            $table->string('background')->nullable();
            $table->string('font')->nullable();
            $table->string('font_size')->nullable();
            $table->string('color')->nullable();

            $table->string('d_btn_show_modal')->nullable();
            $table->string('padding_btn_show_modal')->nullable();
            $table->string('style_file')->nullable();

            $table->string('d_none')->nullable();
            $table->string('d_block')->nullable();
            $table->string('d_footer')->nullable();
            $table->string('d_nav')->nullable();
            $table->string('d_sid_prent')->nullable();
            $table->string('d_sid_bar')->nullable();
            $table->string('d_small_box')->nullable();
            $table->string('d_stat')->nullable();
             $table->string('d_title_home')->nullable();
            $table->string('d_logo')->nullable();
            $table->string('d_fa_angle')->nullable();
            $table->string('d_icon_sid')->nullable();



            $table->string('d_icon')->nullable();
            $table->string('d_img_maintenance')->nullable();
            $table->string('d_bg_maintenance')->nullable();
            $table->longtext('d_message_maintenance')->nullable();
            $table->string('d_type_user_sid')->nullable();
            $table->string('d_type_user')->nullable();
            $table->string('d_type_d_pep')->nullable();
            $table->string('d_img_icon_top_sidbar')->nullable();
            $table->string('d_type_product_sid')->nullable();
            $table->string('d_type_product')->nullable();
            $table->string('d_my_tools')->nullable();
            $table->string('d_btn_refresh_sid')->nullable();
            $table->string('d_btn_home_sid')->nullable();
/*





 * */
//            ----------------------------------------------------
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
        Schema::dropIfExists('settings');
    }
}
