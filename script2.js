
    $('.indexing').hover(function () {
            $(this).css('color','red');          
        }, function () {
            $(this).css('color','white'); 
        }
    );

    $('#checking li a').hover(function () {
        $(this).css('color','red');  
        $('#checking').siblings().css('color','red');
    }, function () {
        $(this).css('color','white');    
        $('#checking').siblings().css('color','white'); 
    }
    );

    $('.indexing').on("click", function () {
        $('.indexing').css('color','inherit');
        $(this).css('color','red');
    });

