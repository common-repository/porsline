<?php

function porslinePlugin_get_folders_from_api() {

    global $wpdb, $table_prefix;
    $table_name = $table_prefix . "porsline_settings";
    $settings = $wpdb->get_results("SELECT * FROM $table_name");
    $api_key = $settings[0]->api_key;

    $whoamiBody = array('authorization' => 'API-key '.$api_key);

    $whoamiConnection = wp_remote_post('https://survey.porsline.ir/api/whoami/', array(
        'method' => 'POST',
        'body' => $whoamiBody
    ));
    $validWho = wp_remote_retrieve_body( $whoamiConnection );

    if($validWho == '{"authenticated": true}')
        $domain = "ir";
    else {
        $whoamiConnection = wp_remote_post('https://survey.porsline.com/api/whoami/', array(
            'method' => 'POST',
            'body' => $whoamiBody
        ));
        $validWho = wp_remote_retrieve_body( $whoamiConnection );

        if($validWho == '{"authenticated": true}')
            $domain = "com";
        else
            $domain = "none";
    }
    
    if($domain != "none") {

        $foldersConnection = wp_remote_get( 'https://survey.porsline.'.$domain.'/api/folders/?nested=true' ,
        array( 'timeout' => 10,
               'headers' => array( 'Authorization' => 'API-Key ' . $api_key ) 
        ));
        $folders = wp_remote_retrieve_body( $foldersConnection );

        $jsonArrayResponse = json_decode($folders);
        return $jsonArrayResponse;
    } else {
        $api_user_info = new \stdClass();
        $api_user_info->detail = 'is not porsline user';
        $api_user_info = $api_user_info;
        return $api_user_info;
    }
}