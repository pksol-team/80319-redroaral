$(document).ready(function(){
    $('#frame3-purch').hide();

    $('#btn-add-purch').click(function (){ 
        $('#frame2-purch').show();
        $('#frame3-purch').hide();

        $('.btn-add-purch button').css("background-color", "#f26f21");
        $('#btn-add-purch button').css("color", "#fff");

        $('#btn-view-purch button').css("background-color", "#E8E8E8");
        $('#btn-view-purch button').css("color", "#666666");
    });

    $('#btn-view-purch').click(function (){ 
        $('#frame2-purch').hide();
        $('#frame3-purch').show();

        $('.btn-view-purch button').css("background-color", "#f26f21");
        $('#btn-view-purch button').css("color", "#fff");

        $('#btn-add-purch button').css("background-color", "#E8E8E8");
        $('#btn-add-purch button').css("color", "#666666");
    });
});
