<?php

function porslinePlugin_get_saved_settings()  {
    global $wpdb, $table_prefix;
    $table_name = $table_prefix . "porsline_settings";
    $settings = $wpdb->get_results("SELECT * FROM $table_name");
    return $settings[0];
}

function porslinePlugin_auth_api()  {
    global $wpdb, $table_prefix;
    $table_name = $table_prefix . "porsline_settings";
    $settings = $wpdb->get_results("SELECT * FROM $table_name");
    $api_key = $settings[0]->api_key;

    $get_user_info = wp_remote_get( 'https://survey.porsline.ir/rest-auth/user/' ,
    array( 'timeout' => 10,
   'headers' => array( 'Authorization' => 'API-Key ' . $api_key ) 
    ));
    $body = wp_remote_retrieve_body( $get_user_info );

    $jsonArrayResponse = json_decode($body);

    if (array_key_exists('detail', $jsonArrayResponse)) {
        $get_user_info = wp_remote_get( 'https://survey.porsline.com/rest-auth/user/' ,
        array( 'timeout' => 10,
        'headers' => array( 'Authorization' => 'API-Key ' . $api_key ) 
        ));
        $body = wp_remote_retrieve_body( $get_user_info );

        $jsonArrayResponse = json_decode($body);
    }
    
    return $jsonArrayResponse;
}