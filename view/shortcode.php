<?php

add_shortcode('porsline-survey', 'porslinePlugin_generate_survey');



function porslinePlugin_generate_survey($atts) {

    $id = $atts['id'];



    global $wpdb, $table_prefix;

    $table_name = $table_prefix . "porsline_survay_styles";

    $survey = $wpdb->get_results("SELECT * FROM $table_name WHERE id = $id");



    require_once("get-folders.php");

    $folders = porslinePlugin_get_folders_from_api();



    foreach($folders as $folder) {

        foreach($folder->surveys as $survey_item) {

            if($survey_item->id == $survey[0]->survay_id) {

                $lang = $survey_item->language;

            }

        }

    }



    $type = $survey[0]->type;



    $width = $survey[0]->width;

    $width_type = $survey[0]->width_type;

    if($width_type == 1)

        $width_type = "%";

    else if($width_type == 2)

        $width_type = "px";



    $height = $survey[0]->height;

    $height_type = $survey[0]->height_type;

    if($height_type == 1)

        $height_type = "%";

    else if($height_type == 2)

        $height_type = "px";



    $border_type = $survey[0]->border_type;

    $border_color = $survey[0]->border_color;

    $border_weight = $survey[0]->border_weight;

    $border_radius = $survey[0]->border_radius;



    $margin_top = $survey[0]->margin_top;

    $margin_left = $survey[0]->margin_left;

    $margin_bottom = $survey[0]->margin_bottom;

    $margin_right = $survey[0]->margin_right;



$shortCodeString ='

<link href="'.esc_url(plugins_url( '../assets/css/front.css', __FILE__ )).'" rel="stylesheet"/>';

    if($type == 1) {

        if($lang == 2) {

            $shortCodeString .= '<iframe 

            style="

            width: ' . $width . $width_type . ';

            height: ' . $height . $height_type . ';

            border: ' . $border_type . " " . $border_color . " " . $border_weight . 'px' . ';

            border-radius: ' . $border_radius . 'px; '. '

            margin: ' . $margin_top . '% ' . $margin_right . '% ' . $margin_bottom . '% ' . $margin_left . '% !important' . ';

            "

            src="https://survey.porsline.ir/s/' . $survey[0]->survay_code . '" frameborder="0"></iframe>';

        

        }

        else {

            $shortCodeString .= '<iframe 

            style="

            width: ' . $width . $width_type . ';

            height: ' . $height . $height_type . ';

            border: ' . $border_type . " " . $border_color . " " . $border_weight . 'px;

            border-radius: ' . $border_radius . 'px;

            margin: ' . $margin_top . '% ' . $margin_right . '% ' . $margin_bottom . '% ' . $margin_left . '% !important;

            "

            src="https://survey.porsline.com/s/' . $survey[0]->survay_code . '" frameborder="0"></iframe>';

 

        }

    } else if($type == 2) {

        $popup_type = $survey[0]->popup_type;

        if($popup_type == "1") {

            $shortCodeString .= '<div style="display: inline;"><button 

            style="

            background-color: ' . $survey[0]->popup_btn_color . ';

            color: ' . $survey[0]->popup_btn_txt_color . ';

            "

            onclick="porsline_call_popup(' . $survey[0]->popup_nav . ')">' . $survey[0]->popup_btn_txt . '</button>

            <div id="porsline-popup-all">

                <div id="porsline-survey-popup-window"

                >

                <!-- <span id="porsline-popup-close-btn"><i class="fas fa-plus"></i></span> -->

                    ';

                if($lang == 2) {  

                    $shortCodeString .= '<iframe 

                    style="

                    width: ' . $width . $width_type . ';

                    height: ' . $height . $height_type . ';

                    border: ' . $border_type . " " . $border_color . " " . $border_weight . 'px;

                    border-radius: ' . $border_radius . 'px;

                    "

                    src="https://survey.porsline.ir/s/' . $survey[0]->survay_code . '" frameborder="0"></iframe>';

                }

                $shortCodeString .= '</div>

            </div>

            <style>

                @keyframes popupbtu {

                    from{

                        opacity: 0;

                        margin-top: 100%;

                    }

                    to {

                        opacity: 1;

                        margin-top: ' . $margin_top . '%;

                    }

                }



                @keyframes popuputb {

                    from{

                        opacity: 0;

                        margin-top: -100%;

                    }

                    to {

                        opacity: 1;

                        margin-top: ' . $margin_top . '%;

                    }

                }



                @keyframes popupltr {

                    from{

                        opacity: 0;

                        margin-left: -100%;

                    }

                    to {

                        opacity: 1;

                        margin-left: ' . $margin_left . '%;

                    }

                }



                @keyframes popuprtl {

                    from{

                        opacity: 0;

                        margin-right: -100%;

                    }

                    to {

                        opacity: 1;

                        margin-right: ' . $margin_right . '%;

                    }

                }

            </style>

            <script>

                function porsline_call_popup(popup_nav) {

                    jQuery("#porsline-survey-popup-window").attr("style", "animation: popupbackAnimation 0s 0s forwards;");

                    if(popup_nav == 1) {

                        jQuery("#porsline-survey-popup-window iframe").attr("style", jQuery("#porsline-survey-popup-window iframe").attr("style") + "animation: popupbtu 2s; margin: ' . $margin_top . "% " . $margin_right . "% " . $margin_bottom . "% " . $margin_left . '");

                    }else if(popup_nav == 2) {

                        jQuery("#porsline-survey-popup-window iframe").attr("style", jQuery("#porsline-survey-popup-window iframe").attr("style") + "animation: popuputb 2s; margin: ' . $margin_top . "% " . $margin_right . "% " . $margin_bottom . "% " . $margin_left . '");

                    }else if(popup_nav == 3) {

                        jQuery("#porsline-survey-popup-window iframe").attr("style", jQuery("#porsline-survey-popup-window iframe").attr("style") + "animation: popupltr 2s; margin: ' . $margin_top . "% " . $margin_right . "% " . $margin_bottom . "% " . $margin_left . '");

                    }else if(popup_nav == 4) {

                        jQuery("#porsline-survey-popup-window iframe").attr("style", jQuery("#porsline-survey-popup-window iframe").attr("style") + "animation: popuprtl 2s; margin: ' . $margin_top . "% " . $margin_right . "% " . $margin_bottom . "% " . $margin_left . '");

                    }

                }

            </script></div>';

        }

        if($popup_type == "3") {

            $shortCodeString .= '<div style="display: inline;">

                    <a 

                    onclick="porsline_call_popup(' . $survey[0]->popup_nav . ')"> ' . $survey[0]->popup_btn_txt . '</a>

                    <div id="porsline-popup-all">

                        <div id="porsline-survey-popup-window"

                        >

                        <!-- <span id="porsline-popup-close-btn"><i class="fas fa-plus"></i></span> -->';

                            

                        if($lang == 2) {

                            $shortCodeString .= '<iframe 

                            style="

                            width: ' . $width . $width_type . ';

                            height: ' . $height . $height_type . ';

                            border: ' . $border_type . " " . $border_color . " " . $border_weight . 'px;

                            border-radius: ' . $border_radius . 'px;

                            "

                            src="https://survey.porsline.ir/s/' . $survey[0]->survay_code . '" frameborder="0"></iframe>';

                        }

                        $shortCodeString .= '</div>

                    </div>

                    <style>

                        @keyframes popupbtu {

                            from{

                                opacity: 0;

                                margin-top: 100%;

                            }

                            to {

                                opacity: 1;

                                margin-top: ' . $margin_top . '%;

                            }

                        }

        

                        @keyframes popuputb {

                            from{

                                opacity: 0;

                                margin-top: -100%;

                            }

                            to {

                                opacity: 1;

                                margin-top: ' . $margin_top . '%;

                            }

                        }

        

                        @keyframes popupltr {

                            from{

                                opacity: 0;

                                margin-left: -100%;

                            }

                            to {

                                opacity: 1;

                                margin-left: ' . $margin_left . '%;

                            }

                        }

        

                        @keyframes popuprtl {

                            from{

                                opacity: 0;

                                margin-right: -100%;

                            }

                            to {

                                opacity: 1;

                                margin-right: ' . $margin_right . '%;

                            }

                        }

                    </style>

                    <script>

                        function porsline_call_popup(popup_nav) {

                            jQuery("#porsline-survey-popup-window").attr("style", "animation: popupbackAnimation 0s 0s forwards;");

                            if(popup_nav == 1) {

                                jQuery("#porsline-survey-popup-window iframe").attr("style", jQuery("#porsline-survey-popup-window iframe").attr("style") + "animation: popupbtu 2s; margin: ' . $margin_top . "% " . $margin_right . "% " . $margin_bottom . "% " . $margin_left . '");

                            }else if(popup_nav == 2) {

                                jQuery("#porsline-survey-popup-window iframe").attr("style", jQuery("#porsline-survey-popup-window iframe").attr("style") + "animation: popuputb 2s; margin: ' . $margin_top . "% " . $margin_right . "% " . $margin_bottom . "% " . $margin_left . '");

                            }else if(popup_nav == 3) {

                                jQuery("#porsline-survey-popup-window iframe").attr("style", jQuery("#porsline-survey-popup-window iframe").attr("style") + "animation: popupltr 2s; margin: ' . $margin_top . "% " . $margin_right . "% " . $margin_bottom . "% " . $margin_left . '");

                            }else if(popup_nav == 4) {

                                jQuery("#porsline-survey-popup-window iframe").attr("style", jQuery("#porsline-survey-popup-window iframe").attr("style") + "animation: popuprtl 2s; margin: ' . $margin_top . "% " . $margin_right . "% " . $margin_bottom . "% " . $margin_left . '");

                            }

                        }

                    </script></div>';

                } else if($popup_type == "2") {

                    $shortCodeString .= '<div id="porsline-popup-all">

                <div id="porsline-survey-popup-window"

                >';

                if($lang == 2) {  

                    $shortCodeString .= '<iframe 

                    style="

                    width: ' . $width . $width_type . ';

                    height: ' . $height . $height_type . ';

                    border: ' . $border_type . " " . $border_color . " " . $border_weight .'px;

                    border-radius: ' . $border_radius . 'px;

                    "

                    src="https://survey.porsline.ir/s/' . $survey[0]->survay_code . '" frameborder="0"></iframe>';

                }

                $shortCodeString .= '</div>

            </div>

            <style>

                @keyframes popupbtu {

                    from{

                        opacity: 0;

                        margin-top: 100%;

                    }

                    to {

                        opacity: 1;

                        margin-top: ' . $margin_top . '%;

                    }

                }



                @keyframes popuputb {

                    from{

                        opacity: 0;

                        margin-top: -100%;

                    }

                    to {

                        opacity: 1;

                        margin-top: ' . $margin_top . '%;

                    }

                }



                @keyframes popupltr {

                    from{

                        opacity: 0;

                        margin-left: -100%;

                    }

                    to {

                        opacity: 1;

                        margin-left: ' . $margin_left . '%;

                    }

                }



                @keyframes popuprtl {

                    from{

                        opacity: 0;

                        margin-right: -100%;

                    }

                    to {

                        opacity: 1;

                        margin-right: ' . $margin_right . '%;

                    }

                }

            </style>

            <script>

                function porsline_call_popup(popup_nav) {

                    jQuery("#porsline-survey-popup-window").attr("style", "animation: popupbackAnimation 0s 0s forwards;");

                            if(popup_nav == 1) {

                                jQuery("#porsline-survey-popup-window iframe").attr("style", jQuery("#porsline-survey-popup-window iframe").attr("style") + "animation: popupbtu 2s; margin: ' . $margin_top . "% " . $margin_right . "% " . $margin_bottom . "% " . $margin_left . '");

                            }else if(popup_nav == 2) {

                                jQuery("#porsline-survey-popup-window iframe").attr("style", jQuery("#porsline-survey-popup-window iframe").attr("style") + "animation: popuputb 2s; margin: ' . $margin_top . "% " . $margin_right . "% " . $margin_bottom . "% " . $margin_left . '");

                            }else if(popup_nav == 3) {

                                jQuery("#porsline-survey-popup-window iframe").attr("style", jQuery("#porsline-survey-popup-window iframe").attr("style") + "animation: popupltr 2s; margin: ' . $margin_top . "% " . $margin_right . "% " . $margin_bottom . "% " . $margin_left . '");

                            }else if(popup_nav == 4) {

                                jQuery("#porsline-survey-popup-window iframe").attr("style", jQuery("#porsline-survey-popup-window iframe").attr("style") + "animation: popuprtl 2s; margin: ' . $margin_top . "% " . $margin_right . "% " . $margin_bottom . "% " . $margin_left . '");

                    }

                }

                var ss = 0;

                

                setInterval(function(){

                    if(ss == 0){

                        porsline_call_popup("' .  $survey[0]->popup_nav . '");

                        ss = 1;

                    }

                },' . $survey[0]->popup_display_after * 1000 . ');



            </script>';

        }

    }



    $shortCodeString .= '<script src="'.esc_url(plugins_url( '../assets/js/front.js', __FIle__)).'"></script>';

    return $shortCodeString;

}