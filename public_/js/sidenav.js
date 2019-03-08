$(document).ready(function(){
   
    $('#inventory-form').hide();
    $('#purchase-form').hide();
    $('#server-form').hide();
    $('#voicedid-form').hide();
    $('#ip-form').hide();
    $('#pm-form').hide();
    $('#changerequest-form').hide();
    $('#floormap-form').hide();
    $('#report-form').hide();

        $('#show-dashboard').click(function (){
            $('#dashboard-form').show();
            $('#inventory-form').hide();
            $('#purchase-form').hide();
            $('#server-form').hide();
            $('#voicedid-form').hide();
            $('#ip-form').hide();
            $('#pm-form').hide();
            $('#changerequest-form').hide();
            $('#floormap-form').hide();
            $('#report-form').hide();
            $('.location-info').slideUp();
            $('.rectangle').slideUp();
            $('.user-info').slideUp();
            $('.rectangle1').slideUp();
            $('.location').hide();
            $('.rectangle1').css("margin-left", "");
            $('.inventory-frames').css("opacity", "");
            $('body').css("overflow-y", "");
        $(document).ready(function(){
            $('#navbar-left').html("DASHBOARD");
            $('title').html("iOPEX | Dashboard");
         });
        });

        $('#show-inventory').click(function (){
            $('#inventory-form').show();
            $('.frame1-inv').show();
            $('.frame2-inv').show();
            $('.location').show();
            $('.table-form-inv').hide();
            $('#dashboard-form').hide();
            $('#purchase-form').hide();
            $('#server-form').hide();
            $('#voicedid-form').hide();
            $('#ip-form').hide();
            $('#pm-form').hide();
            $('#changerequest-form').hide();
            $('#floormap-form').hide();
            $('#report-form').hide();
            $('.location-info').slideUp();
            $('.rectangle').slideUp();
            $('.user-info').slideUp();
            $('.rectangle1').slideUp();

            $('.rectangle1').css("margin-left", "88.3%");
      
            $('.inventory-frames').css("opacity", "");
            $('body').css("overflow-y", "");
        $(document).ready(function(){
            $('#navbar-left').html("INVENTORY");
            $('title').html("iOPEX | Inventory");
         
         });
        });

        $('#show-purchase').click(function (){
            $('#purchase-form').show();
            $('.location').show();
            $('#inventory-form').hide();
            $('#dashboard-form').hide();
            $('#server-form').hide();
            $('#voicedid-form').hide();
            $('#ip-form').hide();
            $('#pm-form').hide();
            $('#changerequest-form').hide();
            $('#floormap-form').hide();
            $('#report-form').hide();
            $('.location-info').slideUp();
            $('.rectangle').slideUp();
            $('.user-info').slideUp();
            $('.rectangle1').slideUp();

            $('.rectangle1').css("margin-left", "88.3%");
            $('.inventory-frames').css("opacity", "");
            $('body').css("overflow-y", "");
        $(document).ready(function(){
            $('#navbar-left').html("PURCHASE");
            $('title').html("iOPEX | Purchase");
         });
        });

        $('#show-server').click(function (){
            $('#server-form').show();
            $('.location').show();
            $('#purchase-form').hide();
            $('#inventory-form').hide();
            $('#dashboard-form').hide();
            $('#voicedid-form').hide();
            $('#ip-form').hide();
            $('#pm-form').hide();
            $('#changerequest-form').hide();
            $('#floormap-form').hide();
            $('#report-form').hide();
            $('.location-info').slideUp();
            $('.rectangle').slideUp();
            $('.user-info').slideUp();
            $('.rectangle1').slideUp();

            $('.rectangle1').css("margin-left", "88.3%");
            $('.inventory-frames').css("opacity", "");
            $('body').css("overflow-y", "");
        $(document).ready(function(){
            $('#navbar-left').html("SERVER");
            $('title').html("iOPEX | Server");
         });
        });

        $('#show-voicedid').click(function (){
            $('#voicedid-form').show();
            $('.location').show();
            $('#server-form').hide();
            $('#purchase-form').hide();
            $('#inventory-form').hide();
            $('#dashboard-form').hide();
            $('#ip-form').hide();
            $('#pm-form').hide();
            $('#changerequest-form').hide();
            $('#floormap-form').hide();
            $('#report-form').hide();
            $('.location-info').slideUp();
            $('.rectangle').slideUp();
            $('.user-info').slideUp();
            $('.rectangle1').slideUp();

            $('.rectangle1').css("margin-left", "88.3%");
            $('.inventory-frames').css("opacity", "");
            $('body').css("overflow-y", "");
        $(document).ready(function(){
            $('#navbar-left').html("VOICE DID");
            $('title').html("iOPEX | Voice DID");
         });
        });

        $('#show-ip').click(function (){
            $('#ip-form').show();
            $('.location').show();
            $('#voicedid-form').hide();
            $('#server-form').hide();
            $('#purchase-form').hide();
            $('#inventory-form').hide();
            $('#dashboard-form').hide();
            $('#pm-form').hide();
            $('#changerequest-form').hide();
            $('#floormap-form').hide();
            $('#report-form').hide();
            $('.location-info').slideUp();
            $('.rectangle').slideUp();
            $('.user-info').slideUp();
            $('.rectangle1').slideUp();

            $('.rectangle1').css("margin-left", "88.3%");
            $('.inventory-frames').css("opacity", "");
            $('body').css("overflow-y", "");
        $(document).ready(function(){
            $('#navbar-left').html("IP ADDRESS");
            $('title').html("iOPEX | IP Address");
         });
        });

        $('#show-pm').click(function (){
            $('#pm-form').show();
            $('.location').show();
            $('#ip-form').hide();
            $('#voicedid-form').hide();
            $('#server-form').hide();
            $('#purchase-form').hide();
            $('#inventory-form').hide();
            $('#dashboard-form').hide();
            $('#changerequest-form').hide();
            $('#floormap-form').hide();
            $('#report-form').hide();
            $('.location-info').slideUp();
            $('.rectangle').slideUp();
            $('.user-info').slideUp();
            $('.rectangle1').slideUp();

            $('.rectangle1').css("margin-left", "88.3%");
            $('.inventory-frames').css("opacity", "");
            $('body').css("overflow-y", "");
        $(document).ready(function(){
            $('#navbar-left').html("PREVENTIVE MAINTENANCE");
            $('title').html("iOPEX | Preventive Maintenace");
         });
        });

        $('#show-changerequest').click(function (){
            $('#changerequest-form').show();
            $('.location').show();
            $('#pm-form').hide();
            $('#ip-form').hide();
            $('#voicedid-form').hide();
            $('#server-form').hide();
            $('#purchase-form').hide();
            $('#inventory-form').hide();
            $('#dashboard-form').hide();
            $('#floormap-form').hide();
            $('#report-form').hide();
            $('.location-info').slideUp();
            $('.rectangle').slideUp();
            $('.user-info').slideUp();
            $('.rectangle1').slideUp();

            $('.rectangle1').css("margin-left", "88.3%");
            $('.inventory-frames').css("opacity", "");
            $('body').css("overflow-y", "");
        $(document).ready(function(){
            $('#navbar-left').html("CHANGE REQUEST");
            $('title').html("iOPEX | Change Request");
         });
        });

        $('#show-floormap').click(function (){
            $('#floormap-form').show();
            $('.location').show();
            $('#changerequest-form').hide();
            $('#pm-form').hide();
            $('#ip-form').hide();
            $('#voicedid-form').hide();
            $('#server-form').hide();
            $('#purchase-form').hide();
            $('#inventory-form').hide();
            $('#dashboard-form').hide();
            $('#report-form').hide();
            $('.location-info').slideUp();
            $('.rectangle').slideUp();
            $('.user-info').slideUp();
            $('.rectangle1').slideUp();

            $('.location').hide();
            $('.rectangle1').css("margin-left", "88.3%");
            $('.inventory-frames').css("opacity", "");
            $('body').css("overflow-y", "");
        $(document).ready(function(){
            $('#navbar-left').html("FLOOR MAP");
            $('title').html("iOPEX | Floor Map");
         });
        });


        $('#show-report').click(function (){
            $('#report-form').show();
            $('.location').show();
            $('#floormap-form').hide();
            $('#changerequest-form').hide();
            $('#pm-form').hide();
            $('#ip-form').hide();
            $('#voicedid-form').hide();
            $('#server-form').hide();
            $('#purchase-form').hide();
            $('#inventory-form').hide();
            $('#dashboard-form').hide();
            $('.location-info').slideUp();
            $('.rectangle').slideUp();
            $('.user-info').slideUp();
            $('.rectangle1').slideUp();
            
            $('.rectangle1').css("margin-left", "88.3%");
            $('.inventory-frames').css("opacity", "");
            $('body').css("overflow-y", "");
        $(document).ready(function(){
            $('#navbar-left').html("REPORTS");
            $('title').html("iOPEX | Reports");
         });
        });
   
    });