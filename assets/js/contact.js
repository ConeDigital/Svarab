jQuery(document).ready( function($) {

    $('.retailer-contact a').on('click', function(){
        event.preventDefault();
        var email = $(this).siblings('.hidden-retailer-email').val();
        var hidden_email = $('body').find('.contactform-hidden-email');
        hidden_email.val(email);

        $('.contact-retailer-modal').show();
    });

    $('.close-c-modal').on('click', function(){
    	$('.contact-retailer-modal').hide();
    });

    $(document).on('click keyup', function(event) {
    	
    	//Get DOM-element of container
    	var element = $('.contact-retailer-modal')[0];
    	//If press esc, close modal
    	if (event.keyCode === 27) $('.close-c-modal').click();

    	//If clicked object isnt <a> and clicked element isnt in container
    	if( event.target.tagName != 'A' && ! $.contains(element, event.toElement) ){
    		//Hide container
    		$('.contact-retailer-modal').hide();
    	} 
	});

});
