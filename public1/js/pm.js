$(document).ready(function(){
    $('#frame7-pm').hide();

    $('#btn-add-pm').click(function (){
        $('.frame2-pm').show();
        $('.frame3-pm').show();
        $('.frame4-pm').show(); 
        $('.frame5-pm').show();
        $('.frame6-pm').show();
        $('#frame7-pm').hide();

        $('.btn-add-pm button').css("background-color", "#f26f21");
        $('#btn-add-pm button').css("color", "#fff");

        $('#btn-view-pm button').css("background-color", "#E8E8E8");
        $('#btn-view-pm button').css("color", "#666666");
        $('#pm-form').css("height", "");
    });

    $('#btn-view-pm').click(function (){ 
        $('.frame2-pm').hide();
        $('.frame3-pm').hide();
        $('.frame4-pm').hide(); 
        $('.frame5-pm').hide();
        $('.frame6-pm').hide();
        $('#frame7-pm').show();

        $('.btn-view-pm button').css("background-color", "#f26f21");
        $('#btn-view-pm button').css("color", "#fff");

        $('#btn-add-pm button').css("background-color", "#E8E8E8");
        $('#btn-add-pm button').css("color", "#666666");
        $('#pm-form').css("height", "750px");

    });


});
