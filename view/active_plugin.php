<?php

class activePorsline
{

    function porslinePlugin_create_settings_table_func()
    {
        require_once(plugin_dir_path(__dir__) . '/migrations/settings.php');

        porslinePlugin_create_settings_table();
    }



    function porslinePlugin_create_survayStyles_table_func()
    {

        require_once(plugin_dir_path(__dir__) . '/migrations/survey_styles.php');

        porslinePlugin_create_surveyStyles_table();
    }
}



$activePorsline = new activePorsline();

register_activation_hook(__FILE__, $activePorsline->porslinePlugin_create_settings_table_func());

register_activation_hook(__FILE__, $activePorsline->porslinePlugin_create_survayStyles_table_func());



function porslinePlugin_cyb_activation_redirect($plugin)
{
    global $wpdb, $table_prefix;
    $set_lang_table_name = $table_prefix . "porsline_settings";
    $get_old_lang = $wpdb->get_results("SELECT * FROM $set_lang_table_name");
    foreach ($get_old_lang as $get_old_lang_item) {
        $get_old_lang = $get_old_lang_item->lang;
    }
    if ($get_old_lang != 4) {
        exit(wp_redirect(admin_url('admin.php?page=porsline-welcome')));
    } else {
        exit(wp_redirect(admin_url('admin.php?page=porsline-settings')));
    }
}

add_action('activated_plugin', 'porslinePlugin_cyb_activation_redirect');
