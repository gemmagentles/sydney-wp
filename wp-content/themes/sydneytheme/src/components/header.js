(function ($, root, undefined) {

    $(function () {

        'use strict';
});

$(document).ready(function(){
    $(".nav__hamburger-icon").click(function(){
        $(".nav__hamburger-icon").toggleClass("nav__open");
        console.log('clicked');
    });
});

})(jQuery, this);