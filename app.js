$(document).ready(function(){
    
    $('.Toys-Button').click(function(){
        $('.notToys').fadeOut();
        $('.toy').fadeIn();
        
        $('.Toys-Button').addClass('activeFilter');
        $('.All-Button').removeClass('activeFilter');
        $('.notToys-Button').removeClass('activeFilter');
    });
    
    
    
    $('.notToys-Button').click(function(){
        $('.toy').fadeOut();
        $('.notToys').fadeIn();
        
        $('.Toys-Button').removeClass('activeFilter');
        $('.All-Button').removeClass('activeFilter');
        $('.notToys-Button').addClass('activeFilter');
    });
    
    
    
    $('.All-Button').click(function(){
        $('.notToys').fadeIn();
        $('.toy').fadeIn();
        
        $('.Toys-Button').removeClass('activeFilter');
        $('.All-Button').addClass('activeFilter');
        $('.notToys-Button').removeClass('activeFilter');
    });
    
    
});