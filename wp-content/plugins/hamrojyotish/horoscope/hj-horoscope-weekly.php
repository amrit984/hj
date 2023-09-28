<?php
    require_once ABSPATH . 'wp-content/plugins/hamrojyotish/scraper/scraper-horoscope.php';

    function hj_weekly_mesh(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/weekly/Mesh');
        return $content;
    }

    function hj_weekly_brish(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/weekly/Brish');
        return $content;
    }

    function hj_weekly_mithun(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/weekly/Mithun');
        return $content;
    }

    function hj_weekly_karkat(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/weekly/Karkat');
        return $content;
    }

    function hj_weekly_singha(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/weekly/Singha');
        return $content;
    }

    function hj_weekly_kanya(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/weekly/Kanya');
        return $content;
    }

    function hj_weekly_tula(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/weekly/Tula');
        return $content;
    }

    function hj_weekly_brischik(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/weekly/Brischik');
        return $content;
    }

    function hj_weekly_dhanu(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/weekly/Dhanu');
        return $content;
    }

    function hj_weekly_makar(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/weekly/Makar');
        return $content;
    }
    
    function hj_weekly_kumbha(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/weekly/Kumbha');
        return $content;
    }

    function hj_weekly_meen(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/weekly/Meen');
        $content = substr_replace($content, " ",-152);
        return $content;
    }
?>