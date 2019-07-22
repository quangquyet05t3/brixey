jQuery('#form-info').submit(function (event ) {
    event.preventDefault();
    var url = jQuery('#form-info').attr('data-url');
    jQuery.ajax({
        type: "POST",
        url: url,
        data: jQuery('#form-info').serialize(),
        dataType: 'json',
        success: function (data) {
            if(data.success===true) {
                jQuery('.alert-success').show();
                jQuery('.alert-danger').hide();
            } else {
                jQuery('.alert-success').hide();
                jQuery('.alert-danger').show();
            }
            jQuery('#myModal').modal('show');
        }
    });
});
