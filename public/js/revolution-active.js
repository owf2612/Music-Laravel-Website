"use strict";

var tpj = jQuery;
var revapi1052;
tpj(document).ready(function () {
  if (tpj("#rev_slider_1052_1").revolution == undefined) {
    revslider_showDoubleJqueryError("#rev_slider_1052_1");
  } else {
    revapi1052 = tpj("#rev_slider_1052_1")
      .show()
      .revolution({
        sliderType: "fullscreen",
        jsFileLocation: "js/revolution",
        sliderLayout: "fullscreen",
        dottedOverlay: "none",
        delay: 6000,
        navigation: {
          keyboardNavigation: "on",
          keyboard_direction: "vertical",
          mouseScrollNavigation: "off",
          mouseScrollReverse: "default",
          onHoverStop: "off",
          hide_onleave: true,
          hide_delay: 200,
          touch: {
            touchenabled: "off",
            swipe_threshold: 75,
            swipe_min_touches: 1,
            swipe_direction: "vertical",
            drag_block_vertical: false,
          },
          arrows: {
            enable: true,
            style: "uranus",
          },
        },
        responsiveLevels: [1240, 1025, 778, 480],
        visibilityLevels: [1240, 1025, 778, 480],
        gridwidth: [1400, 1240, 778, 480],
        gridheight: [600, 500, 400, 300],
        lazyType: "none",
        shadow: 0,
        spinner: "on",
        stopLoop: "on",
        stopAfterLoops: -1,
        stopAtSlide: -1,
        shuffle: "off",
        autoHeight: "off",
        fullScreenAutoWidth: "off",
        fullScreenAlignForce: "off",
        fullScreenOffsetContainer: "",
        fullScreenOffset: "",
        disableProgressBar: "on",
        hideThumbsOnMobile: "off",
        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        debugMode: false,
        fallbacks: {
          simplifyAll: "on",
          nextSlideOnWindowFocus: "off",
          disableFocusListener: false,
        },
      });
  }
}); /*ready*/
