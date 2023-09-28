<?php
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/scraper/simple-html-dom.php';
ini_set('user_agent', 'Mozilla/5.0');

function get_planet_degree($url){
    //get html content from the site.
    $dom = file_get_html($url, false);

    if(!empty($dom)) {
        $divClass = "";
        $i = 0;

        foreach($dom->find('.dpPlanetCardContent') as $divClass) {
            foreach($divClass->find('.dpFullDegreeCell') as $desc) {
                $planetDegree = html_entity_decode($desc->plaintext);
                $planetDegree = preg_replace('/\&#39;/',"",$planetDegree);
                $planetDegreeArray[$i] = html_entity_decode($planetDegree);
            }
            $i++;
        }
    }
    return $planetDegreeArray;
}
?>