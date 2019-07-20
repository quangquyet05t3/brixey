//javascript functions


jQuery('#form-info').submit(function (event ) {
    console.log('submit');
    event.preventDefault();
    var url = jQuery('#form-info').attr('data-url');
    jQuery.ajax({
        type: "POST",
        url: url,
        data: jQuery('#form-info').serialize(),
        dataType: 'json',
        success: function (data) {
            console.log(data);
        }
    });
});