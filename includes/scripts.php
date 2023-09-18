<script src="js/jquery.3.5.1.min.js"></script>
<script src="js/main.js"></script>
<script src="js/countdown-dugem.js"></script>
<script src="js/dugem-lightbox.js"></script>
<script src="js/dugem-carousel.js"></script>
<script type="js/aos.js"></script>
<script src="js/demo1.js"></script>
<script src="js/jquery.smartmenus.min.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/lightgallery.min.js"></script>
<script src="js/aos.js"></script>

<script>
    (function($) {
        "use strict";
        $.fn.sliderResponsive = function(settings) {

            var set = $.extend({
                    slidePause: 5000,
                    fadeSpeed: 800,
                    autoPlay: "on",
                    showArrows: "off",
                    hideDots: "off",
                    hoverZoom: "on",
                    titleBarTop: "off"
                },
                settings
            );

            var $slider = $(this);
            var size = $slider.find("> div").length; //number of slides
            var position = 0; // current position of carousal
            var sliderIntervalID; // used to clear autoplay

            // Add a Dot for each slide
            $slider.append("<ul></ul>");
            $slider.find("> div").each(function() {
                $slider.find("> ul").append('<li></li>');
            });

            // Put .show on the first Slide
            $slider.find("div:first-of-type").addClass("show");

            // Put .showLi on the first dot
            $slider.find("li:first-of-type").addClass("showli")

            //fadeout all items except .show
            $slider.find("> div").not(".show").fadeOut();

            // If Autoplay is set to 'on' than start it
            if (set.autoPlay === "on") {
                startSlider();
            }

            // If showarrows is set to 'on' then don't hide them
            if (set.showArrows === "on") {
                $slider.addClass('showArrows');
            }

            // If hideDots is set to 'on' then hide them
            if (set.hideDots === "on") {
                $slider.addClass('hideDots');
            }

            // If hoverZoom is set to 'off' then stop it
            if (set.hoverZoom === "off") {
                $slider.addClass('hoverZoomOff');
            }

            // If titleBarTop is set to 'on' then move it up
            if (set.titleBarTop === "on") {
                $slider.addClass('titleBarTop');
            }

            // function to start auto play
            function startSlider() {
                sliderIntervalID = setInterval(function() {
                    nextSlide();
                }, set.slidePause);
            }

            // on mouseover stop the autoplay and clear interval
            $slider.mouseover(function() {
                clearInterval(sliderIntervalID);
            });

            // on mouseout starts the autoplay by calling startSlider
            $slider.mouseout(function() {
                startSlider();
            });

            //on right arrow click
            $slider.find("> .right").click(nextSlide)

            //on left arrow click
            $slider.find("> .left").click(prevSlide);

            // Go to next slide
            function nextSlide() {
                position = $slider.find(".show").index() + 1;
                if (position > size - 1) position = 0;
                changeCarousel(position);
            }

            // Go to previous slide
            function prevSlide() {
                position = $slider.find(".show").index() - 1;
                if (position < 0) position = size - 1;
                changeCarousel(position);
            }

            //when user clicks slider button
            $slider.find(" > ul > li").click(function() {
                position = $(this).index();
                changeCarousel($(this).index());
            });

            //this changes the image and button selection
            function changeCarousel() {
                $slider.find(".show").removeClass("show").fadeOut();
                $slider
                    .find("> div")
                    .eq(position)
                    .fadeIn(set.fadeSpeed)
                    .addClass("show");
                // The Dots
                $slider.find("> ul").find(".showli").removeClass("showli");
                $slider.find("> ul > li").eq(position).addClass("showli");
            }

            return $slider;
        };
    })(jQuery);



    //////////////////////////////////////////////
    // Activate each slider - change options
    //////////////////////////////////////////////
    $(document).ready(function() {

        $("#slider1").sliderResponsive({
            // Using default everything
            // slidePause: 5000,
            // fadeSpeed: 800,
            // autoPlay: "on",
            // showArrows: "off", 
            // hideDots: "off", 
            // hoverZoom: "on", 
            // titleBarTop: "off"
        });

        $("#slider2").sliderResponsive({
            fadeSpeed: 300,
            autoPlay: "off",
            showArrows: "on",
            hideDots: "on"
        });

        $("#slider3").sliderResponsive({
            hoverZoom: "off",
            hideDots: "on"
        });

    });
</script>
<script>
    $(".vpop").on('click', function(e) {
  e.preventDefault();
  $("#video-popup-overlay,#video-popup-iframe-container,#video-popup-container,#video-popup-close").show();
  
  var srchref='',autoplay='',id=$(this).data('id');
  if($(this).data('type') == 'vimeo') var srchref="//player.vimeo.com/video/";
  else if($(this).data('type') == 'youtube') var srchref="https://www.youtube.com/embed/";
  
  if($(this).data('autoplay') == true) autoplay = '?autoplay=1';
  
  $("#video-popup-iframe").attr('src', srchref+id+autoplay);
  
  $("#video-popup-iframe").on('load', function() {
    $("#video-popup-container").show();
  });
});

$("#video-popup-close, #video-popup-overlay").on('click', function(e) {
  $("#video-popup-iframe-container,#video-popup-container,#video-popup-close,#video-popup-overlay").hide();
  $("#video-popup-iframe").attr('src', '');
});

/* 
minified

$(".vpop").on("click",function(o){o.preventDefault(),$("#video-popup-iframe-container,#video-popup-container,#video-popup-close").show();var p="",e="",i=$(this).data("id");if("vimeo"==$(this).data("type"))var p="//player.vimeo.com/video/";else if("youtube"==$(this).data("type"))var p="https://www.youtube.com/embed/";1==$(this).data("autoplay")&&(e="?autoplay=1"),$("#video-popup-iframe").attr("src",p+i+e),$("#video-popup-iframe").on("load",function(){$("#video-popup-overlay, #video-popup-container").show()})}),$("#video-popup-close, #video-popup-overlay").on("click",function(o){$("#video-popup-iframe-container,#video-popup-container,#video-popup-close").hide(),$("#video-popup-iframe").attr("src","")});
*/
</script>