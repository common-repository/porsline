jQuery("body").append(jQuery("#porsline-survey-popup-window"));



var modal = document.getElementById('porsline-survey-popup-window');



// When the user clicks anywhere outside of the modal, close it

window.onclick = function (event) {

    if (event.target == modal) {

        jQuery("#porsline-survey-popup-window").animate({ opacity: "0" });

        jQuery("#porsline-survey-popup-window iframe").animate({ top: "-100" });

        setTimeout(

            function () {

                jQuery("#porsline-survey-popup-window").css("display", "none");

            }, 500);

    }

}

