<?php

require_once(plugin_dir_path(__dir__) . '/view/lang-strings.php');

require_once(plugin_dir_path(__dir__) . '/view/settings.php');

$saved_settings = porslinePlugin_get_saved_settings();

if (isset($_POST["settings-submit-btn"])) {

    global $wpdb, $table_prefix;

    $table_name = $table_prefix . "porsline_settings";



    $last_key = sanitize_text_field($_POST["porsline-last-api-key"]);

    $api_key = sanitize_text_field($_POST["porsline-api-key"]);



    $wpdb->update($table_name, array("api_key" => $api_key), array("api_key" => $last_key));

    if ($api_key != "" && !array_key_exists('detail', porslinePlugin_auth_api())) {
        echo '<meta http-equiv="refresh" content="0;url=' . admin_url('admin.php?page=porsline-surveys') . '" />';
    } else {
        echo "<meta http-equiv='refresh' content='0'>";
    }
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


    <div class="porsline-settings-page">

        <div id="porsline-header">
            <script>
                function onchange_auth(newkey) {
                    if (newkey != "") {
                        const apiKey = newkey;
                        if (apiKey.length >= 36) {
                            jQuery.ajax({
                                type: "post",
                                dataType: "json",
                                url: my_ajax_object.ajax_url,
                                data: {
                                    action: "porsline_validate_realtime_token",
                                    _ajax_nonce: my_ajax_object.nonce,
                                    key: apiKey
                                },
                                success: function(responseText) {
                                    
                                    if (responseText) {
                                        if (responseText["detail"] != undefined) {
                                            jQuery(".error-key").css("display", "none");
                                            jQuery("#wrong-key").css("display", "inline");
                                            jQuery(".settings-submit-btn").prop("disabled", true);
                                            jQuery(".settings-submit-btn").css("opacity", "0.7");
                                            jQuery(".settings-submit-btn").css("cursor", "alias");
                                        } else {
                                            jQuery(".error-key").css("display", "none");
                                            jQuery("#accept-key").css("display", "inline");
                                            jQuery(".settings-submit-btn").prop("disabled", false);
                                            jQuery(".settings-submit-btn").css("opacity", "1");
                                            jQuery(".settings-submit-btn").css("cursor", "pointer");
                                        }
                                    }
                                },
                                error: function(responseText) {
                                }
                            });
                            // const xhr = new XMLHttpRequest();

                            // xhr.open('POST', '<?php echo esc_url(plugins_url('../view/auth-api-ajax.php', __FIle__)); ?>');
                            // xhr.onload = function() {
                            //     const responseText = this.responseText;
                            //     if (responseText) {
                            //         const jsonResponseText = JSON.parse(responseText)
                            //         if (jsonResponseText["detail"] !== undefined) {
                            //             jQuery(".error-key").css("display", "none");
                            //             jQuery("#wrong-key").css("display", "inline");
                            //             jQuery(".settings-submit-btn").prop("disabled", true);
                            //             jQuery(".settings-submit-btn").css("opacity", "0.7");
                            //             jQuery(".settings-submit-btn").css("cursor", "alias");
                            //         } else {
                            //             jQuery(".error-key").css("display", "none");
                            //             jQuery("#accept-key").css("display", "inline");
                            //             jQuery(".settings-submit-btn").prop("disabled", false);
                            //             jQuery(".settings-submit-btn").css("opacity", "1");
                            //             jQuery(".settings-submit-btn").css("cursor", "pointer");
                            //         }
                            //     }
                            // };
                            // xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                            // xhr.send("key=" + apiKey);
                        } else {
                            jQuery(".error-key").css("display", "none");
                            jQuery("#wrong-key").css("display", "inline");
                            jQuery(".settings-submit-btn").prop("disabled", true);
                            jQuery(".settings-submit-btn").css("opacity", "0.7");
                            jQuery(".settings-submit-btn").css("cursor", "alias");
                        }
                    } else {
                        jQuery(".error-key").css("display", "none");
                        jQuery(".settings-submit-btn").prop("disabled", true);
                        jQuery(".settings-submit-btn").css("opacity", "0.7");
                        jQuery(".settings-submit-btn").css("cursor", "alias");
                    }
                }
            </script>

            <h2><?php echo esc_html(porslinePlugin_set_settings()["settings-page-h2-title"]); ?></h2>

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

        <br>

        <?php echo porslinePlugin_set_settings()["settings-page-quide"]; ?>

        <br><br>

        <form action="" method="POST">

            <input type="hidden" name="porsline-last-api-key" value="<?php echo esc_html($saved_settings->api_key); ?>">

            <table>

                <tbody>

                    <tr class="porsline-table-row1">

                        <th><?php echo esc_html(porslinePlugin_set_settings()["settings-apiKey-lable"]); ?></th>

                        <td>

                            <input oninput="onchange_auth(this.value)" value="<?php echo esc_html($saved_settings->api_key); ?>" class="porsline-api-input" name="porsline-api-key" type="text">

                            <span class="error-key" id="wrong-key">

                                <i style="color: #fc7575; font-size: 20px;" class="fas fa-exclamation-triangle"></i>

                                <?php echo esc_html(porslinePlugin_set_settings()["settings-api-key-alert"]); ?>

                            </span>
                            <span class="error-key" id="accept-key">

                                <i style="color: green; font-size: 20px;" class="fa fa-check-circle" aria-hidden="true"></i>

                                <?php echo esc_html(porslinePlugin_set_settings()["settings-api-key-accept"]); ?>

                            </span>
                            <?php

                            if ($saved_settings->api_key != "") {

                                if (array_key_exists('detail', porslinePlugin_auth_api())) {

                            ?>

                                    <script>
                                        jQuery("#wrong-key").css("display", "inline");
                                        jQuery(".settings-submit-btn").prop("disabled", true);
                                        jQuery(".settings-submit-btn").css("opacity", "0.7");
                                        jQuery(".settings-submit-btn").css("cursor", "alias");
                                    </script>

                                <?php

                                } else {

                                ?>

                                    <script>
                                        jQuery("#accept-key").css("display", "inline");
                                        jQuery(".settings-submit-btn").prop("disabled", false);
                                        jQuery(".settings-submit-btn").css("opacity", "1");
                                        jQuery(".settings-submit-btn").css("cursor", "pointer");
                                    </script>

                                <?php

                                }
                            } else {
                                ?>
                                <script>
                                    jQuery(".settings-submit-btn").prop("disabled", true);
                                    jQuery(".settings-submit-btn").css("opacity", "0.7");
                                    jQuery(".settings-submit-btn").css("cursor", "alias");
                                </script>
                            <?php
                            }

                            ?>

                            <script>
                                jQuery("#empty-key").css("display", "inline");
                            </script>

                        </td>

                    </tr>

                </tbody>

            </table>

            <button name="settings-submit-btn" class="settings-submit-btn" type="submit"><?php echo esc_html(porslinePlugin_set_settings()["settings-submit-btn"]); ?></button>

        </form>

    </div>


<?php
}
