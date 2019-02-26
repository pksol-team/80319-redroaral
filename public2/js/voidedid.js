$(document).ready(function(){
    $('.frame3-voicedid').hide();
    $('#add-voice-inv').hide();
    $('#update-voice-inv').hide();


    $('.frame2-voicedid td').click(function (){
        $('.frame3-voicedid').show();
        $('#add-asset').hide();
        $('#add-voice').show();
        $('#add-ip').hide();
        $('.frame2-voicedid').hide();
        $('.frame1-voicedid').hide();
        $('#voicedid-form').css("height", "700px");
    });


    $('.voicedid-close').click(function (){
        $('.frame3-voicedid').hide();
        $('#add-voice').hide();
        $('.frame2-voicedid').show();
        $('.frame1-voicedid').show();
        $('#voicedid-form').css("height", "");
    });



    $('#show-dashboard').click(function (){
        $('.frame3-voicedid').hide();
        $('.frame2-voicedid').show();
        $('.frame1-voicedid').show();
        $('#add-voice').hide();
        $('#voicedid-form').css("height", "");
    });
    $('#show-inventory').click(function (){
        $('.frame3-voicedid').hide();
        $('.frame2-voicedid').show();
        $('.frame1-voicedid').show();
        $('#add-voice').hide();
        $('#voicedid-form').css("height", "");
    });
    $('#show-purchase').click(function (){
        $('.frame3-voicedid').hide();
        $('.frame2-voicedid').show();
        $('.frame1-voicedid').show();
        $('#add-voice').hide();
        $('#voicedid-form').css("height", "");
    });
    $('#show-server').click(function (){
        $('.frame3-voicedid').hide();
        $('.frame2-voicedid').show();
        $('.frame1-voicedid').show();
        $('#add-voice').hide();
        $('#voicedid-form').css("height", "");
    });
    $('#show-ip').click(function (){
        $('.frame3-voicedid').hide();
        $('.frame2-voicedid').show();
        $('.frame1-voicedid').show();
        $('#add-voice').hide();
        $('#voicedid-form').css("height", "");
    });
    $('#show-pm').click(function (){
        $('.frame3-voicedid').hide();
        $('.frame2-voicedid').show();
        $('.frame1-voicedid').show();
        $('#add-voice').hide();
        $('#voicedid-form').css("height", "");
    });
    $('#show-changerequest').click(function (){
        $('.frame3-voicedid').hide();
        $('.frame2-voicedid').show();
        $('.frame1-voicedid').show();
        $('#add-voice').hide();
        $('#voicedid-form').css("height", "");
    });
    $('#show-floormap').click(function (){
        $('.frame3-voicedid').hide();
        $('.frame2-voicedid').show();
        $('.frame1-voicedid').show();
        $('#add-voice').hide();
        $('#voicedid-form').css("height", "");
    });
    $('#show-report').click(function (){
        $('.frame3-voicedid').hide();
        $('.frame2-voicedid').show();
        $('.frame1-voicedid').show();
        $('#add-voice').hide();
        $('#voicedid-form').css("height", "");
    });
    $('.voice-modal-close').click(function (){
        $('#add-voice-inv').fadeOut(300);
        $('#voicedid-form').css("opacity", "");
        $('body').css("overflow-y", "");
    });
    $('.btn-voice .cancel').click(function (){
        $('#add-voice-inv').fadeOut(300);
        $('#voicedid-form').css("opacity", "");
        $('body').css("overflow-y", "");
    });
    $('#add-voice').click(function (){
        $('#add-voice-inv').fadeIn(300);
        $('#voicedid-form').css("opacity", "0.3");
        $('body').css("overflow-y", "hidden");
    });

    $('#update-voice-modal').click(function (){
        $('#update-voice-inv').fadeIn(300);
        $('#voicedid-form').css("opacity", "0.3");
        $('body').css("overflow-y", "hidden");
    });

    $('.voice-modal-update-close').click(function (){
        $('#update-voice-inv').fadeOut(300);
        $('#voicedid-form').css("opacity", "");
        $('body').css("overflow-y", "");
    });
    $('.btn-voice-update .cancel').click(function (){
        $('#update-voice-inv').fadeOut(300);
        $('#voicedid-form').css("opacity", "");
        $('body').css("overflow-y", "");
    });

});