
$(document).ready(function(){

    $(window).scroll(function(){

        var scroll_Top=$(this).scrollTop();
    
        if(scroll_Top>200){
            $("nav").addClass("fixNav");
        }
        else{
            $("nav").removeClass("fixNav");
        }
    })


    $(".dropbtn").click(function(){
        $(".dropdownContent").toggle();
    });

})