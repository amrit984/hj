<?php
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/horoscope/hj-horoscope-daily.php';
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/horoscope/hj-horoscope-weekly.php';
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/horoscope/hj-horoscope-monthly.php';
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/horoscope/hj-horoscope-yearly.php';
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/kundali/hj-birth-chart-image.php';
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/kundali/hj-birth-details.php';
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/kundali/hj-kundali-form.php';
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/kundali/hj-kundali-crud.php';
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/usermanager/hj-login.php';
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/usermanager/hj-signup.php';
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/usermanager/hj-my-account.php';
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/usermanager/hj-saved-kundali.php';
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/usermanager/hj-astrologers.php';

function hj_shortcodes_init(){
    //Daily Horoscope Shortcodes
    add_shortcode( 'hj_daily_horoscope_mesh', 'hj_daily_mesh' );
    add_shortcode( 'hj_daily_horoscope_brish', 'hj_daily_brish' );
    add_shortcode( 'hj_daily_horoscope_mithun', 'hj_daily_mithun' );
    add_shortcode( 'hj_daily_horoscope_karkat', 'hj_daily_karkat' );
    add_shortcode( 'hj_daily_horoscope_singha', 'hj_daily_singha' );
    add_shortcode( 'hj_daily_horoscope_kanya', 'hj_daily_kanya' );
    add_shortcode( 'hj_daily_horoscope_tula', 'hj_daily_tula' );
    add_shortcode( 'hj_daily_horoscope_brischik', 'hj_daily_brischik' );
    add_shortcode( 'hj_daily_horoscope_dhanu', 'hj_daily_dhanu' );
    add_shortcode( 'hj_daily_horoscope_makar', 'hj_daily_makar' );
    add_shortcode( 'hj_daily_horoscope_kumbha', 'hj_daily_kumbha' );
    add_shortcode( 'hj_daily_horoscope_meen', 'hj_daily_meen' );

    //Weekly Horoscope Shortcodes
    add_shortcode( 'hj_weekly_horoscope_mesh', 'hj_weekly_mesh' );
    add_shortcode( 'hj_weekly_horoscope_brish', 'hj_weekly_brish' );
    add_shortcode( 'hj_weekly_horoscope_mithun', 'hj_weekly_mithun' );
    add_shortcode( 'hj_weekly_horoscope_karkat', 'hj_weekly_karkat' );
    add_shortcode( 'hj_weekly_horoscope_singha', 'hj_weekly_singha' );
    add_shortcode( 'hj_weekly_horoscope_kanya', 'hj_weekly_kanya' );
    add_shortcode( 'hj_weekly_horoscope_tula', 'hj_weekly_tula' );
    add_shortcode( 'hj_weekly_horoscope_brischik', 'hj_weekly_brischik' );
    add_shortcode( 'hj_weekly_horoscope_dhanu', 'hj_weekly_dhanu' );
    add_shortcode( 'hj_weekly_horoscope_makar', 'hj_weekly_makar' );
    add_shortcode( 'hj_weekly_horoscope_kumbha', 'hj_weekly_kumbha' );
    add_shortcode( 'hj_weekly_horoscope_meen', 'hj_weekly_meen' );

    //Monthly Horoscope Shortcodes
    add_shortcode( 'hj_monthly_horoscope_mesh', 'hj_monthly_mesh' );
    add_shortcode( 'hj_monthly_horoscope_brish', 'hj_monthly_brish' );
    add_shortcode( 'hj_monthly_horoscope_mithun', 'hj_monthly_mithun' );
    add_shortcode( 'hj_monthly_horoscope_karkat', 'hj_monthly_karkat' );
    add_shortcode( 'hj_monthly_horoscope_singha', 'hj_monthly_singha' );
    add_shortcode( 'hj_monthly_horoscope_kanya', 'hj_monthly_kanya' );
    add_shortcode( 'hj_monthly_horoscope_tula', 'hj_monthly_tula' );
    add_shortcode( 'hj_monthly_horoscope_brischik', 'hj_monthly_brischik' );
    add_shortcode( 'hj_monthly_horoscope_dhanu', 'hj_monthly_dhanu' );
    add_shortcode( 'hj_monthly_horoscope_makar', 'hj_monthly_makar' );
    add_shortcode( 'hj_monthly_horoscope_kumbha', 'hj_monthly_kumbha' );
    add_shortcode( 'hj_monthly_horoscope_meen', 'hj_monthly_meen' );

    //Yearly Horoscope Shortcodes
    add_shortcode( 'hj_yearly_horoscope_mesh', 'hj_yearly_mesh' );
    add_shortcode( 'hj_yearly_horoscope_brish', 'hj_yearly_brish' );
    add_shortcode( 'hj_yearly_horoscope_mithun', 'hj_yearly_mithun' );
    add_shortcode( 'hj_yearly_horoscope_karkat', 'hj_yearly_karkat' );
    add_shortcode( 'hj_yearly_horoscope_singha', 'hj_yearly_singha' );
    add_shortcode( 'hj_yearly_horoscope_kanya', 'hj_yearly_kanya' );
    add_shortcode( 'hj_yearly_horoscope_tula', 'hj_yearly_tula' );
    add_shortcode( 'hj_yearly_horoscope_brischik', 'hj_yearly_brischik' );
    add_shortcode( 'hj_yearly_horoscope_dhanu', 'hj_yearly_dhanu' );
    add_shortcode( 'hj_yearly_horoscope_makar', 'hj_yearly_makar' );
    add_shortcode( 'hj_yearly_horoscope_kumbha', 'hj_yearly_kumbha' );
    add_shortcode( 'hj_yearly_horoscope_meen', 'hj_yearly_meen' );

    //Kundali Shortcodes
    add_shortcode( 'hj_birth_chart_image', 'hj_draw_birth_chart' );
    add_shortcode( 'hj_birth_details', 'hj_return_birth_details' );
    add_shortcode( 'hj_planet_details', 'hj_return_planet_details' );
    add_shortcode( 'hj_personal_details', 'hj_return_person_details' );
    add_shortcode( 'hj_kundali_form', 'hj_return_kundali_form' );
    add_shortcode( 'hj_kundali_save_btn', 'hj_return_kundali_save_btn' );
    add_shortcode( 'hj_kundali_delete_btn', 'hj_return_kundali_delete_btn' );

    //User Management Shortcodes
    add_shortcode( 'hj_login', 'hj_return_login' );
    add_shortcode( 'hj_signup', 'hj_return_register' );
    add_shortcode( 'hj_my_account', 'hj_return_profile' );
    add_shortcode('hj_saved_kundali', 'hj_return_saved_kundali');
    add_shortcode('hj_display_astrologers', 'hj_return_astrologers');
}
?>