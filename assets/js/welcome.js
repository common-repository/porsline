function openFaq(num) {

    if (jQuery("#faq" + num).css("display") == "none")

        jQuery("#faq" + num).attr("style", "display: block");

    else if (jQuery("#faq" + num).css("display") == "block")

        jQuery("#faq" + num).attr("style", "display: none");

}



var slide_count = 0;
if (document.getElementById("lang-tag").value == 1) {
    setInterval(function () {

        if (slide_count < 6) {

            var marginCur = document.getElementById("testimonial-first-item").style.marginRight;

            marginCur = parseInt(marginCur, 10);

            marginCur = marginCur - 628;

            jQuery("#testimonial-first-item").animate({

                "margin-right": marginCur

            })

            slide_count++;

        } else {

            jQuery("#testimonial-first-item").animate({

                "margin-right": 1900

            })

            slide_count = 0;

        }

    }, 7000);
} else if (document.getElementById("lang-tag").value == 2) {
    setInterval(function () {

        if (slide_count < 2) {

            var marginCur = document.getElementById("testimonial-first-item").style.marginLeft;

            marginCur = parseInt(marginCur, 10);

            marginCur = marginCur - 628;

            jQuery("#testimonial-first-item").animate({

                "margin-left": marginCur

            })

            slide_count++;

        } else {

            jQuery("#testimonial-first-item").animate({

                "margin-left": 634

            })

            slide_count = 0;

        }

    }, 7000);
} else if (document.getElementById("lang-tag").value == 3) {
    setInterval(function () {

        if (slide_count < 1) {

            var marginCur = document.getElementById("testimonial-first-item").style.marginRight;

            marginCur = parseInt(marginCur, 10);

            marginCur = marginCur - 628;

            jQuery("#testimonial-first-item").animate({

                "margin-right": marginCur

            })

            slide_count++;

        } else {

            jQuery("#testimonial-first-item").animate({

                "margin-right": 317

            })

            slide_count = 0;

        }

    }, 7000);
}