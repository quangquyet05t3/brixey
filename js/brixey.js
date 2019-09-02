jQuery('#form-info').submit(function (event ) {
    event.preventDefault();
    submitFormInfo('#form-info', 1);
});

jQuery('#form-info2').submit(function (event ) {
    event.preventDefault();
    submitFormInfo('#form-info2', 1);
});
jQuery('#form-info3').submit(function (event ) {
    event.preventDefault();
    submitFormInfo('#form-info3', 1);
});
jQuery(".li-year").click(function (){
    var year = jQuery(this).attr('year');
    var idYear = '#year-'+year;
    jQuery('html, body').animate({
        scrollTop: jQuery(idYear).offset().top
    }, 2000);
});

function submitFormInfo(selector, attempts) {
    var url = jQuery(selector).attr('data-url');
    jQuery('#modal-waiting').modal('show');
    jQuery.ajax({
        type: "POST",
        url: url,
        data: jQuery(selector).serialize(),
        dataType: 'json',
        cache: false,
        success: function (data) {
            if(data.success==true) {
                showSucess();
            } else {
                showError();
            }
        },
        error: function (xhr, status, error) {
            jQuery('#error-message').html('<strong>Có lỗi xảy ra!</strong> ' + status + ': ' + xhr.responseText);
            showError();
            // make up to 20 attempts if error
            if (attempts <= 20) {
                //submitFormInfo(selector, attempts + 1);
            }
        }
    });
}

function showError() {
    jQuery('.alert-success').hide();
    jQuery('.alert-danger').show();
    jQuery('#modal-waiting').modal('hide');
    jQuery('#modal-result').modal('show');
}

function showSucess() {
    jQuery('.alert-success').show();
    jQuery('.alert-danger').hide();
    jQuery('#modal-waiting').modal('hide');
    jQuery('#modal-result').modal('show');
}


/*
Fix error mobile
$(document).ready(function(){
    $.ajaxSetup({ cache: false }); // or iPhones don't get fresh data
});

$.ajax({
    cache: false,
    headers: { "cache-control": "no-cache" },
});*/
