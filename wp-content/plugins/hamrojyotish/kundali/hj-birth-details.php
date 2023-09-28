<?php
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/kundali/hj-calculate-birth-chart.php';
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/kundali/hj-form-data.php';

function hj_return_birth_details() {
    $ras = hj_return_moon_rashi();
    $chart = hj_return_nakshatra();
    $rashi = $ras[2];

    $birth_details = '
        <table>
            <tr>
                <td><strong>राशी<strong></td>
                <td>';
                $birth_details .= $rashi . '
                </td>
                <td><strong>नक्षत्र</strong></td>
                <td>';
                $birth_details .= $chart[1] . '
                </td>
            </tr>

            <tr>
                <td><strong>पद<strong></td>
                <td>';
                $birth_details .= $chart[2] . '
                </td>
                <td><strong>अक्षर</strong></td>
                <td>';
                $birth_details .= $chart[3] . '
                </td>
            </tr>

            <tr>
                <td><strong>गण<strong></td>
                <td>';
                $birth_details .= $chart[4] . '
                </td>
                <td><strong>नाडी</strong></td>
                <td>';
                $birth_details .= $chart[5] . '
                </td>
            </tr>

            <tr>
                <td><strong>योनी<strong></td>
                <td>';
                $birth_details .= $chart[6] . '
                </td>
            </tr>
        </table>';
return $birth_details;
}

function hj_return_planet_details(){
    $lagnaRashi = hj_return_chart_rashi();
    $lagna = $lagnaRashi[2];

    $sunRashi = hj_return_sun_rashi();
    $sun = $sunRashi[2];

    $moonRashi = hj_return_moon_rashi();
    $moon = $moonRashi[2];

    $mangalRashi = hj_return_mangal_rashi();
    $mangal = $mangalRashi[2];

    $budhaRashi = hj_return_budha_rashi();
    $budha = $budhaRashi[2];

    $briRashi = hj_return_bri_rashi();
    $bri = $briRashi[2];

    $shukraRashi = hj_return_shukra_rashi();
    $shukra = $shukraRashi[2];

    $shaniRashi = hj_return_shani_rashi();
    $shani = $shaniRashi[2];

    $rahuRashi = hj_return_rahu_rashi();
    $rahu = $rahuRashi[2];

    $ketuRashi = hj_return_ketu_rashi();
    $ketu = $ketuRashi[2];

    $planet_details = '
        <table>
            <tr>
                <td><strong>लग्न/ग्रह</strong></td>
                <td><strong>राशी</strong></td>
            </tr>

            <tr>
                <td>लग्न </td>
                <td>' . $lagna . '</td>
            </tr>

            <tr>
                <td>सूर्य </td>
                <td>' . $sun . '</td>
            </tr>

            <tr>
                <td>चन्द्र </td>
                <td>' . $moon . '</td>
            </tr>

            <tr>
                <td>मंगल </td>
                <td>' . $mangal . '</td>
            </tr>

            <tr>
                <td>बुध </td>
                <td>' . $budha . '</td>
            </tr>

            <tr>
                <td>बृहस्पति </td>
                <td>' . $bri . '</td>
            </tr>

            <tr>
                <td>शुक्र </td>
                <td>' . $shukra . '</td>
            </tr>

            <tr>
                <td>शनि </td>
                <td>' . $shani . '</td>
            </tr>

            <tr>
                <td>राहु </td>
                <td>' . $rahu . '</td>
            </tr>

            <tr>
                <td>केतु </td>
                <td>' . $ketu . '</td>
            </tr>
        </table>
    ';

    return $planet_details;
}

function hj_return_person_details(){
    $person = hj_return_form_data();

    $content = '
        <h4>'. $person[0] . '</h4>
        <p>' . $person[2] . '</p>
        <p>' . $person[1] . '</p>
        <p>' . $person[3] . '</p>
    ';
    return $content;
}
?>