/**
 * Created by sysadmin on 16.05.2017.
 */

$(document).ready(function() {

    /**
     Кнопка наверх на jQuery.
     */

    var
        speed = 500,
        $scrollTop = $('<a href="#" class="scrollTop hidden-xs"><i class="fa fa-angle-up hidden-xs" aria-hidden="true"></i></a>').appendTo('body');

    $scrollTop.click(function(e){
        e.preventDefault();

        $( 'html:not(:animated),body:not(:animated)' ).animate({ scrollTop: 0}, speed );
    });

    //появление
    function show_scrollTop(){
        ( $(window).scrollTop() > 700 ) ? $scrollTop.stop().fadeIn(600) : $scrollTop.stop().fadeOut(600);
    }
    $(window).scroll( function(){ show_scrollTop(); } );
    show_scrollTop();

});