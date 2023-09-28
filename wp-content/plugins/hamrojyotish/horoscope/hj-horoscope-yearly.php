<?php
    require_once ABSPATH . 'wp-content/plugins/hamrojyotish/scraper/scraper-horoscope.php';

    function hj_yearly_mesh(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/yearly/Mesh');
        return $content;
    }

    function hj_yearly_brish(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/yearly/Brish');
        return $content;
    }

    function hj_yearly_mithun(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/yearly/Mithun');
        return $content;
    }

    function hj_yearly_karkat(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/yearly/Karkat');
        return $content;
    }

    function hj_yearly_singha(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/yearly/Singha');
        return $content;
    }

    function hj_yearly_kanya(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/yearly/Kanya');
        return $content;
    }

    function hj_yearly_tula(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/yearly/Tula');
        return $content;
    }

    function hj_yearly_brischik(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/yearly/Brischik');
        return $content;
    }

    function hj_yearly_dhanu(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/yearly/Dhanu');
        return $content;
    }

    function hj_yearly_makar(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/yearly/Makar');
        return $content;
    }
    
    function hj_yearly_kumbha(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/yearly/Kumbha');
        return $content;
    }

    function hj_yearly_meen(){
        $content = get_horoscope('https://www.hamropatro.com/rashifal/yearly/Meen');
        $content = substr_replace($content, " ",-164);
        return $content;
    }
?>