<?php
    require_once ABSPATH . 'wp-content/plugins/hamrojyotish/kundali/hj-planet-pos.php';
    require_once ABSPATH . 'wp-content/plugins/hamrojyotish/kundali/hj-birth-chart-image.php';

    function hj_calculate_rashi($degree) {
        $rashiNum = 0;

        if ($degree >= 0 && $degree < 30) {
            $rashiNum = 1;
            $rashiText = "मेष";
            $degreeDiff = $degree - 0;
        } else if ($degree >= 30 && $degree <60) {
            $rashiNum = 2;
            $rashiText = "वृष";
            $degreeDiff = $degree - 30;
        } else if ($degree >= 60 && $degree <90) {
            $rashiNum = 3;
            $degreeDiff = $degree - 60;
            $rashiText = "मिथुन";
        } else if ($degree >= 90 && $degree <120) {
            $rashiNum = 4;
            $degreeDiff = $degree - 90;
            $rashiText = "कर्कट";
        } else if ($degree >= 120 && $degree <150) {
            $rashiNum = 5;
            $degreeDiff = $degree - 120;
            $rashiText = "सिंह";
        } else if ($degree >= 150 && $degree <180) {
            $rashiNum = 6;
            $degreeDiff = $degree - 150;
            $rashiText = "कन्या";
        } else if ($degree >= 180 && $degree <210) {
            $rashiNum = 7;
            $degreeDiff = $degree - 180;
            $rashiText = "तुला";
        } else if ($degree >= 210 && $degree <240) {
            $rashiNum = 8;
            $degreeDiff = $degree - 210;
            $rashiText = "वृश्चिक";
        } else if ($degree >= 240 && $degree <270) {
            $rashiNum = 9;
            $degreeDiff = $degree - 240;
            $rashiText = "धनु";
        } else if ($degree >= 270 && $degree <300) {
            $rashiNum = 10;
            $degreeDiff = $degree - 270;
            $rashiText = "मकर";
        } else if ($degree >= 300 && $degree <330) {
            $rashiNum = 11;
            $degreeDiff = $degree - 300;
            $rashiText = "कुम्भ";
        } else {
            $rashiNum = 12;
            $degreeDiff = $degree - 330;
            $rashiText = "मीन";
        }
        $chartData[1] = $rashiNum;
        $chartData[2] = $rashiText;
        $chartData[3] = $degreeDiff;
        return $chartData;
    }

    function hj_return_moon_rashi() {
        $moonPos = hj_get_moon_pos();
        $result = hj_calculate_rashi( $moonPos );
        return $result;
    }

    function hj_return_chart_rashi(){
        $lagnaPos = hj_get_lagna_pos();
        $result = hj_calculate_rashi($lagnaPos);
        return $result;
    }

    function hj_return_sun_rashi(){
        $sunPos = hj_get_sun_pos();
        $result = hj_calculate_rashi($sunPos);
        return $result;
    }

    function hj_return_mangal_rashi(){
        $mangalPos = hj_get_mangal_pos();
        $result = hj_calculate_rashi($mangalPos);
        return $result;
    }

    function hj_return_budha_rashi(){
        $budhaPos = hj_get_budha_pos();
        $result = hj_calculate_rashi($budhaPos);
        return $result;
    }

    function hj_return_bri_rashi(){
        $briPos = hj_get_bri_pos();
        $result = hj_calculate_rashi($briPos);
        return $result;
    }

    function hj_return_shukra_rashi(){
        $shukraPos = hj_get_shukra_pos();
        $result = hj_calculate_rashi($shukraPos);
        return $result;
    }

    function hj_return_shani_rashi(){
        $shaniPos = hj_get_shani_pos();
        $result = hj_calculate_rashi($shaniPos);
        return $result;
    }

    function hj_return_rahu_rashi(){
        $rahuPos = hj_get_rahu_pos();
        $result = hj_calculate_rashi($rahuPos);
        return $result;
    }

    function hj_return_ketu_rashi(){
        $ketuPos = hj_get_ketu_pos();
        $result = hj_calculate_rashi($ketuPos);
        return $result;
    }



    function hj_calculate_planet_house($rashi){
        $house = hj_return_house_rashi();
        $i = 1;
        foreach($house as $h){
            if($h == $rashi){
                $planetHouse = $i;
            }
            $i++;
        }
        return $planetHouse;
    }

    function hj_return_planet() {
        $lagnaPos = hj_get_lagna_pos();
        $lagnaRashi = hj_calculate_rashi($lagnaPos);
        $lagnaHouse = hj_calculate_planet_house($lagnaRashi[1]);
        $planetPos[$lagnaHouse] .= 'लं ';

        $sunPos = hj_get_sun_pos();
        $sunRashi = hj_calculate_rashi($sunPos);
        $sunHouse = hj_calculate_planet_house($sunRashi[1]);
        $planetPos[$sunHouse] .= 'सू ';

        $moonPos = hj_get_moon_pos();
        $moonRashi = hj_calculate_rashi($moonPos);
        $moonHouse = hj_calculate_planet_house($moonRashi[1]);
        $planetPos[$moonHouse] .= 'चं ';

        $mangalPos = hj_get_mangal_pos();
        $mangalRashi = hj_calculate_rashi($mangalPos);
        $mangalHouse = hj_calculate_planet_house($mangalRashi[1]);
        $planetPos[$mangalHouse] .= 'मं ';

        $budhaPos = hj_get_budha_pos();
        $budhaRashi = hj_calculate_rashi($budhaPos);
        $budhaHouse = hj_calculate_planet_house($budhaRashi[1]);
        $planetPos[$budhaHouse] .= 'बु ';

        $briPos = hj_get_bri_pos();
        $briRashi = hj_calculate_rashi($briPos);
        $briHouse = hj_calculate_planet_house($briRashi[1]);
        $planetPos[$briHouse] .= 'वृ ';

        $shukraPos = hj_get_shukra_pos();
        $shukraRashi = hj_calculate_rashi($shukraPos);
        $shukraHouse = hj_calculate_planet_house($shukraRashi[1]);
        $planetPos[$shukraHouse] .= 'शु ';

        $shaniPos = hj_get_shani_pos();
        $shaniRashi = hj_calculate_rashi($shaniPos);
        $shaniHouse = hj_calculate_planet_house($shaniRashi[1]);
        $planetPos[$shaniHouse] .= 'श ';

        $rahuPos = hj_get_rahu_pos();
        $rahuRashi = hj_calculate_rashi($rahuPos);
        $rahuHouse = hj_calculate_planet_house($rahuRashi[1]);
        $planetPos[$rahuHouse] .= 'रा ';

        $ketuPos = hj_get_ketu_pos();
        $ketuRashi = hj_calculate_rashi($ketuPos);
        $ketuHouse = hj_calculate_planet_house($ketuRashi[1]);
        $planetPos[$ketuHouse] .= 'के ';

        return $planetPos;
    }

    function hj_return_nakshatra(){
        $nakshatraList = ['अश्विनी', 'भरणी', 'कृत्तिका', 'रोहिणी', 'मृगशिरा', 'आर्द्रा', 'पुनर्वशु', 'पुष्य', 'अश्लेशा', 'मघा', 'पूर्व फाल्गुनी', 'उत्तरा फाल्गुनी', 'हस्त', 'चित्रा', 'स्वाति', 'विशाखा', 'अनुराधा', 'ज्येष्ठा', 'मूल', 'पूर्वषाढा', 'उत्तराषाढा', 'श्रवण', 'धनिष्ठा', 'शतभिषा', 'पूर्वभाद्रपदा', 'उत्तरभाद्रपदा', 'रेवती'];
        
        $padList[1] = ['चू', 'चे', 'चो', 'ला'];
        $padList[2] = ['ली', 'लू', 'ले', 'लो'];
        $padList[3] = ['अ', 'ई', 'उ', 'ए'];
        $padList[4] = ['ओ', 'वा', 'वी', 'वु'];
        $padList[5] = ['वे', 'वो', 'क', 'की'];
        $padList[6] = ['कु', 'घ', 'ङ', 'छ'];
        $padList[7] = ['के', 'को', 'ह', 'ही'];
        $padList[8] = ['हु', 'हे', 'हो', 'डा'];
        $padList[9] = ['डि', 'डु', 'डे', 'डो'];
        $padList[10] = ['मा', 'मी', 'मू', 'मे'];
        $padList[11] = ['मो', 'टा', 'टी', 'टू'];
        $padList[12] = ['टे', 'टो', 'पा', 'पी'];
        $padList[13] = ['पू', 'ष', 'ण', 'ठ'];
        $padList[14] = ['पे', 'पो', 'रा', 'रि'];
        $padList[15] = ['रु', 'रे', 'रो', 'ता'];
        $padList[16] = ['ती', 'तू', 'ते', 'तो'];
        $padList[17] = ['ना', 'नी', 'नू', 'ने'];
        $padList[18] = ['नो', 'या', 'यी', 'यू'];
        $padList[19] = ['ये', 'यो', 'भा', 'भी'];
        $padList[20] = ['भू', 'धा', 'फा', 'ढा'];
        $padList[21] = ['भे', 'भो', 'जा', 'जी'];
        $padList[22] = ['जू खी', 'जे खू', 'जो खे', 'ग खो'];
        $padList[23] = ['गा', 'गी', 'गू', 'गे'];
        $padList[24] = ['गो', 'सा', 'सी', 'सू'];
        $padList[25] = ['से', 'सो', 'दा', 'दी'];
        $padList[26] = ['दू', 'थ', 'झ', 'ञ'];
        $padList[27] = ['दे', 'दो', 'चा', 'ची'];


        $moonPos = hj_get_moon_pos();
        $getDiff = hj_calculate_rashi($moonPos);
        $diff = $getDiff[3];
        $rashiN = $getDiff[1];

        if($rashiN == 1){
            if($diff<13.33333){
                $nakshatra = $nakshatraList[0];
                $nakshatraNum = 1;
            } else if($diff>13.33333 && $diff<26.66667){
                $nakshatra = $nakshatraList[1];
                $nakshatraNum = 2;
            } else{
                $nakshatra = $nakshatraList[2];
                $nakshatraNum = 3;
            }
        } else if($rashiN == 2){
            if($diff<10){
                $nakshatra = $nakshatraList[2];
                $nakshatraNum = 3;
            } else if($diff>=10 && $diff<23.33333){
                $nakshatraNum = 4;
                $nakshatra = $nakshatraList[3];
            } else{
                $nakshatraNum = 5;
                $nakshatra = $nakshatraList[4];
            }
        } else if($rashiN == 3){
            if($diff<6.66667){
                $nakshatraNum = 5;
                $nakshatra = $nakshatraList[4];
            } else if($diff>=6.66667 && $diff<20){
                $nakshatraNum = 6;
                $nakshatra = $nakshatraList[5];
            } else{
                $nakshatraNum = 7;
                $nakshatra = $nakshatraList[6];
            }
        } else if($rashiN == 4){
            if($diff<3.33333){
                $nakshatraNum = 7;
                $nakshatra = $nakshatraList[6];
            } else if($diff>=3.33333 && $diff<16.66667){
                $nakshatraNum = 8;
                $nakshatra = $nakshatraList[7];
            } else{
                $nakshatraNum = 9;
                $nakshatra = $nakshatraList[8];
            }
        } else if($rashiN == 5){
            if($diff<13.33333){
                $nakshatraNum = 10;
                $nakshatra = $nakshatraList[9];
            } else if($diff>=13.33333 && $diff<26.66667){
                $nakshatraNum = 11;
                $nakshatra = $nakshatraList[10];
            } else{
                $nakshatraNum = 12;
                $nakshatra = $nakshatraList[11];
            }
        } else if($rashiN == 6){
            if($diff<10){
                $nakshatraNum = 12;
                $nakshatra = $nakshatraList[11];
            } else if($diff>=10 && $diff<23.33333){
                $nakshatraNum = 13;
                $nakshatra = $nakshatraList[12];
            } else{
                $nakshatraNum = 14;
                $nakshatra = $nakshatraList[13];
            }
        } else if($rashiN == 7){
            if($diff<6.66667){
                $nakshatraNum = 14;
                $nakshatra = $nakshatraList[13];
            } else if($diff>=6.66667 && $diff<20){
                $nakshatraNum = 15;
                $nakshatra = $nakshatraList[14];
            } else{
                $nakshatraNum = 16;
                $nakshatra = $nakshatraList[15];
            } 
        } else if($rashiN == 8){
            if($diff<3.33333){
                $nakshatraNum = 16;
                $nakshatra = $nakshatraList[15];
            } else if($diff>=3.33333 && $diff<16.66667){
                $nakshatraNum = 17;
                $nakshatra = $nakshatraList[16];
            } else{
                $nakshatraNum = 18;
                $nakshatra = $nakshatraList[17];
            } 
        } else if($rashiN == 9){
            if($diff<13.33333){
                $nakshatraNum = 19;
                $nakshatra = $nakshatraList[18];
            } else if($diff>=13.33333 && $diff<26.66667){
                $nakshatraNum = 20;
                $nakshatra = $nakshatraList[19];
            } else{
                $nakshatraNum = 21;
                $nakshatra = $nakshatraList[20];
            } 
        } else if($rashiN == 10){
            if($diff<10){
                $nakshatraNum = 21;
                $nakshatra = $nakshatraList[20];
            } else if($diff>=10 && $diff<23.33333){
                $nakshatraNum = 22;
                $nakshatra = $nakshatraList[21];
            } else{
                $nakshatraNum = 23;
                $nakshatra = $nakshatraList[22];
            } 
        } else if($rashiN == 11){
            if($diff<6.66667){
                $nakshatraNum = 23;
                $nakshatra = $nakshatraList[22];
            } else if($diff>=6.66667 && $diff<20){
                $nakshatraNum = 24;
                $nakshatra = $nakshatraList[23];
            } else{
                $nakshatraNum = 25;
                $nakshatra = $nakshatraList[24];
            } 
        } else{
            if($diff<3.33333){
                $nakshatraNum = 25;
                $nakshatra = $nakshatraList[24];
            } else if($diff>=3.33333 && $diff<16.66667){
                $nakshatraNum = 26;
                $nakshatra = $nakshatraList[25];
            } else{
                $nakshatraNum = 27;
                $nakshatra = $nakshatraList[26];
            } 
        }

        $dev = [1,5,7,8,13,15,17,22,27];
        $man = [2,4,6,11,12,20,21,25,26];

        $aadi = [1,6,7,12,13,18,19,24,25];
        $madhya = [2,5,8,11,14,17,20,23,26];

        if(in_array($nakshatraNum, $dev, true)){
            $gan = 'देव';
        } else if(in_array($nakshatraNum, $man, true)){
            $gan = 'मनुष्य';
        } else{
            $gan = 'राक्षस';
        }

        if(in_array($nakshatraNum, $aadi, true)){
            $nadi = 'आदी';
        } else if(in_array($nakshatraNum, $madhya, true)){
            $nadi = 'मध्य';
        } else{
            $nadi = 'अन्त्य';
        }

        if($nakshatraNum == 1 || $nakshatraNum == 24){
            $yoni = 'घोडा'; 
        } else if($nakshatraNum == 2 || $nakshatraNum == 27){
            $yoni = 'हात्ती';
        } else if($nakshatraNum == 3 || $nakshatraNum == 8){
            $yoni = 'बोका';
        } else if($nakshatraNum == 4){
            $yoni = 'नाग';
        } else if($nakshatraNum == 5){
            $yoni = 'साप';
        } else if($nakshatraNum == 6 || $nakshatraNum == 19){
            $yoni = 'कुकुर';
        } else if($nakshatraNum == 7 || $nakshatraNum == 9){
            $yoni = 'बिरालो';
        } else if($nakshatraNum == 10 || $nakshatraNum == 11){
            $yoni = 'मूसा';
        } else if($nakshatraNum == 12){
            $yoni = 'साँढे';
        } else if($nakshatraNum == 13 || $nakshatraNum == 15){
            $yoni = 'भैंसी';
        } else if($nakshatraNum == 14 || $nakshatraNum == 16){
            $yoni = 'बाघ';
        } else if($nakshatraNum == 17 || $nakshatraNum == 18){
            $yoni = 'मृग';
        } else if($nakshatraNum == 20 || $nakshatraNum == 22){
            $yoni = 'बाँदर';
        } else if($nakshatraNum == 21){
            $yoni = 'न्याउरी';
        } else if($nakshatraNum == 23 || $nakshatraNum == 25){
            $yoni = 'सिंह';
        } else{
            $yoni = 'गाई';
        }

        $nakshatraPad = 16.66667 - $diff;
        $nakshatraPad = abs($nakshatraPad);

        if($nakshatraPad < 3.33333){
            $pad = 1;
        } else if($nakshatraPad >= 3.33333 && $nakshatraPad < 6.66667){
            $pad = 2;
        } else if($nakshatraPad >= 6.66667 && $nakshatraPad < 10){
            $pad = 3;
        } else{
            $pad = 4;
        }

        $i = $nakshatraNum;
        $j = $pad - 1;

        $letter = $padList[$i][$j];
        
        $chartDetails[1] = $nakshatra;
        $chartDetails[2] = $pad;
        $chartDetails[3] = $letter;
        $chartDetails[4] = $gan;
        $chartDetails[5] = $nadi;
        $chartDetails[6] = $yoni;

        return $chartDetails;
    }
?>