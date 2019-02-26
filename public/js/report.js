$(document).ready(function(){
    $('#show-inventory-report').hide();
    $('#show-purchase-report').hide();
    $('#show-server-report').hide();
    $('#show-voicedid-report').hide();
    $('#show-ip-report').hide();
    $('#show-pm-report').hide();
    $('#show-changereq-report').hide();
    $('#show-iopex-cont').show();
   
    

    $('#btn-inv-report').click(function (){ 
        $('#show-inventory-report').show();
        $('#show-purchase-report').hide();
        $('#show-server-report').hide();
        $('#show-voicedid-report').hide();
        $('#show-ip-report').hide();
        $('#show-pm-report').hide();
        $('#show-changereq-report').hide();
        $('#show-iopex-cont').hide();

        $('#btn-inv-report').css("background-color", "#f26f21");
        $('#btn-inv-report button').css("color", "#fff");
        $('#btn-purch-report').css("background-color", "#E8E8E8");
        $('#btn-purch-report button').css("color", "#666666");
        $('#btn-server-report').css("background-color", "#E8E8E8");
        $('#btn-server-report button').css("color", "#666666");
        $('#btn-voicedid-report').css("background-color", "#E8E8E8");
        $('#btn-voicedid-report button').css("color", "#666666");
        $('#btn-ip-report').css("background-color", "#E8E8E8");
        $('#btn-ip-report button').css("color", "#666666");
        $('#btn-pm-report').css("background-color", "#E8E8E8");
        $('#btn-pm-report button').css("color", "#666666");
        $('#btn-changereq-report').css("background-color", "#E8E8E8");
        $('#btn-changereq-report button').css("color", "#666666");
    });


    $('#btn-purch-report').click(function (){ 
        $('#show-inventory-report').hide();
        $('#show-purchase-report').show();
        $('#show-server-report').hide();
        $('#show-voicedid-report').hide();
        $('#show-ip-report').hide();
        $('#show-pm-report').hide();
        $('#show-changereq-report').hide();
        $('#show-iopex-cont').hide();

        $('#btn-inv-report').css("background-color", "#E8E8E8");
        $('#btn-inv-report button').css("color", "#666666");
        $('#btn-purch-report').css("background-color", "#f26f21");
        $('#btn-purch-report button').css("color", "#fff");
        $('#btn-server-report').css("background-color", "#E8E8E8");
        $('#btn-server-report button').css("color", "#666666");
        $('#btn-voicedid-report').css("background-color", "#E8E8E8");
        $('#btn-voicedid-report button').css("color", "#666666");
        $('#btn-ip-report').css("background-color", "#E8E8E8");
        $('#btn-ip-report button').css("color", "#666666");
        $('#btn-pm-report').css("background-color", "#E8E8E8");
        $('#btn-pm-report button').css("color", "#666666");
        $('#btn-changereq-report').css("background-color", "#E8E8E8");
        $('#btn-changereq-report button').css("color", "#666666");
    });

    $('#btn-server-report').click(function (){ 
        $('#show-inventory-report').hide();
        $('#show-purchase-report').hide();
        $('#show-server-report').show();
        $('#show-voicedid-report').hide();
        $('#show-ip-report').hide();
        $('#show-pm-report').hide();
        $('#show-changereq-report').hide();
        $('#show-iopex-cont').hide();

        $('#btn-inv-report').css("background-color", "#E8E8E8");
        $('#btn-inv-report button').css("color", "#666666");
        $('#btn-purch-report').css("background-color", "#E8E8E8");
        $('#btn-purch-report button').css("color", "#666666");
        $('#btn-server-report').css("background-color", "#f26f21");
        $('#btn-server-report button').css("color", "#fff");
        $('#btn-voicedid-report').css("background-color", "#E8E8E8");
        $('#btn-voicedid-report button').css("color", "#666666");
        $('#btn-ip-report').css("background-color", "#E8E8E8");
        $('#btn-ip-report button').css("color", "#666666");
        $('#btn-pm-report').css("background-color", "#E8E8E8");
        $('#btn-pm-report button').css("color", "#666666");
        $('#btn-changereq-report').css("background-color", "#E8E8E8");
        $('#btn-changereq-report button').css("color", "#666666");
    });

    $('#btn-voicedid-report').click(function (){ 
        $('#show-inventory-report').hide();
        $('#show-purchase-report').hide();
        $('#show-server-report').hide();
        $('#show-voicedid-report').show();
        $('#show-ip-report').hide();
        $('#show-pm-report').hide();
        $('#show-changereq-report').hide();
        $('#show-iopex-cont').hide();

        $('#btn-inv-report').css("background-color", "#E8E8E8");
        $('#btn-inv-report button').css("color", "#666666");
        $('#btn-purch-report').css("background-color", "#E8E8E8");
        $('#btn-purch-report button').css("color", "#666666");
        $('#btn-server-report').css("background-color", "#E8E8E8");
        $('#btn-server-report button').css("color", "#666666");
        $('#btn-voicedid-report').css("background-color", "#f26f21");
        $('#btn-voicedid-report button').css("color", "#fff");
        $('#btn-ip-report').css("background-color", "#E8E8E8");
        $('#btn-ip-report button').css("color", "#666666");
        $('#btn-pm-report').css("background-color", "#E8E8E8");
        $('#btn-pm-report button').css("color", "#666666");
        $('#btn-changereq-report').css("background-color", "#E8E8E8");
        $('#btn-changereq-report button').css("color", "#666666");
    });

    $('#btn-ip-report').click(function (){ 
        $('#show-inventory-report').hide();
        $('#show-purchase-report').hide();
        $('#show-server-report').hide();
        $('#show-voicedid-report').hide();
        $('#show-ip-report').show();
        $('#show-pm-report').hide();
        $('#show-changereq-report').hide();
        $('#show-iopex-cont').hide();

        $('#btn-inv-report').css("background-color", "#E8E8E8");
        $('#btn-inv-report button').css("color", "#666666");
        $('#btn-purch-report').css("background-color", "#E8E8E8");
        $('#btn-purch-report button').css("color", "#666666");
        $('#btn-server-report').css("background-color", "#E8E8E8");
        $('#btn-server-report button').css("color", "#666666");
        $('#btn-voicedid-report').css("background-color", "#E8E8E8");
        $('#btn-voicedid-report button').css("color", "#666666");
        $('#btn-ip-report').css("background-color", "#f26f21");
        $('#btn-ip-report button').css("color", "#fff");
        $('#btn-pm-report').css("background-color", "#E8E8E8");
        $('#btn-pm-report button').css("color", "#666666");
        $('#btn-changereq-report').css("background-color", "#E8E8E8");
        $('#btn-changereq-report button').css("color", "#666666");
    });

    $('#btn-pm-report').click(function (){ 
        $('#show-inventory-report').hide();
        $('#show-purchase-report').hide();
        $('#show-server-report').hide();
        $('#show-voicedid-report').hide();
        $('#show-ip-report').hide();
        $('#show-pm-report').show();
        $('#show-changereq-report').hide();
        $('#show-iopex-cont').hide();

        $('#btn-inv-report').css("background-color", "#E8E8E8");
        $('#btn-inv-report button').css("color", "#666666");
        $('#btn-purch-report').css("background-color", "#E8E8E8");
        $('#btn-purch-report button').css("color", "#666666");
        $('#btn-server-report').css("background-color", "#E8E8E8");
        $('#btn-server-report button').css("color", "#666666");
        $('#btn-voicedid-report').css("background-color", "#E8E8E8");
        $('#btn-voicedid-report button').css("color", "#666666");
        $('#btn-ip-report').css("background-color", "#E8E8E8");
        $('#btn-ip-report button').css("color", "#666666");
        $('#btn-pm-report').css("background-color", "#f26f21");
        $('#btn-pm-report button').css("color", "#fff");
        $('#btn-changereq-report').css("background-color", "#E8E8E8");
        $('#btn-changereq-report button').css("color", "#666666");
    });
    $('#btn-changereq-report').click(function (){ 
        $('#show-inventory-report').hide();
        $('#show-purchase-report').hide();
        $('#show-server-report').hide();
        $('#show-voicedid-report').hide();
        $('#show-ip-report').hide();
        $('#show-pm-report').hide();
        $('#show-changereq-report').show();
        $('#show-iopex-cont').hide();

        $('#btn-inv-report').css("background-color", "#E8E8E8");
        $('#btn-inv-report button').css("color", "#666666");
        $('#btn-purch-report').css("background-color", "#E8E8E8");
        $('#btn-purch-report button').css("color", "#666666");
        $('#btn-server-report').css("background-color", "#E8E8E8");
        $('#btn-server-report button').css("color", "#666666");
        $('#btn-voicedid-report').css("background-color", "#E8E8E8");
        $('#btn-voicedid-report button').css("color", "#666666");
        $('#btn-ip-report').css("background-color", "#E8E8E8");
        $('#btn-ip-report button').css("color", "#666666");
        $('#btn-pm-report').css("background-color", "#E8E8E8");
        $('#btn-pm-report button').css("color", "#666666");
        $('#btn-changereq-report').css("background-color", "#f26f21");
        $('#btn-changereq-report button').css("color", "#fff");
    });


});