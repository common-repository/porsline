<?php
require_once(plugin_dir_path(__dir__) . '/view/lang-strings.php');

require_once(plugin_dir_path(__dir__) . '/view/get-added-surveys.php');

require_once(plugin_dir_path(__dir__) . '/view/get-folders.php');

require_once(plugin_dir_path(__dir__) . '/view/settings.php');



$saved_settings = porslinePlugin_get_saved_settings();
$folder_json = porslinePlugin_get_folders_from_api();



if (isset($_POST["porsline-submit-new-survey"])) {

    $survey_id = sanitize_text_field($_POST["survey-id"]);

    $survey_preview_code = sanitize_text_field($_POST["survey-response-code"]);



    global $wpdb, $table_prefix;

    $table_name = $table_prefix . "porsline_survay_styles";


    if (get_locale() == "fa_IR") {
        $test = $wpdb->insert($table_name, array(
            "survay_id" => $survey_id,

            "survay_code" => $survey_preview_code,

            "type" => 1,

            "popup_type" => 1,

            "popup_nav" => 1,

            "popup_btn_txt" => "مایلم جواب دهم",

            "popup_btn_color" => "#3b368e",

            "popup_btn_txt_color" => "#ffffff",

            "popup_display_after" => 5,

            "width" => 80,

            "height" => 500,

            "width_type" => 1,

            "height_type" => 2,

            "border_type" => "solid",

            "border_color" => "#bdc3c7",

            "border_weight" => "1",

            "border_radius" => "10",

            "margin_top" => 0,

            "margin_left" => 0,

            "margin_bottom" => 0,

            "margin_right" => 10,

            "custom_css" => ""

        ));
    } else if (get_locale() == "tr_TR") {
        $test = $wpdb->insert($table_name, array(
            "survay_id" => $survey_id,

            "survay_code" => $survey_preview_code,

            "type" => 1,

            "popup_type" => 1,

            "popup_nav" => 1,

            "popup_btn_txt" => "Cevap vermek istiyorum",

            "popup_btn_color" => "#3b368e",

            "popup_btn_txt_color" => "#ffffff",

            "popup_display_after" => 5,

            "width" => 80,

            "height" => 500,

            "width_type" => 1,

            "height_type" => 2,

            "border_type" => "solid",

            "border_color" => "#bdc3c7",

            "border_weight" => "1",

            "border_radius" => "10",

            "margin_top" => 0,

            "margin_left" => 10,

            "margin_bottom" => 0,

            "margin_right" => 0,

            "custom_css" => ""

        ));
    } else if (get_locale() == "ar") {
        $test = $wpdb->insert($table_name, array(
            "survay_id" => $survey_id,

            "survay_code" => $survey_preview_code,

            "type" => 1,

            "popup_type" => 1,

            "popup_nav" => 1,

            "popup_btn_txt" => "أريد الإجابة",

            "popup_btn_color" => "#3b368e",

            "popup_btn_txt_color" => "#ffffff",

            "popup_display_after" => 5,

            "width" => 80,

            "height" => 500,

            "width_type" => 1,

            "height_type" => 2,

            "border_type" => "solid",

            "border_color" => "#bdc3c7",

            "border_weight" => "1",

            "border_radius" => "10",

            "margin_top" => 0,

            "margin_left" => 0,

            "margin_bottom" => 0,

            "margin_right" => 10,

            "custom_css" => ""

        ));
    } else {
        $test = $wpdb->insert($table_name, array(
            "survay_id" => $survey_id,

            "survay_code" => $survey_preview_code,

            "type" => 1,

            "popup_type" => 1,

            "popup_nav" => 1,

            "popup_btn_txt" => "Willing to answer",

            "popup_btn_color" => "#3b368e",

            "popup_btn_txt_color" => "#ffffff",

            "popup_display_after" => 5,

            "width" => 80,

            "height" => 500,

            "width_type" => 1,

            "height_type" => 2,

            "border_type" => "solid",

            "border_color" => "#bdc3c7",

            "border_weight" => "1",

            "border_radius" => "10",

            "margin_top" => 0,

            "margin_left" => 10,

            "margin_bottom" => 0,

            "margin_right" => 0,

            "custom_css" => ""

        ));
    }

    echo "<meta http-equiv='refresh' content='0'>";
} else if (isset($_POST["porsline_delete_survey"])) {

    $id = sanitize_text_field($_POST["id"]);



    global $wpdb, $table_prefix;

    $table_name = $table_prefix . "porsline_survay_styles";



    $wpdb->delete($table_name, array("id" => $id));



    echo "<meta http-equiv='refresh' content='0'>";
} else if (isset($_POST["porsline-update-design-btn"])) {

    $id = sanitize_text_field($_POST["porsline-survey-id"]);

    $type = sanitize_text_field($_POST["porsline-design-type"]);

    $popup_nav = sanitize_text_field($_POST["porsline-design-popup-nav"]);

    $width = sanitize_text_field($_POST["porsline-design-width"]);

    $height = sanitize_text_field($_POST["porsline-design-height"]);

    $width_type = sanitize_text_field($_POST["porsline-design-width-type"]);

    $height_type = sanitize_text_field($_POST["porsline-design-height-type"]);

    $border_type = sanitize_text_field($_POST["porsline-design-border-type"]);

    $border_color = sanitize_text_field($_POST["porsline-design-border-color"]);

    $border_weight = sanitize_text_field($_POST["porsline-design-border-weight"]);

    $border_radius = sanitize_text_field($_POST["porsline-design-border-radius"]);

    $margin_top = sanitize_text_field($_POST["margin-top"]);

    $margin_left = sanitize_text_field($_POST["margin-left"]);

    $margin_bottom = sanitize_text_field($_POST["margin-bottom"]);

    $margin_right = sanitize_text_field($_POST["margin-right"]);

    $popup_type = sanitize_text_field($_POST["porsline-pop-type"]);



    if ($popup_type == 1)

        $popup_btn_txt = sanitize_text_field($_POST["porsline-popup-btn-txt"]);

    else if ($popup_type == 3)

        $popup_btn_txt = sanitize_text_field($_POST["porsline-popup-link-txt"]);

    else

        $popup_btn_txt = sanitize_text_field($_POST["porsline-popup-btn-txt"]);



    $popup_btn_color = sanitize_text_field($_POST["porsline-popup-button-color"]);

    $popup_btn_txt_color = sanitize_text_field($_POST["porsline-popup-button-txt-color"]);

    $popup_display_after = sanitize_text_field($_POST["porsline-popup-time"]);

    global $wpdb, $table_prefix;

    $table_name = $table_prefix . "porsline_survay_styles";



    $wpdb->update($table_name, array(

        "id" => $id,

        "type" => $type,

        "popup_type" => $popup_type,

        "popup_btn_txt" => $popup_btn_txt,

        "popup_btn_color" => $popup_btn_color,

        "popup_btn_txt_color" => $popup_btn_txt_color,

        "popup_display_after" => $popup_display_after,

        "popup_nav" => $popup_nav,

        "width" => $width,

        "height" => $height,

        "width_type" => $width_type,

        "height_type" => $height_type,

        "border_type" => $border_type,

        "border_color" => $border_color,

        "border_weight" => $border_weight,

        "border_radius" => $border_radius,

        "margin_top" => $margin_top,

        "margin_left" => $margin_left,

        "margin_bottom" => $margin_bottom,

        "margin_right" => $margin_right,

        "custom_css" => $custom_css

    ), array("id" => $id));



    echo "<meta http-equiv='refresh' content='0'>";
} else {
    global $wpdb, $table_prefix;
    $lang_table_name = $table_prefix . "porsline_settings";
    $lang = $wpdb->get_results("SELECT `lang` FROM $lang_table_name");
    foreach ($lang as $lang_item) {
        $lang = $lang_item->lang;
        break;
    }

    if ($lang == 1 || $lang == 3) {
?>
        <?php
        if ($lang == 3) {
        ?>
            <style>
                @font-face {

                    font-family: 'Tajawal', sans-serif !important;

                }

                div.porsline-survey-list-page div,
                a,
                span,
                h1,
                h2,
                h3,
                h4 {

                    font-family: 'Tajawal', sans-serif !important;

                }
            </style>
    <?php
        }
    }
    ?>
    <input type="hidden" id="lang-tag" value="<?php echo esc_html($lang); ?>">

    <div class="porsline-survey-list-page">

        <div id="porsline-header">

            <h2><?php echo esc_html(porslinePlugin_set_settings()["survey_list_page_heading"]); ?></h2>
            <?php
            if ($lang == 1) {
            ?>
                <div id="porsline-icon"><a style="text-decoration: none;" href="https://porsline.ir/" target="_blank"><span style="color: #e95438;">پُرس</span><span style="color: #0070e0;">&zwnj;لاین</span></a></div>
            <?php
            } else if ($lang == 2 || $lang == 4) {
            ?>
                <div id="porsline-icon"><a style="text-decoration: none;" href="https://porsline.com/tr/" target="_blank"><span style="color: #e95438;">Pors</span><span style="color: #0070e0;">line</span></a></div>
            <?php
            } else if ($lang == 3) {
            ?>
                <div id="porsline-icon"><a style="text-decoration: none;" href="https://porsline.ir/" target="_blank"><span style="color: #e95438;">بُرس‌</span><span style="color: #0070e0;">&zwnj;لاین</span></a></div>
            <?php
            }
            ?>

        </div>

        <div class="porsline-add-new-survey-sec">

            <?php
            if (!array_key_exists('detail', $folder_json)) {
                if (count($folder_json) >= 1) {
            ?>
                    <div class="porsline-add-new-survey-button" id="porsline-add-new-survey-list-button">

                        <i class="fas fa-list"></i>

                        <?php echo esc_html(porslinePlugin_set_settings()["porsline-add-new-survey-from-list"]); ?>

                    </div>
                    <span class="porsline-or-span"><?php echo esc_html(porslinePlugin_set_settings()["porsline-or"]); ?></span>
                <?php
                }
            }
            if ($lang == 1) {
                ?>
                <a target="_blank" href="https://survey.porsline.ir/" class="porsline-add-new-survey-button">

                    <i class="fas fa-plus"></i>

                    <?php echo esc_html(porslinePlugin_set_settings()["porsline-add-new-survey-in-panel"]); ?>

                </a>
            <?php
            } else {
            ?>
                <a target="_blank" href="https://survey.porsline.com/" class="porsline-add-new-survey-button">

                    <i class="fas fa-plus"></i>

                    <?php echo esc_html(porslinePlugin_set_settings()["porsline-add-new-survey-in-panel"]); ?>

                </a>
            <?php
            }
            ?>
            <!-- <div class="porsline-add-new-survey-button" id="porsline-add-new-survey-link-button">

            <i class="fas fa-link"></i>

            <?php echo esc_html(porslinePlugin_set_settings()["porsline-add-new-survey-from-link"]); ?>

        </div> -->

            <div id="add_survey_popup_holder">

                <div id="porsline-add-survey-popup">

                    <span id="popup-close-btn"><i class="fas fa-plus"></i></span>

                    <h3>

                        <?php echo esc_html(porslinePlugin_set_settings()["porsline-add-new-survey-popup-title"]); ?>

                    </h3>

                    <br>



                    <div class="porsline-choose-from-panel-sec">

                        <div class="porsline-folders-col">

                            <div class="porsline-folders-title">

                                <?php echo esc_html(porslinePlugin_set_settings()["folders-title"]); ?>:

                            </div>

                            <?php

                            if ($folder_json !== NULL) {

                                $firstFolderCheck = 0;

                                foreach ($folder_json as $folder) {

                                    if ($firstFolderCheck == 0) {

                            ?>

                                        <div style="background-color: rgba(59, 54, 142, 0.2); color: #3b368e;" class="porsline-folder-item" id="porsline-folder-<?php echo esc_html($folder->id); ?>">

                                        <?php



                                    } else {

                                        ?>

                                            <div class="porsline-folder-item" id="porsline-folder-<?php echo esc_html($folder->id); ?>">

                                            <?php

                                        }

                                            ?>

                                            <div class="folder-name-float" style="display: inline;"><?php echo esc_html($folder->name); ?></div>

                                            <div class="porsline-survey-count porsline-number"><?php echo esc_html(count($folder->surveys)); ?></div>





                                            <script>
                                                jQuery("#porsline-folder-<?php echo esc_html($folder->id); ?>").click(function() {

                                                    jQuery(".porsline-folder-surveys").css("display", "none");

                                                    jQuery("#porsline-folder-surveys-<?php echo esc_html($folder->id); ?>").css("display", "block");

                                                    jQuery(".porsline-folder-item").attr("style", "background-color: #ffffff; color: var(--text-1-st);");

                                                    jQuery("#porsline-folder-<?php echo esc_html($folder->id); ?>").attr("style", "background-color: rgba(59, 54, 142, 0.2); color: #3b368e;");

                                                });
                                            </script>



                                            </div>

                                        <?php

                                        $firstFolderCheck++;
                                    }

                                        ?>

                                        </div>

                                        <div id="porsline-folder-surveys-sec">

                                            <?php

                                            if ($folder_json !== NULL) {

                                                foreach ($folder_json as $folder) {

                                            ?>

                                                    <div class="porsline-folder-surveys" id="porsline-folder-surveys-<?php echo esc_html($folder->id); ?>">

                                                        <?php

                                                        if (count($folder->surveys) > 0) {

                                                            foreach ($folder->surveys as $survey) {

                                                        ?>

                                                                <form action="" method="POST">

                                                                    <input type="hidden" name="survey-id" value="<?php echo esc_html($survey->id); ?>">

                                                                    <input type="hidden" name="survey-response-code" value="<?php echo esc_html($survey->preview_code); ?>">

                                                                    <button type="submit" name="porsline-submit-new-survey" class="porsline-folder-surveys-item" id="porsline-folder-surveys-item-<?php echo esc_html($survey->id); ?>">

                                                                        <div style="background-color: #3b368e" class="porsline-survey-title-box">

                                                                            <div style="margin-top: 85px;font-size: 15px;"><?php echo esc_html($survey->name); ?></div>

                                                                        </div>

                                                                        <div class="porsline-survey-detials-box">

                                                                            <?php echo "<span style='color:#6b7079;'>" . esc_html(porslinePlugin_set_settings()["views"]) . "</span><br>";
                                                                            echo "<span style='color:#3e434d;'>" . "<span class='porsline-number'>" . esc_html($survey->views) . "</span>";
                                                                            echo "<br><br><span style='color:#6b7079;'>" . esc_html(porslinePlugin_set_settings()["responses"]) . "</span><br><span style='color:#3e434d;'>";
                                                                            echo "<span class='porsline-number'>" . esc_html($survey->submitted_responses) . "</span>"; ?></span>

                                                                            <br><br>

                                                                            <span><?php echo esc_html(porslinePlugin_set_settings()["survey-status"]); ?></span>

                                                                            <?php

                                                                            if ($survey->active == TRUE) {

                                                                            ?>

                                                                                <span style="color: green;"><?php echo esc_html(porslinePlugin_set_settings()["active"]); ?></span>

                                                                            <?php

                                                                            }

                                                                            if ($survey->active == FALSE) {

                                                                            ?>

                                                                                <span style="color: red;"><?php echo esc_html(porslinePlugin_set_settings()["inactive"]); ?></span>

                                                                            <?php

                                                                            }

                                                                            ?>

                                                                        </div>

                                                                    </button>

                                                                </form>



                                                        <?php

                                                            }
                                                        }

                                                        ?>

                                                    </div>

                                            <?php

                                                }
                                            }

                                            ?>

                                        </div>

                                    <?php

                                } else {

                                    echo esc_html(porslinePlugin_set_settings()["connection-error"]);
                                }

                                    ?>

                        </div>



                        <div id="porsline-choose-from-link-sec" class="porsline-choose-from-link-sec">

                            <br><br>

                            <form action="POST" method="">

                                <input style="width: 60%; display: inline-block;margin-right: 14px;" type="text">

                                <button style="display: inline-block; width: 30%; margin: 0;" type="submit" class="design-update-btn">ثبت پرسشنامه</button>

                            </form>

                        </div>



                    </div>

                </div>

            </div>

            <br><br><br>

            <?php

            if ($saved_settings->api_key != "") {

                if (array_key_exists('detail', porslinePlugin_auth_api())) {

            ?>

                    <span class="auth-err-span">

                        <i style="color: #fc7575; font-size: 20px;" class="fas fa-exclamation-triangle"></i>

                        <?php echo esc_html(porslinePlugin_set_settings()["settings-api-key-alert"]); ?>

                    </span>

                    <?php

                } else {



                    if (count(porslinePlugin_get_add_surveys_func())) {

                    ?>
                        <style>
                            .porsline-add-new-survey-sec {
                                margin-top: 15px !important;
                            }
                        </style>
                        <div class="porsline-added-surveys">

                            <?php

                            global $wpdb, $table_prefix;

                            $table_name = $table_prefix . "porsline_survay_styles";



                            $added_surveys = $wpdb->get_results("SELECT * FROM $table_name");



                            foreach ($added_surveys as $added_survey) {

                                $exist = 0;

                                foreach ($folder_json as $check_folder) {

                                    foreach ($check_folder->surveys as $check_survey) {

                                        if ($added_survey->survay_id == $check_survey->id) {

                            ?>

                                            <div class="porsline-folder-surveys-item" id="porsline-folder-surveys-item-<?php echo esc_html($added_survey->id); ?>">

                                                <div style="background-color: #3b368e" class="porsline-survey-title-box">

                                                    <div style="margin-top: 94px;font-size: 15px;"><?php echo esc_html($check_survey->name); ?></div>

                                                </div>

                                                <div class="porsline-survey-detials-box">

                                                    <span class="porsline-views-responses"><?php echo esc_html(porslinePlugin_set_settings()["views"]) . ": ";
                                                                                            echo "<span class = 'porsline-number'>" . esc_html($check_survey->views) . "</span>";
                                                                                            echo "<span> <br> </span>" . esc_html(porslinePlugin_set_settings()["responses"]) . ": ";
                                                                                            echo "<span class = 'porsline-number'>" . esc_html($check_survey->submitted_responses) . "</span>"; ?>

                                                        <br>

                                                        <?php echo esc_html(porslinePlugin_set_settings()["survey-status"]); ?>:

                                                        <?php

                                                        if ($check_survey->active == TRUE) {

                                                        ?>

                                                            <span class="active-span" style="color: green;"><?php echo esc_html(porslinePlugin_set_settings()["active"]); ?></span>

                                                        <?php

                                                        }

                                                        if ($check_survey->active == FALSE) {

                                                        ?>

                                                            <span class="active-span" style="color: red;"><?php echo esc_html(porslinePlugin_set_settings()["inactive"]); ?></span>

                                                        <?php

                                                        }

                                                        ?></span>

                                                    <br><br><br>

                                                    <div class="survey-three-btn-sec">
                                                        <?php
                                                        if ($lang == 1 || $lang == 3) {
                                                        ?>
                                                            <button style="display: inline;" onclick="porsline_open_design(<?php echo esc_html($added_survey->id); ?>)" style="cursor: pointer;" class="show-survey-btn"><i class="fas fa-paint-brush"></i> <?php echo esc_html(porslinePlugin_set_settings()["survey-style-btn"]); ?></button>
                                                        <?php
                                                        } else if ($lang == 2 || $lang == 4) {
                                                        ?>
                                                            <button style="display: inline;" onclick="porsline_open_design(<?php echo esc_html($added_survey->id); ?>)" style="cursor: pointer;" class="show-survey-btn"><?php echo esc_html(porslinePlugin_set_settings()["survey-style-btn"]); ?> <i class="fas fa-paint-brush"></i></button>
                                                        <?php
                                                        }
                                                        ?>

                                                        <div class="options-btn" onclick="porsline_show_options(<?php echo esc_html($added_survey->id); ?>)">

                                                            <i style="transform: rotate(90deg);" class="fa">&#xf142;</i>

                                                        </div>

                                                        <div class="survey-options-sec" id="survey-options-sec-<?php echo esc_html($added_survey->id); ?>">

                                                            <?php

                                                            if ($check_survey->language == 2) {

                                                            ?>

                                                                <a style="background-color: #ffffff;

                                                                        color: grey !important;

                                                                        padding: 0 !important;

                                                                        margin: 0 !important;

                                                                        width: 0 !important;" target="_blank" class="show-survey-btn" href="https://survey.porsline.ir/s/<?php echo esc_html($check_survey->preview_code); ?>"><?php echo esc_html(porslinePlugin_set_settings()["show-survey"]); ?></a>

                                                            <?php

                                                            } else {

                                                            ?>

                                                                <a style="background-color: #ffffff;

                                                                        color: grey !important;

                                                                        padding: 0 !important;

                                                                        margin: 0 !important;

                                                                        width: 0 !important;" target="_blank" class="show-survey-btn" href="https://survey.porsline.com/s/<?php echo esc_html($check_survey->preview_code); ?>" title="<?php echo esc_html(porslinePlugin_set_settings()["show-survey"]); ?>"><i class="fas fa-eye"></i></a>

                                                            <?php

                                                            }

                                                            ?>

                                                            <form method="POST">

                                                                <input type="hidden" name="id" value="<?php echo esc_html($added_survey->id); ?>">

                                                                <div style=" background-color: #ffffff;

                                                                                border: 0;

                                                                                color: grey !important;

                                                                                font-size: 12px;" class="porsline-delete-btn" onclick="open_delete_modal(<?php echo esc_html($added_survey->id); ?>)"><?php echo esc_html(porslinePlugin_set_settings()["delete-survey"]); ?></div>



                                                                <div class="porsline-delete-modal-back" id="porsline-delete-modal-back-<?php echo esc_html($added_survey->id); ?>">

                                                                    <div class="porsline-delete-modal">

                                                                        <div class="delete-modal-header">

                                                                            <i class="fas fa-plus"></i>



                                                                            <h4><?php echo esc_html(porslinePlugin_set_settings()["delete-modal-title"]); ?></h4>

                                                                        </div>

                                                                        <p class="delete-modal-msg">

                                                                            <?php echo esc_html(porslinePlugin_set_settings()["delete-modal-msg"]); ?>

                                                                        </p>

                                                                        <div class="delete-modal-btns">

                                                                            <span><?php echo esc_html(porslinePlugin_set_settings()["delete-modal-cancel"]); ?></span>

                                                                            <button type="submit" name="porsline_delete_survey"><?php echo esc_html(porslinePlugin_set_settings()["delete-modal-accepte"]); ?></button>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </form>

                                                        </div>

                                                    </div>



                                                    <div class="porsline-survey-styles-edit" id="porsline-survey-styles-edit-<?php echo esc_html($added_survey->id); ?>">

                                                        <div id="porsline-survey-styles-modal">

                                                            <div class="porsline-header-modal">

                                                                <span onclick="close_style_btn(<?php echo esc_html($added_survey->id); ?>)" class="porsline-style-popup-close-btn"><i class="fas fa-plus"></i></span>

                                                                <h4 style="text-align: center;margin: 7px 0;"><?php echo esc_html(porslinePlugin_set_settings()["design-sec-title"]); ?></h4>

                                                            </div>
                                                            <form action="" method="POST" class="porsline-design-attrs">
                                                                <div class="porsline-survey-shortcode-sec">

                                                                    <label for=""><?php echo esc_html(porslinePlugin_set_settings()["survey-shortcode"]); ?> </label><br>

                                                                    <input readonly style="margin-top: 10px;" type="text" value="[porsline-survey id=<?php echo esc_html($added_survey->id); ?>]">

                                                                    <div title="<?php echo esc_html(porslinePlugin_set_settings()["copy-shortcode-title"]); ?>" onclick="copySortcode('[porsline-survey id=<?php echo esc_html($added_survey->id); ?>]', <?php echo esc_html($added_survey->id); ?>)" class="copy-btn"><i class="fas fa-copy"></i></div>

                                                                    <span class="copied-msg" id="copy-msg-<?php echo esc_html($added_survey->id); ?>"><?php echo esc_html(porslinePlugin_set_settings()["survey-shortcode-msg"]); ?></span>

                                                                </div>
                                                                <input type="hidden" name="porsline-survey-id" value="<?php echo esc_html($added_survey->id); ?>">



                                                                <div class="porsline-type-select-sec">

                                                                    <input id="porsline-design-type-<?php echo esc_html($added_survey->id); ?>" name="porsline-design-type" type="hidden" value="<?php echo esc_html($added_survey->type); ?>">

                                                                    <div id="porsline-type-select-simple-<?php echo esc_html($added_survey->id); ?>" class="porsline-type-select-btn">

                                                                        <img src="<?php echo esc_url(plugins_url('../assets/img/standard-view-cover.svg', __FIle__)); ?>" alt="">

                                                                        <br>

                                                                        <span><?php echo esc_html(porslinePlugin_set_settings()["embed-simple"]); ?></span>

                                                                    </div>

                                                                    <div id="porsline-type-select-popup-<?php echo esc_html($added_survey->id); ?>" class="porsline-type-select-btn">

                                                                        <img src="<?php echo esc_url(plugins_url('../assets/img/popup-view-cover.svg', __FIle__)); ?>" alt="">

                                                                        <br>

                                                                        <span><?php echo esc_html(porslinePlugin_set_settings()["embed-popup"]); ?></span>

                                                                    </div>

                                                                    <span id="porsline-standard-embed-desctiotion-<?php echo esc_html($added_survey->id); ?>"><?php echo esc_html(porslinePlugin_set_settings()["standard-embed-desctiotion"]); ?></span>

                                                                    <span id="porsline-popup-embed-desctiotion-<?php echo esc_html($added_survey->id); ?>"><?php echo esc_html(porslinePlugin_set_settings()["popup-embed-desctiotion"]); ?></span>

                                                                </div>

                                                                <script>
                                                                    function change_type_btn_color(id) {

                                                                        if (jQuery("#porsline-design-type-" + id).val() == "1") {

                                                                            jQuery("#porsline-type-select-simple-" + id).attr("style", "background-color: #3b368e; color: #ffffff;");

                                                                            jQuery("#porsline-type-select-popup-" + id).attr("style", "");

                                                                            jQuery("#porsline-standard-embed-desctiotion-" + id).attr("style", "display: block;");

                                                                            jQuery("#porsline-popup-embed-desctiotion-" + id).attr("style", "display: none;");

                                                                            jQuery("#porsline-pop-options-sec-" + id).attr("style", "display: none;");

                                                                        } else if (jQuery("#porsline-design-type-" + id).val() == "2") {

                                                                            jQuery("#porsline-type-select-popup-" + id).attr("style", "background-color: #3b368e; color: #ffffff;");

                                                                            jQuery("#porsline-type-select-simple-" + id).attr("style", "");

                                                                            jQuery("#porsline-standard-embed-desctiotion-" + id).attr("style", "display: none;");

                                                                            jQuery("#porsline-popup-embed-desctiotion-" + id).attr("style", "display: block;");

                                                                            jQuery("#porsline-pop-options-sec-" + id).attr("style", "display: block;");

                                                                        }

                                                                    }

                                                                    change_type_btn_color(<?php echo esc_html($added_survey->id); ?>);



                                                                    jQuery("#porsline-type-select-simple-<?php echo esc_html($added_survey->id); ?>").click(function() {

                                                                        jQuery("#porsline-design-type-<?php echo esc_html($added_survey->id); ?>").val("1");

                                                                        change_type_btn_color(<?php echo esc_html($added_survey->id); ?>);

                                                                    });

                                                                    jQuery("#porsline-type-select-popup-<?php echo esc_html($added_survey->id); ?>").click(function() {

                                                                        jQuery("#porsline-design-type-<?php echo esc_html($added_survey->id); ?>").val("2");

                                                                        change_type_btn_color(<?php echo esc_html($added_survey->id); ?>);

                                                                    });
                                                                </script>

                                                                <div id="porsline-both-type-settings">

                                                                    <div id="porsline-pop-options-sec-<?php echo esc_html($added_survey->id); ?>">

                                                                        <br><br>
                                                                        <hr><br>

                                                                        <input name="porsline-pop-type" id="porsline-pop-type-<?php echo esc_html($added_survey->id); ?>" type="hidden" value="<?php echo esc_html($added_survey->popup_type); ?>">

                                                                        <label for="porsline-pop-type"><?php echo esc_html(porslinePlugin_set_settings()["embed-pop-type-title"]); ?> </label>

                                                                        <div class="porsline-popup-type-sec">

                                                                            <div id="porsline-popup-btn-type-<?php echo esc_html($added_survey->id); ?>" class="porsline-popup-type-item">

                                                                                <?php echo esc_html(porslinePlugin_set_settings()["embed-pop-type1"]); ?>

                                                                            </div>

                                                                            <div id="porsline-popup-link-type-<?php echo esc_html($added_survey->id); ?>" class="porsline-popup-type-item">

                                                                                <?php echo esc_html(porslinePlugin_set_settings()["embed-pop-type3"]); ?>

                                                                            </div>

                                                                            <div id="porsline-popup-auto-type-<?php echo esc_html($added_survey->id); ?>" class="porsline-popup-type-item">

                                                                                <?php echo esc_html(porslinePlugin_set_settings()["embed-pop-type2"]); ?>

                                                                            </div>

                                                                        </div>



                                                                        <br><br><br>

                                                                        <label for="porsline-design-popup-nav" id="porsline-design-popup-nav-label"><?php echo esc_html(porslinePlugin_set_settings()["embed-popup-nav-title"]); ?></label>

                                                                        <?php

                                                                        if ($added_survey->popup_nav == 1) {

                                                                        ?>

                                                                            <select class="display-options-float" style="width: 124px;" name="porsline-design-popup-nav" id="porsline-design-popup-nav">

                                                                                <option selected value="1"><?php echo esc_html(porslinePlugin_set_settings()["embed-popup-nav-btt"]); ?></option>

                                                                                <option value="2"><?php echo esc_html(porslinePlugin_set_settings()["embed-popup-nav-ttb"]); ?></option>

                                                                                <option value="3"><?php echo esc_html(porslinePlugin_set_settings()["embed-popup-nav-ltr"]); ?></option>

                                                                                <option value="4"><?php echo esc_html(porslinePlugin_set_settings()["embed-popup-nav-rtl"]); ?></option>

                                                                            </select>

                                                                        <?php

                                                                        } else if ($added_survey->popup_nav == 2) {

                                                                        ?>

                                                                            <select class="display-options-float" style="width: 124px;" name="porsline-design-popup-nav" id="porsline-design-popup-nav">

                                                                                <option value="1"><?php echo esc_html(porslinePlugin_set_settings()["embed-popup-nav-btt"]); ?></option>

                                                                                <option selected value="2"><?php echo esc_html(porslinePlugin_set_settings()["embed-popup-nav-ttb"]); ?></option>

                                                                                <option value="3"><?php echo esc_html(porslinePlugin_set_settings()["embed-popup-nav-ltr"]); ?></option>

                                                                                <option value="4"><?php echo esc_html(porslinePlugin_set_settings()["embed-popup-nav-rtl"]); ?></option>

                                                                            </select>

                                                                        <?php

                                                                        } else if ($added_survey->popup_nav == 3) {

                                                                        ?>

                                                                            <select class="display-options-float" style="width: 124px;" name="porsline-design-popup-nav" id="porsline-design-popup-nav">

                                                                                <option value="1"><?php echo esc_html(porslinePlugin_set_settings()["embed-popup-nav-btt"]); ?></option>

                                                                                <option value="2"><?php echo esc_html(porslinePlugin_set_settings()["embed-popup-nav-ttb"]); ?></option>

                                                                                <option selected value="3"><?php echo esc_html(porslinePlugin_set_settings()["embed-popup-nav-ltr"]); ?></option>

                                                                                <option value="4"><?php echo esc_html(porslinePlugin_set_settings()["embed-popup-nav-rtl"]); ?></option>

                                                                            </select>

                                                                        <?php

                                                                        } else if ($added_survey->popup_nav == 4) {

                                                                        ?>

                                                                            <select class="display-options-float" style="width: 124px;" name="porsline-design-popup-nav" id="porsline-design-popup-nav">

                                                                                <option value="1"><?php echo esc_html(porslinePlugin_set_settings()["embed-popup-nav-btt"]); ?></option>

                                                                                <option value="2"><?php echo esc_html(porslinePlugin_set_settings()["embed-popup-nav-ttb"]); ?></option>

                                                                                <option value="3"><?php echo esc_html(porslinePlugin_set_settings()["embed-popup-nav-ltr"]); ?></option>

                                                                                <option selected value="4"><?php echo esc_html(porslinePlugin_set_settings()["embed-popup-nav-rtl"]); ?></option>

                                                                            </select>

                                                                        <?php

                                                                        }

                                                                        ?>

                                                                        <br><br><br>

                                                                        <div id="porsline-popup-btn-sec-<?php echo esc_html($added_survey->id); ?>" class="porsline-popup-options-sec-hide">

                                                                            <label for="porsline-popup-btn-txt"><?php echo esc_html(porslinePlugin_set_settings()["embed-pop-btn-txt"]); ?></label>

                                                                            <input class="display-options-float" style="width: 170px;" type="text" name="porsline-popup-btn-txt" value="<?php echo esc_html($added_survey->popup_btn_txt); ?>">

                                                                            <br><br>

                                                                            <label for="porsline-popup-button-color"><?php echo esc_html(porslinePlugin_set_settings()["embed-pop-btn-color"]); ?> </label>

                                                                            <input class="display-options-float" style="background-color: #ffffff; border: 1px solid gray !important;" type="color" class="porsline-color-input" name="porsline-popup-button-color" value="<?php echo esc_html($added_survey->popup_btn_color); ?>">

                                                                            <br><br>

                                                                            <label for="porsline-popup-button-txt-color"><?php echo esc_html(porslinePlugin_set_settings()["embed-pop-btn-txt-color"]); ?></label>

                                                                            <input class="display-options-float" style="background-color: #ffffff; border: 1px solid gray !important;" type="color" class="porsline-color-input" name="porsline-popup-button-txt-color" value="<?php echo esc_html($added_survey->popup_btn_txt_color); ?>">

                                                                        </div>

                                                                        <div id="porsline-popup-link-sec-<?php echo esc_html($added_survey->id); ?>" class="porsline-popup-options-sec-hide">

                                                                            <label for="porsline-popup-link-txt"><?php echo esc_html(porslinePlugin_set_settings()["embed-pop-link-txt"]); ?></label>

                                                                            <input class="display-options-float" style="width: 135px;" type="text" name="porsline-popup-link-txt" value="<?php echo esc_html($added_survey->popup_btn_txt); ?>">

                                                                        </div>

                                                                        <div id="porsline-popup-auto-sec-<?php echo esc_html($added_survey->id); ?>" class="porsline-popup-options-sec-hide">

                                                                            <label for="porsline-popup-time"><?php echo esc_html(porslinePlugin_set_settings()["embed-pop-show-time"]); ?> (<?php echo esc_html(porslinePlugin_set_settings()["embed-pop-show-time-sec"]); ?>)</label>

                                                                            <input class="display-options-float" type="number" name="porsline-popup-time" value="<?php echo esc_html($added_survey->popup_display_after); ?>">

                                                                        </div>

                                                                        <br>

                                                                        <script>
                                                                            function porsline_popuptype_active(id) {

                                                                                if (jQuery("#porsline-pop-type-" + id).val() == "1") {

                                                                                    jQuery("#porsline-popup-btn-type-" + id).attr("style", "background-color: #a3a3a399;");

                                                                                    jQuery("#porsline-popup-auto-type-" + id).attr("style", "");

                                                                                    jQuery("#porsline-popup-link-type-" + id).attr("style", "");



                                                                                    jQuery("#porsline-popup-btn-sec-" + id).attr("style", "display: block;");

                                                                                    jQuery("#porsline-popup-link-sec-" + id).attr("style", "");

                                                                                    jQuery("#porsline-popup-auto-sec-" + id).attr("style", "");

                                                                                } else if (jQuery("#porsline-pop-type-" + id).val() == "2") {

                                                                                    jQuery("#porsline-popup-auto-type-" + id).attr("style", "background-color: #a3a3a399;");

                                                                                    jQuery("#porsline-popup-btn-type-" + id).attr("style", "");

                                                                                    jQuery("#porsline-popup-link-type-" + id).attr("style", "");



                                                                                    jQuery("#porsline-popup-btn-sec-" + id).attr("style", "");

                                                                                    jQuery("#porsline-popup-link-sec-" + id).attr("style", "");

                                                                                    jQuery("#porsline-popup-auto-sec-" + id).attr("style", "display: block;");

                                                                                } else if (jQuery("#porsline-pop-type-" + id).val() == "3") {

                                                                                    jQuery("#porsline-popup-link-type-" + id).attr("style", "background-color: #a3a3a399;");

                                                                                    jQuery("#porsline-popup-btn-type-" + id).attr("style", "");

                                                                                    jQuery("#porsline-popup-auto-type-" + id).attr("style", "");



                                                                                    jQuery("#porsline-popup-btn-sec-" + id).attr("style", "");

                                                                                    jQuery("#porsline-popup-link-sec-" + id).attr("style", "display: block;");

                                                                                    jQuery("#porsline-popup-auto-sec-" + id).attr("style", "");

                                                                                }

                                                                            }



                                                                            porsline_popuptype_active(<?php echo esc_html($added_survey->id); ?>);



                                                                            jQuery("#porsline-popup-btn-type-<?php echo esc_html($added_survey->id); ?>").click(function() {

                                                                                jQuery("#porsline-pop-type-<?php echo esc_html($added_survey->id); ?>").val("1");

                                                                                porsline_popuptype_active(<?php echo esc_html($added_survey->id); ?>);

                                                                            });

                                                                            jQuery("#porsline-popup-link-type-<?php echo esc_html($added_survey->id); ?>").click(function() {

                                                                                jQuery("#porsline-pop-type-<?php echo esc_html($added_survey->id); ?>").val("3");

                                                                                porsline_popuptype_active(<?php echo esc_html($added_survey->id); ?>);

                                                                            });

                                                                            jQuery("#porsline-popup-auto-type-<?php echo esc_html($added_survey->id); ?>").click(function() {

                                                                                jQuery("#porsline-pop-type-<?php echo esc_html($added_survey->id); ?>").val("2");

                                                                                porsline_popuptype_active(<?php echo esc_html($added_survey->id); ?>);

                                                                            });
                                                                        </script>

                                                                    </div>
                                                                    <br>
                                                                    <hr><br>
                                                                    <label for="porsline-design-width"><?php echo esc_html(porslinePlugin_set_settings()["embed-width"]); ?> </label>
                                                                    <?php
                                                                    if ($lang == 1 || $lang == 3) {
                                                                    ?>
                                                                        <input class="display-options-float" style="width: 60px;" type="number" name="porsline-design-width" value="<?php echo esc_html($added_survey->width); ?>">

                                                                        <?php

                                                                        if ($added_survey->width_type == 1) {

                                                                        ?>

                                                                            <select class="display-options-float" name="porsline-design-width-type" id="">

                                                                                <option selected value="1">%</option>

                                                                                <option value="2">px</option>

                                                                            </select>

                                                                        <?php

                                                                        } else if ($added_survey->width_type == 2) {

                                                                        ?>

                                                                            <select class="display-options-float" name="porsline-design-width-type" id="">

                                                                                <option value="1">%</option>

                                                                                <option selected value="2">px</option>

                                                                            </select>

                                                                        <?php

                                                                        }
                                                                    } else if ($lang == 2 || $lang == 4) {

                                                                        if ($added_survey->width_type == 1) {

                                                                        ?>

                                                                            <select class="display-options-float" name="porsline-design-width-type" id="">

                                                                                <option selected value="1">%</option>

                                                                                <option value="2">px</option>

                                                                            </select>

                                                                        <?php

                                                                        } else if ($added_survey->width_type == 2) {

                                                                        ?>

                                                                            <select class="display-options-float" name="porsline-design-width-type" id="">

                                                                                <option value="1">%</option>

                                                                                <option selected value="2">px</option>

                                                                            </select>

                                                                        <?php

                                                                        }
                                                                        ?>
                                                                        <input class="display-options-float" style="width: 60px;" type="number" name="porsline-design-width" value="<?php echo esc_html($added_survey->width); ?>">
                                                                    <?php
                                                                    }
                                                                    ?>



                                                                    <br><br>

                                                                    <label for="porsline-design-height"><?php echo esc_html(porslinePlugin_set_settings()["embed-height"]); ?> </label>
                                                                    <?php
                                                                    if ($lang == 1 || $lang == 3) {
                                                                    ?>
                                                                        <input class="display-options-float" style="width: 60px;" type="number" name="porsline-design-height" value="<?php echo esc_html($added_survey->height); ?>">

                                                                        <?php

                                                                        if ($added_survey->height_type == 1) {

                                                                        ?>

                                                                            <select class="display-options-float" name="porsline-design-height-type" id="">

                                                                                <option selected value="1">%</option>

                                                                                <option value="2">px</option>

                                                                            </select>

                                                                        <?php

                                                                        } else if ($added_survey->height_type == 2) {

                                                                        ?>

                                                                            <select class="display-options-float" name="porsline-design-height-type" id="">

                                                                                <option value="1">%</option>

                                                                                <option selected value="2">px</option>

                                                                            </select>

                                                                        <?php

                                                                        }
                                                                    } else if ($lang == 2 || $lang == 4) {

                                                                        if ($added_survey->height_type == 1) {

                                                                        ?>

                                                                            <select class="display-options-float" name="porsline-design-height-type" id="">

                                                                                <option selected value="1">%</option>

                                                                                <option value="2">px</option>

                                                                            </select>

                                                                        <?php

                                                                        } else if ($added_survey->height_type == 2) {

                                                                        ?>

                                                                            <select class="display-options-float" name="porsline-design-height-type" id="">

                                                                                <option value="1">%</option>

                                                                                <option selected value="2">px</option>

                                                                            </select>

                                                                        <?php
                                                                        }
                                                                        ?>
                                                                        <input class="display-options-float" style="width: 60px;" type="number" name="porsline-design-height" value="<?php echo esc_html($added_survey->height); ?>">

                                                                    <?php
                                                                    }
                                                                    ?>

                                                                    <br><br>
                                                                    <hr><br>

                                                                    <div class="porsline-inner-half">

                                                                        <label for=""><?php echo esc_html(porslinePlugin_set_settings()["embed-margin-top"]); ?> </label>
                                                                        <?php
                                                                        if ($lang == 1 || $lang == 3) {
                                                                        ?>
                                                                            <input class="display-options-float" style="width: 60px;" type="number" name="margin-top" value="<?php echo esc_html($added_survey->margin_top); ?>"><span style="float: left; margin-top: 6px;"> %</span>
                                                                        <?php
                                                                        } else if ($lang == 2 || $lang == 4) {
                                                                        ?>
                                                                            <span style="float: right; margin-top: 6px;"> %</span><input class="display-options-float" style="width: 50px;" type="number" name="margin-top" value="<?php echo esc_html($added_survey->margin_top); ?>">
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                        <br><br>

                                                                        <label for=""><?php echo esc_html(porslinePlugin_set_settings()["embed-margin-right"]); ?> </label>
                                                                        <?php
                                                                        if ($lang == 1 || $lang == 3) {
                                                                        ?>
                                                                            <input class="display-options-float" style="width: 60px;" type="number" name="margin-right" value="<?php echo esc_html($added_survey->margin_right); ?>"><span style="float: left; margin-top: 6px;"> %</span>
                                                                        <?php
                                                                        } else if ($lang == 2 || $lang == 4) {
                                                                        ?>
                                                                            <span style="float: right; margin-top: 6px;"> %</span><input class="display-options-float" style="width: 50px;" type="number" name="margin-right" value="<?php echo esc_html($added_survey->margin_right); ?>">
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </div>

                                                                    <div class="porsline-inner-half">

                                                                        <label for=""><?php echo esc_html(porslinePlugin_set_settings()["embed-margin-bottom"]); ?> </label>
                                                                        <?php
                                                                        if ($lang == 1 || $lang == 3) {
                                                                        ?>
                                                                            <input class="display-options-float" style="width: 60px;" type="number" name="margin-bottom" value="<?php echo esc_html($added_survey->margin_bottom); ?>"><span style="float: left; margin-top: 6px;"> %</span>
                                                                        <?php
                                                                        } else if ($lang == 2 || $lang == 4) {
                                                                        ?>
                                                                            <span style="float: right; margin-top: 6px;"> %</span><input class="display-options-float" style="width: 50px;" type="number" name="margin-bottom" value="<?php echo esc_html($added_survey->margin_bottom); ?>">
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                        <br><br>

                                                                        <label for=""><?php echo esc_html(porslinePlugin_set_settings()["embed-margin-left"]); ?> </label>
                                                                        <?php
                                                                        if ($lang == 1 || $lang == 3) {
                                                                        ?>
                                                                            <input class="display-options-float" style="width: 60px;" type="number" name="margin-left" value="<?php echo esc_html($added_survey->margin_left); ?>"><span style="float: left; margin-top: 6px;"> %</span>
                                                                        <?php
                                                                        } else if ($lang == 2 || $lang == 4) {
                                                                        ?>
                                                                            <span style="float: right; margin-top: 6px;"> %</span><input class="display-options-float" style="width: 50px;" type="number" name="margin-left" value="<?php echo esc_html($added_survey->margin_left); ?>">
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </div>

                                                                    <br><br>
                                                                    <hr><br>

                                                                    <div class="porsline-inner-half">

                                                                        <label for="porsline-design-border-type"><?php echo esc_html(porslinePlugin_set_settings()["embed-border-type"]); ?></label>

                                                                        <?php

                                                                        if ($added_survey->border_type == "solid") {

                                                                        ?>

                                                                            <select class="display-options-float" style="width: 95px;" name="porsline-design-border-type" id="">

                                                                                <option selected value="solid"><?php echo esc_html(porslinePlugin_set_settings()["embed-border-solid"]); ?></option>

                                                                                <option value="dotted"><?php echo esc_html(porslinePlugin_set_settings()["embed-border-dotted"]); ?></option>

                                                                                <option value="dashed"><?php echo esc_html(porslinePlugin_set_settings()["embed-border-dashed"]); ?></option>

                                                                                <option value="none"><?php echo esc_html(porslinePlugin_set_settings()["embed-border-none"]); ?></option>

                                                                            </select>

                                                                        <?php

                                                                        } else if ($added_survey->border_type == "dotted") {

                                                                        ?>

                                                                            <select class="display-options-float" style="width: 95px;" name="porsline-design-border-type" id="">

                                                                                <option value="solid"><?php echo esc_html(porslinePlugin_set_settings()["embed-border-solid"]); ?></option>

                                                                                <option selected value="dotted"><?php echo esc_html(porslinePlugin_set_settings()["embed-border-dotted"]); ?></option>

                                                                                <option value="dashed"><?php echo esc_html(porslinePlugin_set_settings()["embed-border-dashed"]); ?></option>

                                                                                <option value="none"><?php echo esc_html(porslinePlugin_set_settings()["embed-border-none"]); ?></option>

                                                                            </select>

                                                                        <?php

                                                                        } else if ($added_survey->border_type == "dashed") {

                                                                        ?>

                                                                            <select class="display-options-float" style="width: 95px;" name="porsline-design-border-type" id="">

                                                                                <option value="solid"><?php echo esc_html(porslinePlugin_set_settings()["embed-border-solid"]); ?></option>

                                                                                <option value="dotted"><?php echo esc_html(porslinePlugin_set_settings()["embed-border-dotted"]); ?></option>

                                                                                <option selected value="dashed"><?php echo esc_html(porslinePlugin_set_settings()["embed-border-dashed"]); ?></option>

                                                                                <option value="none"><?php echo esc_html(porslinePlugin_set_settings()["embed-border-none"]); ?></option>

                                                                            </select>

                                                                        <?php

                                                                        } else if ($added_survey->border_type == "none") {

                                                                        ?>

                                                                            <select class="display-options-float" style="width: 95px;" name="porsline-design-border-type" id="">

                                                                                <option value="solid"><?php echo esc_html(porslinePlugin_set_settings()["embed-border-solid"]); ?></option>

                                                                                <option value="dotted"><?php echo esc_html(porslinePlugin_set_settings()["embed-border-dotted"]); ?></option>

                                                                                <option value="dashed"><?php echo esc_html(porslinePlugin_set_settings()["embed-border-dashed"]); ?></option>

                                                                                <option selected value="none"><?php echo esc_html(porslinePlugin_set_settings()["embed-border-none"]); ?></option>

                                                                            </select>

                                                                        <?php

                                                                        }

                                                                        ?>

                                                                        <br><br>

                                                                        <label for="porsline-design-border-color"><?php echo esc_html(porslinePlugin_set_settings()["embed-border-color"]); ?></label>

                                                                        <input class="display-options-float" style="background-color: #ffffff; border: 1px solid gray !important;" name="porsline-design-border-color" class="porsline-color-input" type="color" value="<?php echo esc_html($added_survey->border_color); ?>">

                                                                    </div>

                                                                    <div class="porsline-inner-half">

                                                                        <label for="porsline-design-border-weight"><?php echo esc_html(porslinePlugin_set_settings()["embed-border-weight"]); ?></label>
                                                                        <?php
                                                                        if ($lang == 1 || $lang == 3) {
                                                                        ?>
                                                                            <input class="display-options-float" style="width: 50px;" name="porsline-design-border-weight" type="number" value="<?php echo esc_html($added_survey->border_weight); ?>"><span style="float: left; margin-top: 6px;"> px</span>
                                                                        <?php
                                                                        } else if ($lang == 2 || $lang == 4) {
                                                                        ?>
                                                                            <span style="float: right; margin-top: 6px;"> px</span><input class="display-options-float" style="width: 50px;" name="porsline-design-border-weight" type="number" value="<?php echo esc_html($added_survey->border_weight); ?>">
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                        <br><br>

                                                                        <label for="porsline-design-border-radius"><?php echo esc_html(porslinePlugin_set_settings()["embed-border-radius"]); ?></label>
                                                                        <?php
                                                                        if ($lang == 1 || $lang == 3) {
                                                                        ?>
                                                                            <input class="display-options-float" style="width: 60px;" name="porsline-design-border-radius" type="number" value="<?php echo esc_html($added_survey->border_radius); ?>"><span style="float: left; margin-top: 6px;"> px</span>
                                                                        <?php
                                                                        } else if ($lang == 2 || $lang == 4) {
                                                                        ?>
                                                                            <span style="float: right; margin-top: 6px;"> px</span><input class="display-options-float" style="width: 50px;" name="porsline-design-border-radius" type="number" value="<?php echo esc_html($added_survey->border_radius); ?>">
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </div>

                                                                    <script>
                                                                        function hide_popup_edit(id) {

                                                                            if (jQuery("#porsline-design-type-" + id).val() == "1") {

                                                                                jQuery("#porsline-popup-embed-desctiotion-" + id).attr("style", "display: none;");

                                                                                jQuery("#porsline-pop-options-sec-" + id).attr("style", "display: none;");

                                                                            }

                                                                        }

                                                                        hide_popup_edit(<?php echo esc_html($added_survey->id); ?>)
                                                                    </script>

                                                                </div>



                                                                <br>
                                                                <hr><br>

                                                                <label for="porsline-design-custom-css"><?php echo esc_html(porslinePlugin_set_settings()["embed-custom-css"]); ?> </label>

                                                                <textarea style="direction:ltr; width: 93%;" name="porsline-design-custom-css" id="" cols="104" rows="5"><?php echo esc_html($added_survey->custom_css); ?></textarea>

                                                                <br><br>

                                                                <button type="submit" name="porsline-update-design-btn" class="design-update-btn"><?php echo esc_html(porslinePlugin_set_settings()["design-update-btn"]); ?></button>

                                                            </form>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                            <?php

                                            $exist = 1;
                                        }
                                    }
                                }

                                if ($exist == 0) {

                                    $saved_settings = porslinePlugin_get_saved_settings();

                                    if ($saved_settings->api_key != "") {

                                        if (array_key_exists('detail', porslinePlugin_auth_api())) {
                                        } else {

                                            $wpdb->delete($table_name, array("survay_id" => $added_survey->survay_id));
                                        }
                                    } else {
                                    }
                                }
                            }

                            ?>

                        </div>
                    <?php

                    } else {

                    ?>

                        <div></div>

                <?php

                    }
                }
            } else {

                ?>

                <span class="auth-err-span">

                    <i style="color: #fc7575; font-size: 20px;" class="fas fa-exclamation-triangle"></i>

                    <?php echo esc_html(porslinePlugin_set_settings()["settings-api-key-empty"]); ?>

                </span>

            <?php

            }

            ?>



        </div>
    <?php

}
