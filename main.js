var autoScroll = true;

function scrollToTop(){
    if(window.scrollY > 0){
        window.scroll(0,window.scrollY-15);
        setTimeout("scrollToTop()",2);
    } else {
        autoScroll = false;
    }
}

var old_scrolled=0;
var scrolled = window.scrollY;

function getStarted(){
    if(window.scrollY < window.innerHeight){
        var a = window.scrollY+15;
        if(a>window.innerHeight){
            a = window.innerHeight;
        }
        old_scrolled = scrolled;
        window.scroll(0,a);
        scrolled = window.scrollY;

        if(old_scrolled == scrolled){
            return;
        }
        setTimeout("getStarted()",1);
    }
}