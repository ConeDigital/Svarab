jQuery(document).ready( function($) {
    /*
     * Filter retailers
     */
    var kommun;
    $('.cat-item a').on('click', function () {
        event.preventDefault();
        //If same kommun is clicked do nothing
        if(kommun != $(this).html()){
            //else set variable to clicked kommun
            kommun = $(this).html();
            //If Alla isnt clicked
            if ( kommun != 'Alla' ){
                //Hide all results and then fadeIn matched results
                $('.retailer-grid').hide();
                $('.'+kommun).fadeIn();
            }else{
                //If Alla is clicked then show all results
                $('.retailer-grid').hide();
                $('.retailer-grid').fadeIn();
            } 
        }

    });
}); 