<?php
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/kundali/hj-calculate-birth-chart.php';

function hj_return_house_rashi(){
    $rashi = hj_return_chart_rashi();
    $n = $rashi[1];
    $houseRashi[1] = $n;
    $temp = $n;
    for ($i = 2; $i <=12; $i++){
        if($temp==12){
            $temp=0;
        }
        $houseRashi[$i] = ++$temp;
    }
    return $houseRashi;
}

function hj_draw_birth_chart(){
    $house = hj_return_house_rashi();
    $p = hj_return_planet();
    
    $birth_chart_image = '
    <div class="hj-svg-container">
        <svg class="hj-svg-content" viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
            <!--Square Start-->
            <!--Top-->
            <polygon points="0, 0, 500, 0" style="stroke:#673ab7;stroke-width:3;" />
            <!--right-->
            <polygon points="500, 0, 500, 500" style="stroke:#673ab7;stroke-width:3;" />
            <!--bottom-->
            <polygon points="500, 500, 0, 500" style="stroke:#673ab7;stroke-width:3;" />
            <!--left-->
            <polygon points="0, 500, 0, 0" style="stroke:#673ab7;stroke-width:3;" />
            <!--square end-->

            <!--Diagonal Start-->
            <!--Left Top to Right Bottom-->
            <polygon points="0, 0, 500, 500" style="stroke:#673ab7;stroke-width:1;" />
            <!--Right Top to Left Bottom-->
            <polygon points="500, 0, 0, 500" style="stroke:#673ab7;stroke-width:1;" />
            <!--Diagonal End-->

            <!--Hexagon Start-->
            <!--Top to Left-->
            <polygon points="250, 0, 0, 250" style="stroke:#673ab7;stroke-width:1;" />
            <!--Left to Bottom-->
            <polygon points="0, 250, 250, 500" style="stroke:#673ab7;stroke-width:1;" />
            <!--Bottom to Right-->
            <polygon points="250, 500, 500, 250" style="stroke:#673ab7;stroke-width:1;" />
            <!--Right to Top-->
            <polygon points="500, 250, 250,0" style="stroke:#673ab7;stroke-width:1s;" />
            <!--Hexagon End-->

            <!--Rashi Start-->
            <!--Starts from first room and goes anti-clockwise-->
            <text x="245" y="200">'
            ?>
            <?php
            $birth_chart_image .=  $house[1] . 
            '</text>
            <text x="120" y="100">'
            ?>
            <?php
            if($n==12){
                $n=0;
            }
            $birth_chart_image .= $house[2] . 
            '</text>
            <text x="100" y="130">'
            ?>
            <?php
            if($n==12){
                $n=0;
            }
            $birth_chart_image .= $house[3] . 
            '</text>
            <text x="200" y="255">'
            ?>
            <?php
            if($n==12){
                $n=0;
            }
            $birth_chart_image .= $house[4] . 
            '</text>
            <text x="90" y="380">'
            ?>
            <?php
            if($n==12){
                $n=0;
            }
            $birth_chart_image .= $house[5] . 
            '</text>
            <text x="115" y="410">'
            ?>
            <?php
            if($n==12){
                $n=0;
            }
            $birth_chart_image .= $house[6] . 
            '</text>
            <text x="245" y="290">'
            ?>
            <?php
            if($n==12){
                $n=0;
            }
            $birth_chart_image .= $house[7] . 
            '</text>
            <text x="370" y="410">'
            ?>
            <?php
            if($n==12){
                $n=0;
            }
            $birth_chart_image .= $house[8] . 
            '</text>
            <text x="390" y="380">'
            ?>
            <?php
            if($n==12){
                $n=0;
            }
            $birth_chart_image .= $house[9] . 
            '</text>
            <text x="280" y="255">'
            ?>
            <?php
            if($n==12){
                $n=0;
            }
            $birth_chart_image .= $house[10] . 
            '</text>
            <text x="390" y="130">'
            ?>
            <?php
            if($n==12){
                $n=0;
            }
            $birth_chart_image .= $house[11] . 
            '</text>
            <text x="370" y="100">'
            ?>
            <?php
            if($n==12){
                $n=0;
            }
            $birth_chart_image .= $house[12] . 
            '</text>
            <!--Rashi End-->

            <!--Planets Start-->
            <!--Starts from first room and goes anti-clockwise-->
            <text x="200" y="130">'
            ?>
            <?php

            $birth_chart_image .= $p[1] . 
            '</text>
            <text x="75" y="20">'
            ?>
            <?php
            $birth_chart_image .= $p[2] . 
            '</text>
            <text x="20" y="130">'
            ?>
            <?php
            $birth_chart_image .= $p[3] . 
            '</text>
            <text x="75" y="255">'
            ?>
            <?php
            $birth_chart_image .= $p[4] . 
            '</text>
            <text x="20" y="380">'
            ?>
            <?php
            $birth_chart_image .= $p[5] . 
            '</text>
            <text x="75" y="480">'
            ?>
            <?php
            $birth_chart_image .= $p[6] . 
            '</text>
            <text x="200" y="380">'
            ?>
            <?php
            $birth_chart_image .= $p[7] . 
            '</text>
            <text x="325" y="480">'
            ?>
            <?php
            $birth_chart_image .= $p[8] . 
            '</text>
            <text x="415" y="380">'
            ?>
            <?php
            $birth_chart_image .= $p[9] . 
            '</text>
            <text x="325" y="255">'
            ?>
            <?php
            $birth_chart_image .= $p[10] . 
            '</text>
            <text x="415" y="130">'
            ?>
            <?php
            $birth_chart_image .= $p[11] . 
            '</text>
            <text x="335" y="20">'
            ?>
            <?php
            $birth_chart_image .= $p[12] . 
            '</text>
            <!--Planets End-->

        Sorry, your browser does not support inline SVG.
        </svg>
    </div>
    ';
return $birth_chart_image;
}
?>