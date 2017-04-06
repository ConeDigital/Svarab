var firefox  = navigator.userAgent.indexOf('Firefox') > -1;

jQuery(document).ready( function($) {

    $('.retailer-contact a, .book-kommun .a-button').on('click', function(e){
        e.preventDefault();
        //If modal is accessed from retailer
        if( !$(this).hasClass('button-hover') ){
        	//Get retailer email
	        var email = $(this).siblings('.hidden-retailer-email').val();
	        //Set retailer email so contatct form 7 can use it
			var hidden_email = $('body').find('.contactform-hidden-email');
			hidden_email.val(email);
        }
        //Show modal
        $('.contact-retailer-modal').show();
    });

    $('.close-c-modal').on('click', function(){
    	$('.contact-retailer-modal').hide();
        
    });

    //Close modal on click outside or esc
    $(document).on('click', function(event) {
    	if(!firefox){
        	//Get DOM-element of container
        	var element = $('.contact-retailer-modal')[0];

        	//If clicked object isnt <a> or <i> and clicked element isnt in container
        	if( event.target.tagName != 'A' && event.target.tagName != 'I' && ! $.contains(element, event.toElement) ){
        		//Hide container
        		$('.close-c-modal').click();
                $('.contact-retailer-modal .inputs').val('');
        	} 
        }
	});

    $(document).on('keyup', function(event) {
        
        //If press esc, close modal
        if (event.keyCode === 27) $('.close-c-modal').click();

    });
});