jQuery(document).ready( function($) {
    /*
     * Filter retailers
     */
    var kommun;
    $('.cat-item').on('click', function () {
        event.preventDefault();
        //Remove active color from all items
        $('.cat-item').css('background', '#8e8e8e');
        //Add active color to clicked items
        $(this).css('background', '#5091BD');

        //If same kommun is clicked do nothing
        if(kommun != $(this).find('a').html()){
            //else set variable to clicked kommun
            kommun = $(this).find('a').html();
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