var add_survey_modal_on = false;



var add_survey_modal = document.getElementById("add_survey_popup_holder");

var add_survey_btn = document.getElementById("porsline-add-new-survey-list-button");



window.onclick = function (event) {

    if (event.target == add_survey_modal && event.target != add_survey_btn && add_survey_modal_on == true) {

        jQuery("#add_survey_popup_holder").css("display", "none");
        jQuery("body").attr("style", "overflow: auto;")

    }



    if (jQuery(event.target).is('.porsline-survey-styles-edit')) {

        jQuery(".porsline-survey-styles-edit").css("display", "none");
        jQuery("body").attr("style", "overflow: auto;")

    }



    if (!jQuery(event.target).is(".options-btn i") && !jQuery(event.target).is(".options-btn") && !jQuery(event.target).is(".porsline-delete-btn") && !jQuery(event.target).is(".porsline-delete-modal") && !jQuery(event.target).is(".porsline-delete-modal p") && !jQuery(event.target).is(".porsline-delete-modal h4") && !jQuery(event.target).is(".delete-modal-header") && !jQuery(event.target).is(".delete-modal-btns")) {

        jQuery(".survey-options-sec").attr("style", "display: none;");

        jQuery(".porsline-delete-modal-back").attr("style", "display: none;");

    }

}



jQuery("#porsline-add-new-survey-list-button").click(function () {



    jQuery("#add_survey_popup_holder").css("display", "block");

    add_survey_modal_on = true;

    jQuery("#porsline-choose-from-panel-span").css("display", "block");

    jQuery("#porsline-choose-from-link-span").css("display", "none");

    jQuery(".porsline-choose-from-panel-sec").css("display", "block");

    jQuery("#porsline-choose-from-link-span").css("display", "none");

    jQuery(".porsline-choose-from-link-sec").css("display", "none");

    jQuery("body").attr("style", "overflow: hidden;")


});



jQuery("#popup-close-btn").click(function () {



    jQuery("#add_survey_popup_holder").css("display", "none");
    jQuery("body").attr("style", "overflow: auto;")



});



jQuery("#porsline-choose-from-panel-btn").click(function () {



    jQuery(".porsline-add-survey-popup-btn-sec").css("display", "none");

    jQuery("#porsline-choose-from-panel-span").css("display", "block");

    jQuery("#porsline-choose-from-link-span").css("display", "none");



    jQuery("#porsline-add-survey-popup").animate({ width: "60%", height: "500px", marginRight: "-3%" });



    jQuery(".porsline-choose-from-panel-sec").css("display", "block");

});



jQuery("#porsline-choose-from-link-btn").click(function () {



    jQuery(".porsline-add-survey-popup-btn-sec").css("display", "none");

    jQuery("#porsline-choose-from-panel-span").css("display", "none");

    jQuery("#porsline-choose-from-link-span").css("display", "block");





    jQuery(".porsline-choose-from-link-sec").css("display", "block");

});



function porsline_open_design(id) {

    if (jQuery("#porsline-survey-styles-edit-" + id).css("display") == "none") {

        jQuery("#porsline-survey-styles-edit-" + id).css("display", "block");
        jQuery("body").attr("style", "overflow: hidden;")
    }

    else if (jQuery("#porsline-survey-styles-edit-" + id).css("display") == "block") {

        jQuery("#porsline-survey-styles-edit-" + id).css("display", "none");
        jQuery("body").attr("style", "overflow: auto;")
    }

}



function close_style_btn(id) {

    jQuery("#porsline-survey-styles-edit-" + id).attr("style", "display: none;");
    jQuery("body").attr("style", "overflow: auto;")

}



function porsline_show_options(id) {

    jQuery(".survey-options-sec").css("display", "none")

    if (jQuery("#survey-options-sec-" + id).css("display") == "none")

        jQuery("#survey-options-sec-" + id).attr("style", "display: block")

    else if (jQuery("#survey-options-sec-" + id).css("display") == "block")

        jQuery("#survey-options-sec-" + id).attr("style", "display: none;")

}



function copySortcode(short, id) {

    const el = document.createElement('textarea');

    el.value = short;

    document.body.appendChild(el);

    el.select();

    document.execCommand('copy');

    document.body.removeChild(el);



    jQuery("#copy-msg-" + id).animate({ opacity: 1 }, 500);

    setTimeout(function () {

        jQuery("#copy-msg-" + id).animate({ opacity: 0 }, 500);

    }, 2000)

}


if (document.getElementById("lang-tag").value == 1) {
    var arabicNumbers = ['۰', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];



    jQuery('.porsline-number').text(function (i, v) {



        var chars = v.split('');



        for (var i = 0; i < chars.length; i++) {



            if (/\d/.test(chars[i])) {



                chars[i] = arabicNumbers[chars[i]];



            }



        }



        return chars.join('');



    });
}


function open_delete_modal(id) {

    jQuery("#porsline-delete-modal-back-" + id).css("display", "block")

}