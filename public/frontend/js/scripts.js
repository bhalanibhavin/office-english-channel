/*jslint
    this
*/
(function($) {
    "use strict"; // Start of use strict
    window.App = {};

    // makes sure the whole site is loaded and hides preloader
    $(window).on("load", function(e) {
        // will fade out the whole DIV that covers the website.
        $(".preloader").fadeOut("slow");
    });

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $(document).on("click", "a.page-scroll", function(event) {
        var $anchor = $(this);
        $("html, body").stop().animate({
            scrollTop: ($($anchor.attr("href")).offset().top - 0)
        }, 1250, "easeInOutExpo");
        event.preventDefault();
    });

    // Closes the Responsive Menu on Menu Item Click
    $(".nav ul li a").on("click", function() {
        $(".hamburger-toggle:visible").click();
    });

    // Offset for Main Navigation
    $("#mainMenu").affix({
        offset: {
            top: 50
        }
    });

    // Highlight the top nav as scrolling occurs
    $("body").scrollspy({
        target: ".nav-container",
        offset: 50
    });

    //  Parallax Effect background
    var parallax = document.querySelectorAll(".parallax .bg-image-placer");
    var speed = 0.5;
    window.onscroll = function() {
        [].slice.call(parallax).forEach(function(el, i) {
            var windowYOffset = window.pageYOffset;
            var elBackgrounPos = "translate3d(0px," + (windowYOffset * speed) + "px, 0px)";
            //el.style.backgroundPosition = elBackgrounPos;
            el.style.transform = elBackgrounPos;

        });
    };


    //image to Background image Settings
    $(".bg-image-placer").each(function() {
        var image = $(this).children("img").attr("src");
        $(this).css("background", 'url("' + image + '")').css("background-position", "initial").css("opacity", "1");
    })


    // Carousel Intialization===
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    // Data-toggle for responsive Menu
    $("[data-toggle-class]").each(function() {
        var element = $(this);
        var classData = element.attr("data-toggle-class").split("|");
        $(classData).each(function() {
            var item = element,
                classArray = [],
                classArray = this.split(";"),
                toggleClass = "",
                toggleItem = "";

            if (classArray.length === 2) {
                toggleItem = classArray[0];
                toggleClass = classArray[1];
                $(item).on("click", function() {
                    if (!item.hasClass("toggled-class")) {
                        item.toggleClass("toggled-class");
                    } else {
                        item.removeClass("toggled-class");
                    }
                    $(toggleItem).toggleClass(toggleClass);
                    return false;
                });
            }
        });
    });

    //Parallax banner
    App.parallaxs = (function() {
        return {
            obj: null
        }
    })();
    if (document.getElementById("main_slide_3") != undefined) {
        App.parallaxs.obj = new Parallax(document.getElementById("main_slide_3"));
    }

})(jQuery); // End of use strict