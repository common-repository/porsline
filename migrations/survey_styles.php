<?php

function porslinePlugin_create_surveyStyles_table()
{
    global $wpdb, $table_prefix;
    $table_name = $table_prefix . "porsline_survay_styles"; 
    if ($wpdb->get_var("show tables like '$table_name'") != $table_name) {
        $sql = "CREATE TABLE `" . $table_name . "`(";
        $sql .= "`id` int(100) AUTO_INCREMENT,";
        $sql .= "PRIMARY KEY  (id),";
        $sql .= "`survay_id` varchar(100),";
        $sql .= "`survay_code` varchar(100),";
        $sql .= "`type` int(1),";
        $sql .= "`popup_type` int(1),";
        $sql .= "`popup_nav` int(1),";
        $sql .= "`popup_btn_txt` varchar(100),";
        $sql .= "`popup_btn_color` varchar(10),";
        $sql .= "`popup_btn_txt_color` varchar(10),";
        $sql .= "`popup_display_after` int(100),";
        $sql .= "`width` int(3),";
        $sql .= "`height` int(3),";
        $sql .= "`width_type` int(1),";
        $sql .= "`height_type` int(1),";
        $sql .= "`border_type` varchar(10),";
        $sql .= "`border_color` varchar(10),";
        $sql .= "`border_weight` int(3),";
        $sql .= "`border_radius` int(3),";
        $sql .= "`margin_top` int(10),";
        $sql .= "`margin_left` int(10),";
        $sql .= "`margin_bottom` int(10),";
        $sql .= "`margin_right` int(10),";
        $sql .= "`custom_css` varchar(65535)";
        $sql .= ") ENGINE=MyISAM DEFAULT CHARSET=UTF8 AUTO_INCREMENT=1;";
        require_once(ABSPATH . '/wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
}