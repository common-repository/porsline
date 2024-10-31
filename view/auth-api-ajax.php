<?php
function porsline_validate_realtime_token()
{
    check_ajax_referer('nonce_name');
    $current_user = wp_get_current_user();
    if (user_can($current_user, 'administrator')) {
        $key = sanitize_text_field($_POST["key"]);

        $whoamiBody = array('authorization' => 'API-key ' . $key);
        $whoamiConnection = wp_remote_post('https://survey.porsline.ir/api/whoami/', array(
            'method' => 'POST',
            'body' => $whoamiBody
        ));
        $validWho = wp_remote_retrieve_body($whoamiConnection);

        if ($validWho == '{"authenticated": true}') {
            $api_user_info = $validWho;
        } else {
            $whoamiConnection = wp_remote_post('https://survey.porsline.com/api/whoami/', array(
                'method' => 'POST',
                'body' => $whoamiBody
            ));
            $validWho = wp_remote_retrieve_body($whoamiConnection);

            if ($validWho == '{"authenticated": true}') {
                $api_user_info = $validWho;
            } else {
                $api_user_info = new \stdClass();
                $api_user_info->detail = 'is not porsline user';
                $api_user_info = json_encode($api_user_info);
            }
        }

        echo $api_user_info;
        die();
    }
}

add_action("wp_ajax_porsline_validate_realtime_token", "porsline_validate_realtime_token");