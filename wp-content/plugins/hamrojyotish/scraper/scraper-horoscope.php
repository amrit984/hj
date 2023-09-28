<?php
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/scraper/simple-html-dom.php';
ini_set('user_agent', 'Mozilla/5.0');
function get_horoscope($url){
    //get html content from the site.
    $dom = file_get_html($url, false);

    if(!empty($dom)) {
        $divClass = $rashi = "";

        foreach($dom->find('.column12') as $divClass) {
            foreach($divClass->find('.desc') as $desc) {
                $rashifal = html_entity_decode($desc->plaintext);
                $rashifal = preg_replace('/\&#39;/',"",$rashifal);
                $rashifal_text = html_entity_decode($rashifal);
            }
        }
    }
    return $rashifal_text;
}
?>