<?php
    function hj_get_form_data(){
        $fullname = $_REQUEST["fullname"];
        $pob = $_REQUEST["pob"];
        $dob = $_REQUEST["dob"];
        $tob = $_REQUEST["tob"];

        $formdata[0] = $fullname;
        $formdata[1] = $pob;
        $formdata[2] = $dob;
        $formdata[3] = $tob;
        return $formdata;
    }
?>