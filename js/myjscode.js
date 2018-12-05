
$(document).ready(function(){

    $(window).scroll(function(){

        var scroll_Top=$(this).scrollTop();
    
        if(scroll_Top>200){
            $("nav").addClass("fixNav");
            $("#totop").css('display','inline');
        }
        else{
            $("nav").removeClass("fixNav");
            $("#totop").css('display','none');
        }
    })


    $(".dropbtn").click(function(){
        $(".dropdownContent").toggle();
    });

    $("#totop").click(function(){
        $("html").animate({scrollTop:0},1000);
    })



})