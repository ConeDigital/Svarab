jQuery(document).ready( function($) {
    /*
     * Create Contact in Upsales CRM
     */
    $('.offer-form-submit').on('click', function () {
        event.preventDefault();

        $.ajax({
            url: ajaxApi.ajaxurl,
            type: 'POST',
            data: {
                action: 'api_upsales_ajax',
                name: $('.offer-name').val(),
                email: $('.offer-email').val(),
                phone: $('.offer-phone').val(),
                notes: $('.offer-notes').val(),
            },
            success: function(data) {
                console.log('Success');
                console.log(data);
            },
            error: function(response) {
                console.log(response.response);
                console.log('Error!!!');
            }
        });
    });
}); 