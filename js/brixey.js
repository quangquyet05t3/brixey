jQuery('#form-info').submit(function (event ) {
    event.preventDefault();
    submitFormInfo('#form-info');
});

jQuery('#form-info2').submit(function (event ) {
    event.preventDefault();
    submitFormInfo('#form-info2');
});
jQuery('#form-info3').submit(function (event ) {
    event.preventDefault();
    submitFormInfo('#form-info3');
});

var submitFormInfo = function (selector) {
    console.log(jQuery(selector).serialize());
    var url = jQuery(selector).attr('data-url');
    jQuery('#modal-waiting').modal('show');
    jQuery.ajax({
        type: "POST",
        url: url,
        data: jQuery(selector).serialize(),
        dataType: 'json',
        success: function (data) {
            if(data.success===true) {
                jQuery('.alert-success').show();
                jQuery('.alert-danger').hide();
            } else {
                jQuery('.alert-success').hide();
                jQuery('.alert-danger').show();
            }
            jQuery('#modal-waiting').modal('hide');
            jQuery('#modal-result').modal('show');
        }
    });
};
