function scrollToElement(sel) {
    // debugger;
    if($(sel).length===0) {
        console.error("Error: No such element found.");
        return;
    }
    $('html, body').animate({
        scrollTop: $(sel).offset().top
    }, 500);
} // scrollTo

$(()=>{
    $(window).scroll(function() {
        // console.log("Scrolling");
        $("#shortcut-panels").fadeIn(1000);
        clearTimeout($.data(this, 'scrollTimer'));
        $.data(this, 'scrollTimer', setTimeout(function() {
            // console.log("Haven't scrolled in 1000ms!");
            if(!$(window).data("shortcuts-is-opened"))
                $("#shortcut-panels").fadeOut(500);
        }, 1000));
    });
});