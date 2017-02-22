jQuery(document).ready( function($) {

    var solutions = [
        [0,0,0],
        [0,0,1],
        [0,1,0],
        [0,1,1],
        [1,0,0],
        [1,0,1],
        [1,1,0],
        [1,1,1],
        [2,0,0],
        [2,0,1],
        [2,1,0],
        [2,1,1],
    ];

    var choices = [null,null,null];

    var biop = [0, 4];

    var oxyfix = [2,3,6,7,8,9,10,11];

    var both = [1,5];

    var currentStep;

    //Start button
    $('.conf-start button').on('click', function(){
        //Set current step to first step
        currentStep = 1;
        //Show modal
        $('.conf-modal').fadeIn('slow');//attr('style', '');
        //console.log(currentStep);
    });

    //On option click
    $('.conf-modal-option').on('click', function(){
        //Increment to next step
        currentStep++;
        //
        var step = '#step' + currentStep;
        //Hide all modal content
        $('.conf-modal-content').attr('style', 'display: none;');
        //Set progress field to current step
        $('.conf-progress span').html(currentStep);

        if ( $(this).hasClass('conf-choice') ) {
            var position = $(this).parent('.conf-modal-options').data('id');
            choices[position] = $(this).data('option');
        }


        var product;

        if ($.inArray(compareArrays(solutions, choices), oxyfix) != -1){
            product = 'Oxyfix';
        }else if ($.inArray(compareArrays(solutions, choices), biop) != -1){
            product = 'Biop';
        }
        else{
            product = 'Oxyfix och Biop';
        }

        //Change product sugestion
        $('.product-suggestion').html(product);

        //Set CF7 hidden field to product suggestion
        $('.hidden-product').val(product);

        if (product != 'Oxyfix och Biop'){
            $('.product-config-link').attr('href', $('.product-config-link').data('value') + $('.product-suggestion').html());
        }else{
            $('.product-config-link').attr('href', $('.product-config-link').data('both'));
        }
        

        //Show current modal content
        $(step).fadeIn('slow');//attr('style', '');

    });

    //Back button
    $('.conf-modal-back').on('click', function(){
        //Go back one step if not on first step
        if(currentStep != 1){
            currentStep--;
            var step = '#step' + currentStep;
            //Hide all modal content
            $('.conf-modal-content').attr('style', 'display: none;');
            //Update progress field to current step
            $('.conf-progress span').html(currentStep);
            //Show current modal content
            $(step).fadeIn('slow');//attr('style', '');
            //console.log(currentStep);
        }else{
            //If on first step hide modal
            $('.conf-modal').attr('style', 'display: none;');
        }

    });

    //Close button
    $('.close-conf-modal').on('click', function(){
        //Reset currentStep to 1
        currentStep = 1;
        //Hide modal
        $('.conf-modal').attr('style', 'display: none;');
        //Hide all modal contents
        $('.conf-modal-content').attr('style', 'display: none;');
        //Set progress field to 1
        $('.conf-progress span').html(currentStep);
        //Show step 1 when start button is clicked
        var step = '#step' + currentStep;
        $(step).attr('style', '');

    });
    

});

function compareArrays(solutions, choices){
    for(var i = 0; i < solutions.length; i++) {
        for (var j = 0; j < 3; j++){
            if(choices[j] == solutions[i][j]) {
                if (j == 2){
                    return i;
                }
                continue;
            }else {
                break;
            }
        }
    }
    return 'Nothing';
}