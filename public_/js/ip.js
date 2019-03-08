$(document).ready(function(){
    $('.frame3-ip').hide();
    $('#add-ip-inv').hide();
    $('#update-ip-inv').hide();

    $('.frame2-ip td').click(function (){
        $('.frame3-ip').show();
        $('.frame2-ip').hide();
        $('.frame1-ip').hide();
        $('#add-asset').hide();
        $('#add-voice').hide();
        $('#add-ip').show();
        $('#ip-form').css("height", "700px");
    });

    $('.ip-close').click(function (){
        $('.frame3-ip').hide();
        $('#add-ip').hide();
        $('.frame2-ip').show();
        $('.frame1-ip').show();
        $('#ip-form').css("height", "");
    });



    
    $('#show-dashboard').click(function (){
        $('.frame3-ip').hide();
        $('.frame2-ip').show();
        $('.frame1-ip').show();
        $('#add-ip').hide();
        $('#ip-form').css("height", "");
    });

    $('#show-inventory').click(function (){
        $('.frame3-ip').hide();
        $('.frame2-ip').show();
        $('.frame1-ip').show();
        $('#add-ip').hide();
        $('#ip-form').css("height", "");
    });

    $('#show-purchase').click(function (){
        $('.frame3-ip').hide();
        $('.frame2-ip').show();
        $('.frame1-ip').show();
        $('#add-ip').hide();
        $('#ip-form').css("height", "");
    });
    $('#show-server').click(function (){
        $('.frame3-ip').hide();
        $('.frame2-ip').show();
        $('.frame1-ip').show();
        $('#add-ip').hide();
        $('#ip-form').css("height", "");
    });
    $('#show-voicedid').click(function (){
        $('.frame3-ip').hide();
        $('.frame2-ip').show();
        $('.frame1-ip').show();
        $('#add-ip').hide();
        $('#ip-form').css("height", "");
    });
    $('#show-pm').click(function (){
        $('.frame3-ip').hide();
        $('.frame2-ip').show();
        $('.frame1-ip').show();
        $('#add-ip').hide();
        $('#ip-form').css("height", "");
    });
    $('#show-changerequest').click(function (){
        $('.frame3-ip').hide();
        $('.frame2-ip').show();
        $('.frame1-ip').show();
        $('#add-ip').hide();
        $('#ip-form').css("height", "");
    });
    $('#show-floormap').click(function (){
        $('.frame3-ip').hide();
        $('.frame2-ip').show();
        $('.frame1-ip').show();
        $('#add-ip').hide();
        $('#ip-form').css("height", "");
    });
    $('#show-report').click(function (){
        $('.frame3-ip').hide();
        $('.frame2-ip').show();
        $('.frame1-ip').show();
        $('#add-ip').hide();
        $('#ip-form').css("height", "");
    });
    $('.ip-modal-close').click(function (){
        $('#add-ip-inv').fadeOut(300);
        $('#ip-form').css("opacity", "");
        $('body').css("overflow-y", "");
    });
    $('.btn-ip .cancel').click(function (){
        $('#add-ip-inv').fadeOut(300);
        $('#ip-form').css("opacity", "");
        $('body').css("overflow-y", "");
    });
    $('#add-ip').click(function (){
        $('#add-ip-inv').fadeIn(300);
        $('#ip-form').css("opacity", "0.3");
        $('body').css("overflow-y", "hidden");
    });

    $('#update-ip-modal').click(function (){
        $('#update-ip-inv').fadeIn(300);
        $('#ip-form').css("opacity", "0.3");
        $('body').css("overflow-y", "hidden");
    });

    $('.ip-modal-update-close').click(function (){
        $('#update-ip-inv').fadeOut(300);
        $('#ip-form').css("opacity", "");
        $('body').css("overflow-y", "");
    });
    $('.btn-ip-update .cancel').click(function (){
        $('#update-ip-inv').fadeOut(300);
        $('#ip-form').css("opacity", "");
        $('body').css("overflow-y", "");
    });



});