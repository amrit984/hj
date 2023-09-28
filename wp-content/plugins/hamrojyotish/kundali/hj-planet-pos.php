<?php
    require_once ABSPATH . 'wp-content/plugins/hamrojyotish/scraper/scraper-planet-degree.php';
    require_once ABSPATH . 'wp-content/plugins/hamrojyotish/kundali/hj-form-data.php';
    function hj_return_form_data(){
        $formdata = hj_get_form_data();
        $pob = $formdata[1];
        $dob = $formdata[2];
        $tob = $formdata[3];

        $date = str_replace('-"','/',$dob);
        $newDate = date("d/m/Y", strtotime($date));

        $time = strtotime($tob);
        $newTime = date("H:i", $time);
        $newTime = $newTime . ":00";

        $formdata[2] = $newDate;
        $formdata[3] = $newTime;

        return $formdata;
    }

    function hj_get_lagna_pos(){
        $data = hj_return_form_data();
        $newDate = $data[2];
        $newTime = $data[3];
        $planetDegree = get_planet_degree('https://www.drikpanchang.com/planet/position/planetary-positions-sidereal.html?geoname-id=1283240&date=' . $newDate . '&time='  . $newTime);
        $lagnaDegree = $planetDegree[1];
        return $lagnaDegree;
    }

    function hj_get_sun_pos(){
        $data = hj_return_form_data();
        $newDate = $data[2];
        $newTime = $data[3];
        $planetDegree = get_planet_degree('https://www.drikpanchang.com/planet/position/planetary-positions-sidereal.html?geoname-id=1283240&date=' . $newDate . '&time='  . $newTime);
        $sunDegree = $planetDegree[2];
        return $sunDegree;
    }

    function hj_get_moon_pos(){
        $data = hj_return_form_data();
        $newDate = $data[2];
        $newTime = $data[3];
        $planetDegree = get_planet_degree('https://www.drikpanchang.com/planet/position/planetary-positions-sidereal.html?geoname-id=1283240&date=' . $newDate . '&time='  . $newTime);
        $moonDegree = $planetDegree[3];
        return $moonDegree;
    }

    function hj_get_mangal_pos(){
        $data = hj_return_form_data();
        $newDate = $data[2];
        $newTime = $data[3];
        $planetDegree = get_planet_degree('https://www.drikpanchang.com/planet/position/planetary-positions-sidereal.html?geoname-id=1283240&date=' . $newDate . '&time='  . $newTime);
        $mangalDegree = $planetDegree[4];
        return $mangalDegree;
    }

    function hj_get_budha_pos(){
        $data = hj_return_form_data();
        $newDate = $data[2];
        $newTime = $data[3];
        $planetDegree = get_planet_degree('https://www.drikpanchang.com/planet/position/planetary-positions-sidereal.html?geoname-id=1283240&date=' . $newDate . '&time='  . $newTime);
        $budhaDegree = $planetDegree[5];
        return $budhaDegree;
    }

    function hj_get_bri_pos(){
        $data = hj_return_form_data();
        $newDate = $data[2];
        $newTime = $data[3];
        $planetDegree = get_planet_degree('https://www.drikpanchang.com/planet/position/planetary-positions-sidereal.html?geoname-id=1283240&date=' . $newDate . '&time='  . $newTime);
        $briDegree = $planetDegree[6];
        return $briDegree;
    }

    function hj_get_shukra_pos(){
        $data = hj_return_form_data();
        $newDate = $data[2];
        $newTime = $data[3];
        $planetDegree = get_planet_degree('https://www.drikpanchang.com/planet/position/planetary-positions-sidereal.html?geoname-id=1283240&date=' . $newDate . '&time='  . $newTime);
        $shukraDegree = $planetDegree[7];
        return $shukraDegree;
    }

    function hj_get_shani_pos(){
        $data = hj_return_form_data();
        $newDate = $data[2];
        $newTime = $data[3];
        $planetDegree = get_planet_degree('https://www.drikpanchang.com/planet/position/planetary-positions-sidereal.html?geoname-id=1283240&date=' . $newDate . '&time='  . $newTime);
        $shaniDegree = $planetDegree[8];
        return $shaniDegree;
    }

    function hj_get_rahu_pos(){
        $data = hj_return_form_data();
        $newDate = $data[2];
        $newTime = $data[3];
        $planetDegree = get_planet_degree('https://www.drikpanchang.com/planet/position/planetary-positions-sidereal.html?geoname-id=1283240&date=' . $newDate . '&time='  . $newTime);
        $rahuDegree = $planetDegree[9];
        return $rahuDegree;
    }

    function hj_get_ketu_pos(){
        $data = hj_return_form_data();
        $newDate = $data[2];
        $newTime = $data[3];
        $planetDegree = get_planet_degree('https://www.drikpanchang.com/planet/position/planetary-positions-sidereal.html?geoname-id=1283240&date=' . $newDate . '&time='  . $newTime);
        $ketuDegree = $planetDegree[10];
        return $ketuDegree;
    }

?>