$(document).ready(function(){
    $('#frame3-changereq').hide();

    $('#btn-add-changereq').click(function (){ 
        $('#frame2-changereq').show();
        $('#frame3-changereq').hide();

        $('.btn-add-changereq button').css("background-color", "#f26f21");
        $('#btn-add-changereq button').css("color", "#fff");

        $('#btn-view-changereq button').css("background-color", "#E8E8E8");
        $('#btn-view-changereq button').css("color", "#666666");
    });

    $('#btn-view-changereq').click(function (){ 
        $('#frame2-changereq').hide();
        $('#frame3-changereq').show();

        $('.btn-view-changereq button').css("background-color", "#f26f21");
        $('#btn-view-changereq button').css("color", "#fff");

        $('#btn-add-changereq button').css("background-color", "#E8E8E8");
        $('#btn-add-changereq button').css("color", "#666666");
    });
});
