$(document).ready(function(){
    $('.hamburg').on('click',function(){
        $('.menu').toggleClass('active');
        $('body').toggleClass('active');
    });
});



$(window).on('scroll',function(){
    if($(window).scrollTop()){
        $('nav').addClass('scroll');
    }

    else{
        $('nav').removeClass('scroll');

    }
});

