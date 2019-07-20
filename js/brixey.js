jQuery('#quyet-form').submit(function (event ) {
    event.preventDefault();
    var url = jQuery('#quyet-form').attr('data-url');
    jQuery.ajax({
        type: "POST",
        url: url,
        data: jQuery('#quyet-form').serialize(),
        dataType: 'json',
        success: function (data) {
            console.log(data);
        }
    });

});

jQuery('#btnSubmitInfo').click(function (event) {
    event.preventDefault();
    console.log('hghghghgh');
});

