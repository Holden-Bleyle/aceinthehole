function contentCheck(){

var w = $(window).width();

if (w < 750){
    $(".togglablecontent").show();
    $(".togglablecontent2").hide();
} else{
    $(".togglablecontent").hide();
    $(".togglablecontent2").show();
}
}

