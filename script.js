$(document).ready(function(){
    $('.slider').slick({
        arrows: true,
        dots: true,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 4000,
    });
});

$('.menu-btn').on('click', function(e){
    e.preventDefault;
    $(this).toggleClass('active');
    $('.left-sidebar').toggleClass('active');
    $('body').toggleClass('lock');
    $('.content').toggleClass('active');
});