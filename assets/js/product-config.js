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

    var current = [null,null,null];

    var biop = [0, 4];

    var oxyfix = [2,3,6,7,8,9,10,11];

    var both = [1,5];

    $('.option').on('click', function() {
        var siblings = $(this).siblings('.option');
        siblings.prop('checked', false);
        siblings.removeClass('checked');
        $(this).addClass('checked')
        if($(this).parent().data('id') != 500){
            current[$(this).parent().data('id')] = $(this).data('id');
        }
        //console.log(current);
        //alert( compareArrays(solutions, current));

        if ($.inArray(compareArrays(solutions, current), oxyfix) != -1){
            console.log('Oxyfix');
        }else if ($.inArray(compareArrays(solutions, current), biop) != -1){
            console.log('Biop');
        }
        else{
            console.log('Both');
        }

    });

});

function compareArrays(solutions, current){
    for(var i = 0; i < solutions.length; i++) {
        for (var j = 0; j < 3; j++){
            if(current[j] == solutions[i][j]) {
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