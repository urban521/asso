/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.scss');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
 const $ = require('jquery');

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');

$(document).ready(function(){
    $(".menu-icon").on("click",function() {
        $("nav ul").toggleClass("showing");
    });

    $(window).on("scroll",function(){
        if ($(window).scrollTop()) {
            $('nav').addClass('darkblue');
            $('a').removeClass('blueman');
        } else {
            $('nav').removeClass('darkblue');
            $('a').addClass('blueman');
        }
    });
});