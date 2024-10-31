<?php
/*

* Plugin Name: Porsline

* Plugin URI: 

* Description: Making glorious online forms, surveys & quizzes is only a simple drag & drop away!

* Version: 1.0.2

* Author: Porsline

* Author URI: https://www.porsline.com

*/



require_once('view/active_plugin.php');

require_once('panel/menu.php');



if (!is_admin()) {

    require_once('view/shortcode.php');
}


global $wpdb, $table_prefix;
$set_lang_table_name = $table_prefix . "porsline_settings";
$get_old_lang = $wpdb->get_results("SELECT * FROM $set_lang_table_name");
foreach ($get_old_lang as $get_old_lang_item) {
    $get_old_lang = $get_old_lang_item->lang;
}
if ($get_old_lang != get_locale()) {
    if (get_locale() == "fa_IR")
        $wpdb->update($set_lang_table_name, array("lang" => 1), array("lang" => $get_old_lang));

    else if (get_locale() == "tr_TR")
        $wpdb->update($set_lang_table_name, array("lang" => 2), array("lang" => $get_old_lang));

    else if (get_locale() == "ar")
        $wpdb->update($set_lang_table_name, array("lang" => 3), array("lang" => $get_old_lang));

    else
        $wpdb->update($set_lang_table_name, array("lang" => 4), array("lang" => $get_old_lang));
}

function porslinePlugin_ChangePluginName()
{
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $url = sanitize_url($url, $protocols = null);
    if (strpos($url, 'plugins.php') !== false) {
        if (get_locale() == "fa_IR") {
?>
            <script>
                var title = jQuery('tr[data-plugin="porsline-wordpress-plugin/porsline.php"] td.plugin-title strong');
                title.html("فرم‌ساز و پرسشنامه‌ساز پُرس‌لاین");

                var description = jQuery('tr[data-plugin="porsline-wordpress-plugin/porsline.php"] td.column-description div.plugin-description p');
                description.html("بهترین فرم‌ساز و پرسشنامه‌ساز فارسی رایگان، مناسب برای ساخت انواع فرم ثبت‌نام، فرم تماس، فرم استخدام، انواع نظرسنجی، آزمون آنلاین و پرسشنامه‌های تعاملی با قابلیت درگ و دراپ و طراحی پیشرفته.");

                var author = jQuery('tr[data-plugin="porsline-wordpress-plugin/porsline.php"] td.column-description div.plugin-version-author-uri a');
                author.html("پُرس‌لاین");
                author.attr("href", "https://www.porsline.ir");
            </script>
        <?php
        } else if (get_locale() == "tr_TR") {
        ?>
            <script>
                var title = jQuery('tr[data-plugin="porsline-wordpress-plugin/porsline.php"] td.plugin-title strong');
                title.html("Porsline Anket ve Form Oluşturucu");

                var description = jQuery('tr[data-plugin="porsline-wordpress-plugin/porsline.php"] td.column-description div.plugin-description p');
                description.html("Sürükle bırak özelliği ve gelişmiş tasarımı ile her türlü kayıt formu, iletişim formu, istihdam formları, anket türleri, online sınavlar ve interaktif anketler yapmaya uygun en iyi ücretsiz Türkçe form ve anket oluşturucu.");

                var author = jQuery('tr[data-plugin="porsline-wordpress-plugin/porsline.php"] td.column-description div.plugin-version-author-uri a');
                author.html("Porsline");
                author.attr("href", "https://www.porsline.com/tr");
            </script>
        <?php
        } else if (get_locale() == "ar") {
        ?>
            <script>
                var title = jQuery('tr[data-plugin="porsline-wordpress-plugin/porsline.php"] td.plugin-title strong');
                title.html("أداة إنشاء الاستمارات والاستبيان بُرس لاين");

                var description = jQuery('tr[data-plugin="porsline-wordpress-plugin/porsline.php"] td.column-description div.plugin-description p');
                description.html("أفضل أداة إنشاء استمارات واستبيانات عربية مجانية مناسبة لإنشاء مختلف أنواع الاستمارات مثل استمارة التسجيل واستمارة الاتصال واستمارة التوظيف ومختلف أنواع الاستطلاعات والاختبارات الإلكترونية والاستبيانات التفاعلية مع إمكانية السحب والإفلات والتصميم المتقدمة.");

                var author = jQuery('tr[data-plugin="porsline-wordpress-plugin/porsline.php"] td.column-description div.plugin-version-author-uri a');
                author.html("بُرس‌لاین");
                author.attr("href", "https://www.porsline.com/ar");
            </script>
<?php
        }
    }
}
add_action("admin_footer", "porslinePlugin_ChangePluginName");


function porsline_enqueue_custom_styles($hook)
{
    global $wpdb, $table_prefix;
    $lang_table_name = $table_prefix . "porsline_settings";
    $lang = $wpdb->get_results("SELECT `lang` FROM $lang_table_name");
    foreach ($lang as $lang_item) {
        $lang = $lang_item->lang;
        break;
    }

    if (str_contains($hook, 'porsline-surveys')) {
        if ($lang == 1 || $lang == 3) {
            wp_enqueue_style('survey-list_css', plugins_url('/assets/css/survey-list.css', __FIle__));
        } else if ($lang == 2 || $lang == 4) {
            wp_enqueue_style('survey-list_css', plugins_url('/assets/css/survey-list-ltr.css', __FIle__));
        }
    } elseif (str_contains($hook, 'porsline-settings')) {
        if ($lang == 1 || $lang == 3) {
            wp_enqueue_style('porsline-settings_css', plugins_url('/assets/css/settings.css', __FIle__));
        } else if ($lang == 2 || $lang == 4) {
            wp_enqueue_style('porsline-settings_css', plugins_url('/assets/css/settings-ltr.css', __FIle__));
        }
    } elseif (str_contains($hook, 'porsline-welcome')) {

        wp_enqueue_style('porsline-bootstrap_css', plugins_url('/assets/css/bootstrap.min.css', __FIle__));

        if ($lang == 1 || $lang == 3) {
            wp_enqueue_style('porsline-welcome_css', plugins_url('/assets/css/welcome.css', __FIle__));
        } else if ($lang == 2 || $lang == 4) {
            wp_enqueue_style('porsline-welcome_css', plugins_url('/assets/css/welcome-ltr.css', __FIle__));
        }
    }
}
add_action('admin_enqueue_scripts', 'porsline_enqueue_custom_styles');



function porsline_enqueue_custom_scripts()
{
    if (str_contains(get_current_screen()->id, 'porsline-surveys')) {
        wp_enqueue_script('porsline-all_js', plugins_url('/assets/js/all.js', __FILE__));
        wp_enqueue_script('survey-list_js', plugins_url('/assets/js/survey-list.js', __FILE__));
    } elseif (str_contains(get_current_screen()->id, 'porsline-settings')) {
        wp_enqueue_script('ajax-script',  plugins_url('/panel/settings.php', __FILE__), array('jquery'));
        wp_localize_script(
            'ajax-script',
            'my_ajax_object',
            array(
                'ajax_url' => admin_url('admin-ajax.php'),
                'nonce' => wp_create_nonce('nonce_name')
            )
        );
        wp_enqueue_script('porsline-all_js', plugins_url('/assets/js/all.js', __FILE__));
    } elseif (str_contains(get_current_screen()->id, 'porsline-welcome')) {
        wp_enqueue_script('porsline-all_js', plugins_url('/assets/js/all.js', __FILE__));
        wp_enqueue_script('porsline-welcome_js', plugins_url('/assets/js/welcome.js', __FILE__));
    }
}
add_action('admin_footer', 'porsline_enqueue_custom_scripts');


require_once('view/auth-api-ajax.php');

