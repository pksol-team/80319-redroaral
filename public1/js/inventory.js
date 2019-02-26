$(document).ready(function(){
    $('#form-laptop-inv').hide();
    $('#form-cpu-inv').hide();
    $('#form-monitor-inv').hide();
    $('#form-hardphone-inv').hide();
    $('#form-mouse-inv').hide();
    $('#form-keyboard-inv').hide();
    $('#form-headset-inv').hide();
    $('#add-asset-inv').hide();
    $('#update-laptop-inv').hide();
    $('#update-cpu-inv').hide();
    $('#update-monitor-inv').hide();
    $('#update-hardphone-inv').hide();
    $('#update-mouse-inv').hide();
    $('#update-keyboard-inv').hide();
    $('#update-headset-inv').hide();
});


$(document).ready(function(){
    $('#view-laptop').click(function (){
        $('#form-cpu-inv').fadeOut(200);
        $('#form-monitor-inv').fadeOut(200);
        $('#form-hardphone-inv').fadeOut(200);
        $('#form-mouse-inv').fadeOut(200);
        $('#form-keyboard-inv').fadeOut(200);
        $('#form-headset-inv').fadeOut(200);
        $('.frame1-inv').fadeOut(200);
        $('.frame2-inv').fadeOut(200);
        $('#form-laptop-inv').fadeIn(200);

        $('#inventory-form').css("height", "700px");

    });
    $('#view-cpu').click(function (){
        $('#form-laptop-inv').fadeOut(200);
        $('#form-monitor-inv').fadeOut(200);
        $('#form-hardphone-inv').fadeOut(200);
        $('#form-mouse-inv').fadeOut(200);
        $('#form-keyboard-inv').fadeOut(200);
        $('#form-headset-inv').fadeOut(200);
        $('.frame1-inv').fadeOut(200);
        $('.frame2-inv').fadeOut(200);
        $('#form-cpu-inv').fadeIn(200);

        $('#inventory-form').css("height", "700px");
    });
    $('#view-monitor').click(function (){
        $('#form-laptop-inv').fadeOut(200);
        $('#form-cpu-inv').fadeOut(200);
        $('#form-hardphone-inv').fadeOut(200);
        $('#form-mouse-inv').fadeOut(200);
        $('#form-keyboard-inv').fadeOut(200);
        $('#form-headset-inv').fadeOut(200);
        $('.frame1-inv').fadeOut(200);
        $('.frame2-inv').fadeOut(200);
        $('#form-monitor-inv').fadeIn(200);

        $('#inventory-form').css("height", "700px");
    });
    $('#view-hardphone').click(function (){
        $('#form-laptop-inv').fadeOut(200);
        $('#form-cpu-inv').fadeOut(200);
        $('#form-monitor-inv').fadeOut(200);
        $('#form-mouse-inv').fadeOut(200);
        $('#form-keyboard-inv').fadeOut(200);
        $('#form-headset-inv').fadeOut(200);
        $('.frame1-inv').fadeOut(200);
        $('.frame2-inv').fadeOut(200);
        $('#form-hardphone-inv').fadeIn(200);

        $('#inventory-form').css("height", "700px");
    });
    $('#view-mouse').click(function (){
        $('#form-laptop-inv').fadeOut(200);
        $('#form-cpu-inv').fadeOut(200);
        $('#form-monitor-inv').fadeOut(200);
        $('#form-hardphone-inv').fadeOut(200);
        $('#form-keyboard-inv').fadeOut(200);
        $('#form-headset-inv').fadeOut(200);
        $('.frame1-inv').fadeOut(200);
        $('.frame2-inv').fadeOut(200);
        $('#form-mouse-inv').fadeIn(200);

        $('#inventory-form').css("height", "700px");
    });
    $('#view-keyboard').click(function (){
        $('#form-laptop-inv').fadeOut(200);
        $('#form-cpu-inv').fadeOut(200);
        $('#form-monitor-inv').fadeOut(200);
        $('#form-hardphone-inv').fadeOut(200);
        $('#form-mouse-inv').fadeOut(200);
        $('#form-headset-inv').fadeOut(200);
        $('.frame1-inv').fadeOut(200);
        $('.frame2-inv').fadeOut(200);
        $('#form-keyboard-inv').fadeIn(200);

        $('#inventory-form').css("height", "700px");
    });
    $('#view-headset').click(function (){
        $('#form-laptop-inv').fadeOut(200);
        $('#form-cpu-inv').fadeOut(200);
        $('#form-monitor-inv').fadeOut(200);
        $('#form-hardphone-inv').fadeOut(200);
        $('#form-keyboard-inv').fadeOut(200);
        $('#form-mouse-inv').fadeOut(200);
        $('.frame1-inv').fadeOut(200);
        $('.frame2-inv').fadeOut(200);
        $('#form-headset-inv').fadeIn(200);

        $('#inventory-form').css("height", "700px");
    });


    $('.inv-close').click(function (){
        $('#form-laptop-inv').fadeOut(200);
        $('#form-cpu-inv').fadeOut(200);
        $('#form-monitor-inv').fadeOut(200);
        $('#form-hardphone-inv').fadeOut(200);
        $('#form-keyboard-inv').fadeOut(200);
        $('#form-mouse-inv').fadeOut(200);
        $('#form-headset-inv').fadeOut(200);
        $('.frame1-inv').show();
        $('.frame2-inv').show();

        $('#inventory-form').css("height", "");
    });
    


    $('#show-dashboard').click(function (){
        $('#add-asset').hide();
        $('#update-laptop-inv').fadeOut(300);
        $('#update-monitor-inv').fadeOut(300);
        $('#update-cpu-inv').fadeOut(300);
        $('#update-hardphone-inv').fadeOut(300);
        $('#update-mouse-inv').fadeOut(300);
        $('#update-keyboard-inv').fadeOut(300);
        $('#update-headset-inv').fadeOut(300);
    });
    $('#show-inventory').click(function (){
        $('#add-asset').show();
        $('#update-laptop-inv').fadeOut(300);
        $('#update-monitor-inv').fadeOut(300);
        $('#update-cpu-inv').fadeOut(300);
        $('#update-hardphone-inv').fadeOut(300);
        $('#update-mouse-inv').fadeOut(300);
        $('#update-keyboard-inv').fadeOut(300);
        $('#update-headset-inv').fadeOut(300);
    });
    $('#show-purchase').click(function (){
        $('#add-asset').hide();
        $('#update-laptop-inv').fadeOut(300);
        $('#update-monitor-inv').fadeOut(300);
        $('#update-cpu-inv').fadeOut(300);
        $('#update-hardphone-inv').fadeOut(300);
        $('#update-mouse-inv').fadeOut(300);
        $('#update-keyboard-inv').fadeOut(300);
        $('#update-headset-inv').fadeOut(300);
    });
    $('#show-server').click(function (){
        $('#add-asset').hide();
        $('#update-laptop-inv').fadeOut(300);
        $('#update-monitor-inv').fadeOut(300);
        $('#update-cpu-inv').fadeOut(300);
        $('#update-hardphone-inv').fadeOut(300);
        $('#update-mouse-inv').fadeOut(300);
        $('#update-keyboard-inv').fadeOut(300);
        $('#update-headset-inv').fadeOut(300);
    });
    $('#show-voicedid').click(function (){
        $('#add-asset').hide();
        $('#update-laptop-inv').fadeOut(300);
        $('#update-monitor-inv').fadeOut(300);
        $('#update-cpu-inv').fadeOut(300);
        $('#update-hardphone-inv').fadeOut(300);
        $('#update-mouse-inv').fadeOut(300);
        $('#update-keyboard-inv').fadeOut(300);
        $('#update-headset-inv').fadeOut(300);
    });
    $('#show-ip').click(function (){
        $('#add-asset').hide();
        $('#update-laptop-inv').fadeOut(300);
        $('#update-monitor-inv').fadeOut(300);
        $('#update-cpu-inv').fadeOut(300);
        $('#update-hardphone-inv').fadeOut(300);
        $('#update-mouse-inv').fadeOut(300);
        $('#update-keyboard-inv').fadeOut(300);
        $('#update-headset-inv').fadeOut(300);
    });
    $('#show-pm').click(function (){
        $('#add-asset').hide();
        $('#update-laptop-inv').fadeOut(300);
        $('#update-monitor-inv').fadeOut(300);
        $('#update-cpu-inv').fadeOut(300);
        $('#update-hardphone-inv').fadeOut(300);
        $('#update-mouse-inv').fadeOut(300);
        $('#update-keyboard-inv').fadeOut(300);
        $('#update-headset-inv').fadeOut(300);
    });
    $('#show-changerequest').click(function (){
        $('#add-asset').hide();
        $('#update-laptop-inv').fadeOut(300);
        $('#update-monitor-inv').fadeOut(300);
        $('#update-cpu-inv').fadeOut(300);
        $('#update-hardphone-inv').fadeOut(300);
        $('#update-mouse-inv').fadeOut(300);
        $('#update-keyboard-inv').fadeOut(300);
        $('#update-headset-inv').fadeOut(300);
    });
    $('#show-floormap').click(function (){
        $('#add-asset').hide();
        $('#update-laptop-inv').fadeOut(300);
        $('#update-monitor-inv').fadeOut(300);
        $('#update-cpu-inv').fadeOut(300);
        $('#update-hardphone-inv').fadeOut(300);
        $('#update-mouse-inv').fadeOut(300);
        $('#update-keyboard-inv').fadeOut(300);
        $('#update-headset-inv').fadeOut(300);
    });
    $('#show-report').click(function (){
        $('#add-asset').hide();
        $('#update-laptop-inv').fadeOut(300);
        $('#update-monitor-inv').fadeOut(300);
        $('#update-cpu-inv').fadeOut(300);
        $('#update-hardphone-inv').fadeOut(300);
        $('#update-mouse-inv').fadeOut(300);
        $('#update-keyboard-inv').fadeOut(300);
        $('#update-headset-inv').fadeOut(300);
    });
    $('#add-asset').click(function (){
        $('#add-asset-inv').fadeIn(300);
        $('#update-laptop-inv').fadeOut(300);
        $('#update-monitor-inv').fadeOut(300);
        $('#update-cpu-inv').fadeOut(300);
        $('#update-hardphone-inv').fadeOut(300);
        $('#update-mouse-inv').fadeOut(300);
        $('#update-keyboard-inv').fadeOut(300);
        $('#update-headset-inv').fadeOut(300);
        $('.inventory-frames').css("opacity", "0.3");
        $('body').css("overflow-y", "hidden");
    });
    $('.asset-close').click(function (){
        $('#add-asset-inv').fadeOut(300);
        $('.inventory-frames').css("opacity", "");
        $('body').css("overflow-y", "");
    });
    $('#btn-cancel-asset').click(function (){
        $('#add-asset-inv').fadeOut(300);
        $('.inventory-frames').css("opacity", "");
        $('body').css("overflow-y", "");
    });
    $('.update-close').click(function (){
        $('#update-laptop-inv').fadeOut(300);
        $('#update-monitor-inv').fadeOut(300);
        $('#update-cpu-inv').fadeOut(300);
        $('#update-hardphone-inv').fadeOut(300);
        $('#update-mouse-inv').fadeOut(300);
        $('#update-keyboard-inv').fadeOut(300);
        $('#update-headset-inv').fadeOut(300);
        $('.inventory-frames').css("opacity", "");
        $('body').css("overflow-y", "");
    });
    $('#update-laptop').click(function (){
        $('#update-laptop-inv').fadeIn(300);
        $('#add-asset-inv').fadeOut(300);
        $('.inventory-frames').css("opacity", "0.3");
        $('body').css("overflow-y", "hidden");
    });
    $('#update-cpu').click(function (){
        $('#update-cpu-inv').fadeIn(300);
        $('#add-asset-inv').fadeOut(300);
        $('.inventory-frames').css("opacity", "0.3");
        $('body').css("overflow-y", "hidden");
    });
    $('#update-monitor').click(function (){
        $('#update-monitor-inv').fadeIn(300);
        $('#add-asset-inv').fadeOut(300);
        $('.inventory-frames').css("opacity", "0.3");
        $('body').css("overflow-y", "hidden");
    });
    $('#update-hardphone').click(function (){
        $('#update-hardphone-inv').fadeIn(300);
        $('#add-asset-inv').fadeOut(300);
        $('.inventory-frames').css("opacity", "0.3");
        $('body').css("overflow-y", "hidden");
    });
    $('#update-mouse').click(function (){
        $('#update-mouse-inv').fadeIn(300);
        $('#add-asset-inv').fadeOut(300);
        $('.inventory-frames').css("opacity", "0.3");
        $('body').css("overflow-y", "hidden");
    });
    $('#update-keyboard').click(function (){
        $('#update-keyboard-inv').fadeIn(300);
        $('#add-asset-inv').fadeOut(300);
        $('.inventory-frames').css("opacity", "0.3");
        $('body').css("overflow-y", "hidden");
    });
    $('#update-headset').click(function (){
        $('#update-headset-inv').fadeIn(300);
        $('#add-asset-inv').fadeOut(300);
        $('.inventory-frames').css("opacity", "0.3");
        $('body').css("overflow-y", "hidden");
    });



    $('.btn-cpu .cancel').click(function (){
        $('#update-cpu-inv').fadeOut(300);
        $('.inventory-frames').css("opacity", "");
        $('body').css("overflow-y", "");
    });


    $('.btn-monitor .cancel').click(function (){
        $('#update-monitor-inv').fadeOut(300);
        $('.inventory-frames').css("opacity", "");
        $('body').css("overflow-y", "");
    });

    $('.btn-hardphone .cancel').click(function (){
        $('#update-hardphone-inv').fadeOut(300);
        $('.inventory-frames').css("opacity", "");
        $('body').css("overflow-y", "");
    });
    $('.btn-mouse .cancel').click(function (){
        $('#update-mouse-inv').fadeOut(300);
        $('.inventory-frames').css("opacity", "");
        $('body').css("overflow-y", "");
    });
    $('.btn-keyboard .cancel').click(function (){
        $('#update-keyboard-inv').fadeOut(300);
        $('.inventory-frames').css("opacity", "");
        $('body').css("overflow-y", "");
    });

    $('.btn-headset .cancel').click(function (){
        $('#update-headset-inv').fadeOut(300);
        $('.inventory-frames').css("opacity", "");
        $('body').css("overflow-y", "");
    });

});