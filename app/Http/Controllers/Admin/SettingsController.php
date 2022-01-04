<?php

namespace App\Http\Controllers\Admin;
 use App\Settings;
 use Session;
 use Storage;
// use Up;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class SettingsController extends Controller
{

    public function setting_save_in_page()
    {
        $data = $this->validate(request(),
            [
                'logo'                                 =>v_image(),
                'icon'                                 =>v_image(),
                'img_maintenance'                      =>v_image(),
                'bg_maintenance'                       =>v_image(),
                'main_lang'                            => '',
                'sitename_ar'                          => '',
                'sitename_en'                          => '',
                'email'                                => '',
                'description'                          => '',
                'keywords'                             => '',
                'message_maintenance'                  => '',
                'status'                               => '',
                'theme'                                => '' ,
                'background'                           => '' ,
                'style_file'                           => '' ,
                'font'                                 => '' ,
                'font_size'                            => '' ,
                'color'                                => '' ,
                'd_btn_show_modal'                     => '' ,
                'padding_btn_show_modal'=> '' ,
                'd_none'                               => '' ,
                'd_block'                              => '' ,
                'd_footer'                             => '' ,
                'd_nav'                                => '' ,
                'd_sid_prent'                          => '' ,
                'd_sid_bar'                            => '' ,
                'd_small_box'                          => '' ,
                'd_stat'                               => '' ,
                'd_title_home'                         => '' ,
                'd_logo'                               => '' ,
                'd_fa_angle'                           => '' ,
                'd_icon_sid'                           => '' ,
                'd_icon'                               => '' ,
                'd_img_maintenance'                    => '' ,
                'd_bg_maintenance'                     => '' ,
                'd_type_user'                          => '',
                'd_type_user_sid'                      => '',
                'd_type_d_pep'                         => '',
                'd_img_icon_top_sidbar'                => '',
                'd_message_maintenance'                => '',
                'd_type_product_sid'                    => ' ',
                'd_type_product'                        => ' ',
                'd_my_tools'                            => ' ',
                'd_btn_refresh_sid'                     => ' ',
                'd_btn_home_sid'                     => ' ',

                'bg_main_dark'                       => ' ',
                'color_main_dark'                     => ' ',
                'font_main'                           => ' ',
                'bg_two_dark'                         => ' ',
                'color_two_dark'                      => ' ',
                'font_two'                            => ' ',
                'bg_three_dark'                       => ' ',
                'color_three_dark'                    => ' ',
                'font_three'                          => ' ',
                'bg_main_light'                       => ' ',
                'color_main_light'                    => ' ',
                'bg_two_light'                        => ' ',
                'color_two_light'                     => ' ',
                'bg_three_light'                      => ' ',
                'color_three_light'                   => ' ',
                'color_icon_light'                    => '',
                'color_icon_dark'                     =>'',
                'alert_error'                         =>'',
                'alert_success'                       =>''

            ],[
            ],[
                'logo'                                 =>trans('admin.logo'),
                'icon'                                 =>trans('admin.icon'),
                'img_maintenance'                      =>trans('admin.img_maintenance'),
                'bg_maintenance'                      =>trans('admin.bg_maintenance'),
                'status'                               =>trans('admin.status'),
                'main_lang'                            =>trans('admin.main_lang'),
                'sitename_ar'                          =>trans('admin.sitename_ar'),
                'sitename_en'                          =>trans('admin.sitename_en'),
                'email'                                =>trans('admin.email'),
                'description'                          =>trans('admin.description'),
                'keywords'                             =>trans('admin.keywords'),
                'message_maintenance '                 =>trans('admin.message_maintenance'),
                'd_icon'                               => trans('d_icon.') ,
                'd_img_maintenance'                    => trans('d_img_maintenance.') ,
                'd_bg_maintenance'                     => trans('d_bg_maintenance.') ,
                'd_message_maintenance'                =>  trans('d_message_maintenance.') ,
                'theme'                                => trans('theme.') ,
                'background'                           => trans('background.') ,
                'style_file'                           => trans('style_file.') ,
                'font'                                 => trans('font.') ,
                'font_size'                            => trans('font_size.') ,
                'color'                                => trans('color.') ,
                'd_btn_show_modal'                     => trans('d_btn_show_modal.') ,
                'padding_btn_show_modal'               => trans('padding_btn_show_modal.') ,
                'd_none'                               => trans('d_none.') ,
                'd_block'                              => trans('d_block.') ,
                'd_footer'                             => trans('d_footer.') ,
                'd_nav'                                => trans('d_nav.') ,
                'd_sid_prent'                          => trans('d_sid_prent.') ,
                'd_sid_bar'                            => trans('d_sid_bar.') ,
                'd_small_box'                          => trans('d_small_box.') ,
                'd_stat'                               => trans('d_stat.') ,
                'd_title_home'                         => trans('d_title_home.') ,
                'd_logo'                               => trans('d_logo.') ,
                'd_fa_angle'                           => trans('d_fa_angle.') ,
                'd_icon_sid'                           => trans('d_icon_sid.') ,
                'd_icon'                               => trans('d_icon.') ,
                'd_img_maintenance'                    => trans('d_img_maintenance.') ,
                'd_bg_maintenance'                     => trans('d_bg_maintenance.') ,
                'd_message_maintenance'                =>  trans('d_message_maintenance.') ,
                'd_type_user'                          =>trans('d_type_user.') ,
                'd_type_user_sid'                      => trans('d_type_user_sid.') ,
                'd_type_d_pep'                         => trans('d_type_d_pep.') ,
                'd_img_icon_top_sidbar'                => trans('d_message_maintenance.') ,
                'd_type_product_sid'                    => trans('d_type_product_sid') ,
                'd_type_product'                        => trans('d_type_product') ,
                'd_my_tools'                            => trans('d_my_tools') ,
                'd_btn_refresh_sid'                     => trans('d_btn_refresh_sid') ,
                'd_btn_home_sid'                        => trans('d_btn_home_sid') ,
                'bg_main_dark'                              => trans('bg_main_dark') ,
                'color_main_dark'                           => trans('color_main_dark') ,
                'font_main'                                 => trans('font_main') ,
                'bg_two_dark'                               => trans('bg_two_dark') ,
                'color_two_dark'                            => trans('color_two_dark') ,
                'font_two'                                  => trans('font_two') ,
                'bg_three_dark'                             => trans('bg_three_dark') ,
                'color_three_dark'                          => trans('color_three_dark') ,
                'font_three'                                => trans('font_three') ,
                'bg_main_light'                             => trans('bg_main_light') ,
                'color_main_light'                          => trans('color_main_light') ,
                'bg_two_light'                              => trans('bg_two_light') ,
                'color_two_light'                           => trans('color_two_light') ,
                'bg_three_light'                            => trans('bg_three_light') ,
                'color_three_light'                         => trans('color_three_light') ,
                'color_three_dark'                          => trans('color_three_dark') ,
                'color_icon_light'                          => trans('color_icon_light') ,
                'color_icon_dark'                           => trans('color_icon_dark') ,
                'alert_success'                             => trans('alert_success') ,
                'alert_error'                               => trans('alert_error') ,
            ]);
        if(request()->hasFile('logo')){
            $data['logo']  = Up()->Upload([
                'file'        =>'logo',
                'path'        =>'settings',
                'upload_type' =>'single',
                'delete_file' =>setting()->logo,
            ]);
        }
        if(request()->hasFile('icon')){
//            $data['icon']  = Up::Upload([
            $data['icon']  = Up()->Upload([
                'file'        =>'icon',
                'path'        =>'settings',
                'upload_type' =>'single',
                'delete_file' =>setting()->icon,
            ]);
        }
        if(request()->hasFile('img_maintenance')){
             $data['img_maintenance']  = Up()->Upload([
                'file'        =>'img_maintenance',
                'path'        =>'settings',
                'upload_type' =>'single',
                'delete_file' =>setting()->img_maintenance,
            ]);
        }
        if(request()->hasFile('bg_maintenance')){
             $data['bg_maintenance']  = Up()->Upload([
                'file'        =>'bg_maintenance',
                'path'        =>'settings',
                'upload_type' =>'single',
                'delete_file' =>setting()->bg_maintenance,
            ]);
        }
         Settings::orderBy('id','desc')->update($data);
        session()->flash('success', trans('admin.success_settings') );
        //  return  $data;
        return back();
    }


    public function setting()
    {

         $title = trans('admin.settings');
        return view('back.settings.index',compact('title'));
    }
    public function setting_save()
    {
        $data = $this->validate(request(),
            [
                'logo'                                 =>v_image(),
                'icon'                                 =>v_image(),
                'img_maintenance'                      =>v_image(),
                'bg_maintenance'                       =>v_image(),
                'main_lang'                            => '',
                'sitename_ar'                          => '',
                'sitename_en'                          => '',
                'email'                                => '',
                'description'                          => '',
                'keywords'                             => '',
                'message_maintenance'                  => '',
                'status'                               => '',
                'theme'                                => '' ,
                'background'                           => '' ,
                'style_file'                           => '' ,
                'font'                                 => '' ,
                'font_size'                            => '' ,
                'color'                                => '' ,
                'd_btn_show_modal'                     => '' ,
                'padding_btn_show_modal'=> '' ,
                'd_none'                               => '' ,
                'd_block'                              => '' ,
                'd_footer'                             => '' ,
                'd_nav'                                => '' ,
                'd_sid_prent'                          => '' ,
                'd_sid_bar'                            => '' ,
                'd_small_box'                          => '' ,
                'd_stat'                               => '' ,
                'd_title_home'                         => '' ,
                'd_logo'                               => '' ,
                'd_fa_angle'                           => '' ,
                'd_icon_sid'                           => '' ,
                'd_icon'                               => '' ,
                'd_img_maintenance'                    => '' ,
                'd_bg_maintenance'                     => '' ,
                'd_type_user'                          => '',
                'd_type_user_sid'                      => '',
                'd_type_d_pep'                         => '',
                'd_img_icon_top_sidbar'                => '',
                'd_message_maintenance'                => '',
                'd_type_product_sid'                    => ' ',
                'd_type_product'                        => ' ',
                'd_my_tools'                            => ' ',
                'd_btn_refresh_sid'                     => ' ',
                'd_btn_home_sid'                     => ' ',

                'bg_main_dark'                       => ' ',
                'color_main_dark'                     => ' ',
                'font_main'                           => ' ',
                'bg_two_dark'                         => ' ',
                'color_two_dark'                      => ' ',
                'font_two'                            => ' ',
                'bg_three_dark'                       => ' ',
                'color_three_dark'                    => ' ',
                'font_three'                          => ' ',
                'bg_main_light'                       => ' ',
                'color_main_light'                    => ' ',
                'bg_two_light'                        => ' ',
                'color_two_light'                     => ' ',
                'bg_three_light'                      => ' ',
                'color_three_light'                   => ' ',
                'color_icon_light'                    => '',
                'color_icon_dark'                     =>'',
                'alert_error'                         =>'',
                'alert_success'                       =>''

            ],[
            ],[
                'logo'                                 =>trans('admin.logo'),
                'icon'                                 =>trans('admin.icon'),
                'img_maintenance'                      =>trans('admin.img_maintenance'),
                'bg_maintenance'                      =>trans('admin.bg_maintenance'),
                'status'                               =>trans('admin.status'),
                'main_lang'                            =>trans('admin.main_lang'),
                'sitename_ar'                          =>trans('admin.sitename_ar'),
                'sitename_en'                          =>trans('admin.sitename_en'),
                'email'                                =>trans('admin.email'),
                'description'                          =>trans('admin.description'),
                'keywords'                             =>trans('admin.keywords'),
                'message_maintenance '                 =>trans('admin.message_maintenance'),
                'd_icon'                               => trans('d_icon.') ,
                'd_img_maintenance'                    => trans('d_img_maintenance.') ,
                'd_bg_maintenance'                     => trans('d_bg_maintenance.') ,
                'd_message_maintenance'                =>  trans('d_message_maintenance.') ,
                'theme'                                => trans('theme.') ,
                'background'                           => trans('background.') ,
                'style_file'                           => trans('style_file.') ,
                'font'                                 => trans('font.') ,
                'font_size'                            => trans('font_size.') ,
                'color'                                => trans('color.') ,
                'd_btn_show_modal'                     => trans('d_btn_show_modal.') ,
                'padding_btn_show_modal'               => trans('padding_btn_show_modal.') ,
                'd_none'                               => trans('d_none.') ,
                'd_block'                              => trans('d_block.') ,
                'd_footer'                             => trans('d_footer.') ,
                'd_nav'                                => trans('d_nav.') ,
                'd_sid_prent'                          => trans('d_sid_prent.') ,
                'd_sid_bar'                            => trans('d_sid_bar.') ,
                'd_small_box'                          => trans('d_small_box.') ,
                'd_stat'                               => trans('d_stat.') ,
                'd_title_home'                         => trans('d_title_home.') ,
                'd_logo'                               => trans('d_logo.') ,
                'd_fa_angle'                           => trans('d_fa_angle.') ,
                'd_icon_sid'                           => trans('d_icon_sid.') ,
                'd_icon'                               => trans('d_icon.') ,
                'd_img_maintenance'                    => trans('d_img_maintenance.') ,
                'd_bg_maintenance'                     => trans('d_bg_maintenance.') ,
                'd_message_maintenance'                =>  trans('d_message_maintenance.') ,
                'd_type_user'                          =>trans('d_type_user.') ,
                'd_type_user_sid'                      => trans('d_type_user_sid.') ,
                'd_type_d_pep'                         => trans('d_type_d_pep.') ,
                'd_img_icon_top_sidbar'                => trans('d_message_maintenance.') ,
                'd_type_product_sid'                    => trans('d_type_product_sid') ,
                'd_type_product'                        => trans('d_type_product') ,
                'd_my_tools'                            => trans('d_my_tools') ,
                'd_btn_refresh_sid'                     => trans('d_btn_refresh_sid') ,
                'd_btn_home_sid'                        => trans('d_btn_home_sid') ,
                'bg_main_dark'                              => trans('bg_main_dark') ,
                'color_main_dark'                           => trans('color_main_dark') ,
                'font_main'                                 => trans('font_main') ,
                'bg_two_dark'                               => trans('bg_two_dark') ,
                'color_two_dark'                            => trans('color_two_dark') ,
                'font_two'                                  => trans('font_two') ,
                'bg_three_dark'                             => trans('bg_three_dark') ,
                'color_three_dark'                          => trans('color_three_dark') ,
                'font_three'                                => trans('font_three') ,
                'bg_main_light'                             => trans('bg_main_light') ,
                'color_main_light'                          => trans('color_main_light') ,
                'bg_two_light'                              => trans('bg_two_light') ,
                'color_two_light'                           => trans('color_two_light') ,
                'bg_three_light'                            => trans('bg_three_light') ,
                'color_three_light'                         => trans('color_three_light') ,
                'color_three_dark'                          => trans('color_three_dark') ,
                'color_icon_light'                          => trans('color_icon_light') ,
                'color_icon_dark'                           => trans('color_icon_dark') ,
                'alert_success'                           => trans('alert_success') ,
                'alert_error'                           => trans('alert_error') ,
            ]);
        if(request()->hasFile('logo')){
            $data['logo']  = Up()->Upload([
                'file'        =>'logo',
                'path'        =>'settings',
                'upload_type' =>'single',
                'delete_file' =>setting()->logo,
            ]);
        }
        if(request()->hasFile('icon')){
//            $data['icon']  = Up::Upload([
            $data['icon']  = Up()->Upload([
                'file'        =>'icon',
                'path'        =>'settings',
                'upload_type' =>'single',
                'delete_file' =>setting()->icon,
            ]);
        }
        if(request()->hasFile('img_maintenance')){
            $data['img_maintenance']  = Up()->Upload([
                'file'        =>'img_maintenance',
                'path'        =>'settings',
                'upload_type' =>'single',
                'delete_file' =>setting()->img_maintenance,
            ]);
        }
        if(request()->hasFile('bg_maintenance')){
            $data['bg_maintenance']  = Up()->Upload([
                'file'        =>'bg_maintenance',
                'path'        =>'settings',
                'upload_type' =>'single',
                'delete_file' =>setting()->bg_maintenance,
            ]);
        }
        Settings::orderBy('id','desc')->update($data);
         session()->flash('success_settings', trans('admin.success_settings') );
        return back();
    }


















    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function show(Settings $settings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function edit(Settings $settings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Settings $settings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Settings $settings)
    {
        //
    }
}
