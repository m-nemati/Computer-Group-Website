$(document).ready(function(){

    $(".next").click(function(){
        var index = $(".sliderphotos.active").index();
        $(".sliderphotos.active").fadeOut().removeClass("active").next().fadeIn().addClass("active")
        if(index == $(".sliderphotos:last-child").index()){
            $(".sliderphotos:first-child").fadeIn().addClass("active")
        }
    })

    $(".prev").click(function(){
        var index = $(".sliderphotos.active").index();
        $(".sliderphotos.active").fadeOut().removeClass("active").prev().fadeIn().addClass("active")
        if(index == 0){
            $(".sliderphotos:last-child").fadeIn().addClass("active");
        }
    })

    setInterval(function(){
        var index = $(".sliderphotos.active").index();
        $(".sliderphotos.active").fadeOut().removeClass("active").next().fadeIn().addClass("active")
        if(index == $(".sliderphotos:last-child").index()){
            $(".sliderphotos:first-child").fadeIn().addClass("active")
        }
    },5000)

})