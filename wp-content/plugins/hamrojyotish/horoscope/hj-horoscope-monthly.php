<?php
    require_once ABSPATH . 'wp-content/plugins/hamrojyotish/scraper/scraper-horoscope.php';

    function hj_monthly_mesh(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/monthly/Mesh');
        return $content;
    }

    function hj_monthly_brish(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/monthly/Brish');
        return $content;
    }

    function hj_monthly_mithun(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/monthly/Mithun');
        return $content;
    }

    function hj_monthly_karkat(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/monthly/Karkat');
        return $content;
    }

    function hj_monthly_singha(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/monthly/Singha');
        return $content;
    }

    function hj_monthly_kanya(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/monthly/Kanya');
        return $content;
    }

    function hj_monthly_tula(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/monthly/Tula');
        return $content;
    }

    function hj_monthly_brischik(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/monthly/Brischik');
        return $content;
    }

    function hj_monthly_dhanu(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/monthly/Dhanu');
        return $content;
    }

    function hj_monthly_makar(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/monthly/Makar');
        return $content;
    }
    
    function hj_monthly_kumbha(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/monthly/Kumbha');
        return $content;
    }

    function hj_monthly_meen(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/monthly/Meen');
        $content = substr_replace($content, " ",-152);
        return $content;
    }
?>