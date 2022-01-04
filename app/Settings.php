<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model {
    //

    protected $table    = 'settings';
    protected $fillable = [
        'sitename_ar',
        'sitename_en',
        'logo',
        'icon',
        'img_maintenance',
        'bg_maintenance',
        'email',
        'description',
        'keywords',
        'status',
        'message_maintenance',
        'main_lang',
//        ---------------------------
        'theme',
        'background',
        'style_file',
        'font',
        'font_size',
        'color',
        'd_btn_show_modal',
        'padding_btn_show_modal',

        'd_none',
        'd_block',
        'd_footer',
        'd_nav',
        'd_sid_prent',
        'd_sid_bar',
        'd_small_box',
        'd_stat',
        'd_title_home',
        'd_logo',
        'd_fa_angle',
        'd_icon_sid',
        'd_icon',
        'd_img_maintenance',
        'd_bg_maintenance',
        'd_message_maintenance',
        'd_type_user_sid'          ,
        'd_type_user'          ,
        'd_type_d_pep'         ,
        'd_img_icon_top_sidbar',
        'd_type_product_sid',
        'd_type_product'    ,
        'd_my_tools'        ,
        'd_btn_refresh_sid' ,
        'd_btn_home_sid' ,
        'bg_main_dark',
        'color_main_dark',
        'font_main',
        'bg_two_dark',
        'color_two_dark',
        'font_two',
        'bg_three_dark',
        'color_three_dark',
        'font_three',
        'bg_main_light',
        'color_main_light',
        'bg_two_light',
        'color_two_light',
        'bg_three_light',
        'color_icon_light',
        'color_icon_dark',
        'color_three_light',
        'alert_error',
        'alert_success',
    ];

}
