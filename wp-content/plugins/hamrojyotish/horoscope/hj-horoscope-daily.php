<?php
    require_once ABSPATH . 'wp-content/plugins/hamrojyotish/scraper/scraper-horoscope.php';
    function hj_daily_mesh(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/daily/Mesh');
        return $content;
    }

    function hj_daily_brish(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/daily/Brish');
        return $content;
    }

    function hj_daily_mithun(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/daily/Mithun');
        return $content;
    }

    function hj_daily_karkat(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/daily/Karkat');
        return $content;
    }

    function hj_daily_singha(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/daily/Singha');
        return $content;
    }

    function hj_daily_kanya(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/daily/Kanya');
        return $content;
    }

    function hj_daily_tula(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/daily/Tula');
        return $content;
    }

    function hj_daily_brischik(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/daily/Brischik');
        return $content;
    }

    function hj_daily_dhanu(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/daily/Dhanu');
        return $content;
    }

    function hj_daily_makar(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/daily/Makar');
        return $content;
    }
    
    function hj_daily_kumbha(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/daily/Kumbha');
        return $content;
    }

    function hj_daily_meen(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/daily/Meen');
        $content = substr_replace($content, " ",-77);
        return $content;
    }
?>