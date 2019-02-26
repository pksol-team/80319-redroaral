$(document).ready(function () {
    var currZoom = $(".second-body-map").css("zoom");
    if (currZoom == 'normal') currZoom = 1; // For IE

    $(".zoom-in").click(function () {
        currZoom *= 1.2;
        $(".second-body-map").css("zoom", currZoom);
        $(".second-body-map").css("-moz-transform", "Scale(" + currZoom + ")");
        $(".second-body-map").css("-moz-transform-origin", "0 0");

    });
    $(".zoom-off").click(function () {
    $(".second-body-map").css("zoom", .60);
    $(".second-body-map").css("-moz-transform", "Scale(" + currZoom + ")");
    $(".second-body-map").css("-moz-transform-origin", "0 0");


    });
    $(".zoom-out").click(function () {
        currZoom *= .8;
      $(".second-body-map").css("zoom", currZoom);
      $(".second-body-map").css("-moz-transform", "Scale(" + currZoom + ")");
      $(".second-body-map").css("-moz-transform-origin", "0 0");
   
    });
});