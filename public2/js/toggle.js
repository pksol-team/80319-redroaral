$(document).ready(function(){
    $('.toggle-forward button').hide();


    $('.toggle-backward button').click(function (){
            $('.sidebar-cont label').hide();
            $('.toggle-backward button').hide();
            $('.toggle-forward button').show();
        $(document).ready(function(){
            $('#sidebar').css("width","5%");
            $('.usa').css("width","95%");
            $('.usa').css("margin-left","-13%");
            $('.sidebar-cont img').css("width","50%");
            $('.sidebar-cont img').css("margin-left","25%");
            $('.sidebar-cont').css("margin-top","22%");
            $('.sidebar-cont').css("margin-bottom","22%");
            $('.img-iopex img').attr("src","resources/logo/logogo.png");
            $('.img-iopex img').css("width","60%");
            $('.img-iopex img').css("margin-left","20%");
            $('.img-iopex img').css("margin-top","-10%");
            $('.column-right').css("left","5%");



        });
        });

        $('.toggle-forward button').click(function (){
            $('.sidebar-cont label').show();
            $('.toggle-forward button').hide();
            $('.toggle-backward button').show();
           
        $(document).ready(function(){
            $('#sidebar').css("width","");
            $('.usa').css("width","");
            $('.usa').css("margin-left","");
            $('.sidebar-cont img').css("width","");
            $('.sidebar-cont img').css("margin-left","");
            $('.sidebar-cont').css("margin-top","");
            $('.sidebar-cont').css("margin-bottom","");
            $('.img-iopex img').attr("src","resources/logo/logo.png");
            $('.img-iopex img').css("width","");
            $('.img-iopex img').css("margin-left","");
            $('.img-iopex img').css("margin-top","");
            $('.column-right').css("left","");
        });
        });
});