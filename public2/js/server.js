$(document).ready(function(){
    $('.frame3-server').hide();
    $('#add-modal-server').hide();
    $('#update-modal-server').hide();

    $('.frame2-server td').click(function (){
        $('.frame3-server').show();
        $('.frame2-server').hide();
        $('.frame1-server').hide();
        $('#add-asset').hide();
        $('#add-voice').hide();
        $('#add-ip').hide();
        $('#add-server').show();
        $('#server-form').css("height", "705px");
    });

    $('.server-close').click(function (){
        $('.frame3-server').hide();
        $('#add-server').hide();
        $('.frame2-server').show();
        $('.frame1-server').show();
        $('#server-form').css("height", "");
    });



    
    $('#show-dashboard').click(function (){
        $('.frame3-server').hide();
        $('.frame2-server').show();
        $('.frame1-server').show();
        $('#add-server').hide();
        $('#ip-form').css("height", "");
    });

    $('#show-inventory').click(function (){
        $('.frame3-server').hide();
        $('.frame2-server').show();
        $('.frame1-server').show();
        $('#add-server').hide();
        $('#server-form').css("height", "");
    });

    $('#show-purchase').click(function (){
        $('.frame3-server').hide();
        $('.frame2-server').show();
        $('.frame1-server').show();
        $('#add-server').hide();
        $('#server-form').css("height", "");
    });
    $('#show-server').click(function (){
        $('.frame3-server').hide();
        $('.frame2-server').show();
        $('.frame1-server').show();
        $('#add-server').hide();
        $('#server-form').css("height", "");
    });
    $('#show-voicedid').click(function (){
        $('.frame3-server').hide();
        $('.frame2-server').show();
        $('.frame1-server').show();
        $('#add-server').hide();
        $('#server-form').css("height", "");
    });
    $('#show-pm').click(function (){
        $('.frame3-server').hide();
        $('.frame2-server').show();
        $('.frame1-server').show();
        $('#add-server').hide();
        $('#server-form').css("height", "");
    });
    $('#show-changerequest').click(function (){
        $('.frame3-server').hide();
        $('.frame2-server').show();
        $('.frame1-server').show();
        $('#add-server').hide();
        $('#server-form').css("height", "");
    });
    $('#show-floormap').click(function (){
        $('.frame3-server').hide();
        $('.frame2-server').show();
        $('.frame1-server').show();
        $('#add-server').hide();
        $('#server-form').css("height", "");
    });
    $('#show-report').click(function (){
        $('.frame3-server').hide();
        $('.frame2-server').show();
        $('.frame1-server').show();
        $('#add-server').hide();
        $('#server-form').css("height", "");
    });
    $('.server-modal-close').click(function (){
        $('#add-modal-server').fadeOut(300);
        $('#server-form').css("opacity", "");
        $('body').css("overflow-y", "");
    });
    $('.btn-server .cancel').click(function (){
        $('#add-modal-server').fadeOut(300);
        $('#server-form').css("opacity", "");
        $('body').css("overflow-y", "");
    });
    $('#add-server').click(function (){
        $('#add-modal-server').fadeIn(300);
        $('#server-form').css("opacity", "0.3");
        $('body').css("overflow-y", "hidden");
    });



    $('.update-server-modal-close').click(function (){
        $('#update-modal-server').fadeOut(300);
        $('#server-form').css("opacity", "");
        $('body').css("overflow-y", "");
    });
    $('.btn-update-server .cancel').click(function (){
        $('#update-modal-server').fadeOut(300);
        $('#server-form').css("opacity", "");
        $('body').css("overflow-y", "");
    });
    $('#update-server').click(function (){
        $('#update-modal-server').fadeIn(300);
        $('#server-form').css("opacity", "0.3");
        $('body').css("overflow-y", "hidden");
    });


});