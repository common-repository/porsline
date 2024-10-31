<?php

function porslinePlugin_get_add_surveys_func() {
    global $wpdb, $table_prefix;
    $table_name = $table_prefix . "porsline_survay_styles"; 
    $surveys = $wpdb->get_results("SELECT * FROM $table_name");

    return $surveys;
}