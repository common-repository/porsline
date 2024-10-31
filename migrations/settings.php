<?php



function porslinePlugin_create_settings_table()

{

    global $wpdb, $table_prefix;

    $table_name = $table_prefix . "porsline_settings";

    if ($wpdb->get_var("show tables like '$table_name'") != $table_name) {

        $sql = "CREATE TABLE `" . $table_name . "`(";

        $sql .= "`api_key` varchar(100),";

        $sql .= "`lang` int(1)";

        $sql .= ") ENGINE=MyISAM DEFAULT CHARSET=UTF8 AUTO_INCREMENT=1;";

        require_once(ABSPATH . '/wp-admin/includes/upgrade.php');

        dbDelta($sql);
    }



    if (get_locale() == "fa_IR")

        $lang = 1;

    else if (get_locale() == "tr_TR")

        $lang = 2;

    else if (get_locale() == "ar")

        $lang = 3;

    else 

        $lang = 4;



    if (count($wpdb->get_results("SELECT * FROM $table_name")) < 1)

        $wpdb->insert($table_name, array("api_key" => "", "lang" => $lang));
}
