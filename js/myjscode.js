
$(document).ready(function(){

    $(window).scroll(function(){

        var scroll_Top=$(this).scrollTop();
    
        if(scroll_Top>200){
            $('#goTopButton').css('display','inline');
            $("nav").addClass("fixNav");
        }
        else{
            $('#goTopButton').css('display','none');
            $("nav").removeClass("fixNav");
        }
    })


    $(".dropbtn").click(function(){
        $(".dropdownContent").toggle();
    });
    $(document).ready(function(){

        //Code For When Go To Top Button Click
        $('#goTopButton').click(function(){
            $('html').animate({scrollTop:0},1000);
        });
    });

})
