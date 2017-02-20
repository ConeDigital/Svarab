jQuery(document).ready( function($) {

    $('.retailer-contact a').on('click', function(){
        event.preventDefault();
        var email = $(this).siblings('.hidden-retailer-email').val();
        var hidden_email = $('body').find('.contactform-hidden-email');
        hidden_email.val(email);

        $('.contact-retailer-modal').show();
    });


});
