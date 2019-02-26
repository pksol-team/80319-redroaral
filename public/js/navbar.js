$(document).ready(function(){
    $('#add-asset').hide();
    $('#add-voice').hide();
    $('#add-ip').hide();
    $('#add-server').hide();
    $('.location').hide();
    $('.location-info').hide();
    $('.rectangle').hide();
    $('.user-info').hide();
    $('.rectangle1').hide();

    $('#manila').click(function (){
        $('.location').attr('src','resources/icons/ph.png');
        $('.location-info').slideUp();
        $('.rectangle').hide();
    });

    $('#us').click(function (){
        $('.location').attr('src','resources/icons/us.png');
        $('.location-info').slideUp();
        $('.rectangle').hide();
     
    });
    $('#india').click(function (){
        $('.location').attr('src','resources/icons/india.png');
        $('.location-info').slideUp();
        $('.rectangle').hide();
       
    });
    $('#banglore').click(function (){
        $('.location').attr('src','resources/icons/india.png');
        $('.location-info').slideUp();
        $('.rectangle').hide();
       
    });
    $('.location').click(function (){
        $('.location-info').slideToggle(300);
        $('.rectangle').slideToggle(300);
        $('.user-info').slideUp(300);
        $('.rectangle1').slideUp(300);
    });
    $('.user').click(function (){
        $('.user-info').slideToggle(300);
        $('.rectangle1').slideToggle(300);
        $('.location-info').slideUp(300);
        $('.rectangle').slideUp(300);
    });

    
    $('.sidebar-cont').click(function (){
        $('.location').attr('src','resources/icons/location.png');
        $('.location-info').slideUp();
        $('.rectangle').hide();
       
    });
});
