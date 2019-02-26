
$(document).ready(function(){

    $('#floormap-modal').hide();
    $('.fmap-close').click(function (){
        $('#floormap-modal').fadeOut(300);
        $('.floormap-frame').css("opacity", "");
        $('body').css("overflow-y", "");
        $('.body-floor-map').css("overflow-y", "");
        $('.body-floor-map').css("overflow-x", "");
    });
    $('.body-floor-map button').click(function (){
        $('#floormap-modal').fadeIn(300);
        $('.floormap-frame').css("opacity", "0.3");
        $('body').css("overflow-y", "hidden");
        $('.body-floor-map').css("overflow-y", "hidden");
        $('.body-floor-map').css("overflow-x", "hidden");
    });
    $('#body-floor-map button').click(function (){
        var text = $(this).text();
        $(".bay-no").val(text);
    });


});