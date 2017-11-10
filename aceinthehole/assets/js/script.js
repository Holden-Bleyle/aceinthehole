function contentCheck(){

var w = $(window).width();

if (w < 750){
    $(".togglablecontent").show();
} else{
    $(".togglablecontent").hide();
}
}