<?php

require_once(plugin_dir_path(__dir__) . '/view/lang-strings.php');



function porslinePlugin_a_qoute_admin_action()
{

    add_menu_page(

        porslinePlugin_set_settings()["survey_list_page_title"],

        porslinePlugin_set_settings()["menu_title"],

        "manage_options",

        "porsline-surveys",

        "porslinePlugin_survey_list",

        esc_url(plugins_url('../assets/img/icon.png', __FIle__)),

        5

    );

    add_submenu_page(

        'porsline-surveys',

        porslinePlugin_set_settings()["survey_list_page_title"], //page title

        porslinePlugin_set_settings()["my-forms-menu-title"], //menu title

        'manage_options', //capability,

        'porsline-surveys' //menu slug

    );

    add_submenu_page(

        'porsline-surveys',

        porslinePlugin_set_settings()["settings-page-title"], //page title

        porslinePlugin_set_settings()["settings-menu-title"], //menu title

        'manage_options', //capability,

        'porsline-settings', //menu slug

        'porslinePlugin_porsline_settings' //callback function

    );
    global $wpdb, $table_prefix;
    $set_lang_table_name = $table_prefix . "porsline_settings";
    $get_old_lang = $wpdb->get_results("SELECT * FROM $set_lang_table_name");
    foreach ($get_old_lang as $get_old_lang_item) {
        $get_old_lang = $get_old_lang_item->lang;
    }
    if ($get_old_lang != 4) {
        add_submenu_page(

            'porsline-surveys',

            porslinePlugin_set_settings()["welcome-page-title"], //page title

            porslinePlugin_set_settings()["welcome-menu-title"], //menu title

            'manage_options', //capability,

            'porsline-welcome', //menu slug

            'porslinePlugin_porsline_welcome' //callback function

        );
    }
}

add_action('admin_menu', 'porslinePlugin_a_qoute_admin_action');





function porslinePlugin_survey_list()
{
    require_once(plugin_dir_path(__dir__) . '/panel/survey-list.php');
}



function porslinePlugin_porsline_settings()
{

    require_once(plugin_dir_path(__dir__) . '/panel/settings.php');
}



function porslinePlugin_porsline_welcome()
{

    require_once(plugin_dir_path(__dir__) . '/panel/welcome.php');
}