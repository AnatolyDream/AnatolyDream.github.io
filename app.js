$(document).ready(function(){
    $('.menuButton').click(function(){
        $('.hiddenMenu').slideToggle();
        $('.menuButton').toggleClass('blueMenuButton');
    });
});