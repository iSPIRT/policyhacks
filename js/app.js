
$(document).ready(function(){
// Menu open-close JS

    $("#hamburger").click(function(event) {
    $("#top-navigation").toggleClass("open");
    $("body").toggleClass("no-scroll");
    });


  $(document).foundation();

});