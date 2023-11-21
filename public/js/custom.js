jQuery(document).ready(function () {
  "use strict";
  /*** =====================================
   * Mega Menu
   * =====================================***/
  (function ($) {
    $.fn.menumaker = function (options) {
      var cssmenu = $(this),
        settings = $.extend(
          {
            format: "dropdown",
            sticky: false,
          },
          options
        );
      return this.each(function () {
        $(this)
          .find(".button")
          .on("click", function () {
            $(this).toggleClass("menu-opened");
            var mainmenu = $(this).next("ul");
            if (mainmenu.hasClass("open")) {
              mainmenu.slideToggle().removeClass("open");
            } else {
              mainmenu.slideToggle().addClass("open");
              if (settings.format === "dropdown") {
                mainmenu.find("ul").show();
              }
            }
          });
        cssmenu.find("li ul").parent().addClass("has-sub");
        var multiTg;
        multiTg = function () {
          cssmenu
            .find(".has-sub")
            .prepend('<span class="submenu-button"></span>');
          cssmenu.find(".submenu-button").on("click", function () {
            $(this).toggleClass("submenu-opened");
            if ($(this).siblings("ul").hasClass("open")) {
              $(this).siblings("ul").removeClass("open").slideToggle();
            } else {
              $(this).siblings("ul").addClass("open").slideToggle();
            }
          });
        };
        if (settings.format === "multitoggle") multiTg();
        else cssmenu.addClass("dropdown");
        if (settings.sticky === true) cssmenu.css("position", "fixed");
        var resizeFix;
        resizeFix = function () {
          var mediasize = 1000;
          if ($(window).width() > mediasize) {
            cssmenu.find("ul").show();
          }
          if ($(window).width() <= mediasize) {
            cssmenu.find("ul").hide().removeClass("open");
          }
        };
        resizeFix();
        return $(window).on("resize", resizeFix);
      });
    };
  })(jQuery);
  $("#easy-menu").menumaker({
    format: "multitoggle",
  });
  /*** =====================================
   * 	Dropdown Menu
   * =====================================***/
  $(".has-submenu").click(function (e) {
    e.preventDefault();

    var $this = $(this);

    if ($this.next().hasClass("menu-show")) {
      $this.next().removeClass("menu-show");
      $this.next().slideUp(350);
    } else {
      $this.parent().parent().find("li .menu-inner").removeClass("menu-show");
      $this.parent().parent().find("li .menu-inner").slideUp(350);
      $this.next().toggleClass("menu-show");
      $this.next().slideToggle(350);
    }
  });

  $(".mobile-menu-close i").on("click", function () {
    $(".mobile-background-nav").removeClass("in");
  });

  $(".mobile-logo-search-humbarger .humbarger-button i").on(
    "click",
    function () {
      $(".mobile-background-nav").toggleClass("in");
    }
  );

  var windowHeight = $(window).height();
  $(".mobile-background-nav .mobile-inner").css({ height: windowHeight });
  $(window).on("resize", function () {
    var windowHeight = $(window).height();
    var windowWidth = $(window).width();
    if (windowWidth < 991) {
      $(".mobile-background-nav .mobile-inner").css({ height: windowHeight });
    }
  });
  /*** =====================================
   * Main Menu Fixed
   * =====================================***/
  jQuery(window).on("scroll", function () {
    if ($(window).scrollTop() > 1) {
      $(".menu-area").addClass("menu-fixed-top");
      $(".audio-player-area").addClass("background-overlay");
    } else {
      $(".menu-area").removeClass("menu-fixed-top");
      $(".audio-player-area").removeClass("background-overlay");
    }
  });
  /*** =====================================
   * Musica Events Counter
   * =====================================***/
  function musicaEvents() {
    var musicaEvent = $(".musica-counter-active");
    var len = musicaEvent.length;
    for (var i = 0; i < len; i++) {
      var musicaEventId = "#" + musicaEvent[i].id,
        dataValueYear = $(musicaEventId).attr("data-value-year"),
        dataValueMonth = $(musicaEventId).attr("data-value-month"),
        dataValueDay = $(musicaEventId).attr("data-value-day"),
        dataValueZone = $(musicaEventId).attr("data-value-zone");
      $(musicaEventId).countdown({
        labels: ["Years", "Months", "Weeks", "Days", "Hours", "Min", "Sec"],
        until: $.countdown.UTCDate(
          dataValueZone,
          dataValueYear,
          dataValueMonth,
          dataValueDay
        ),
        format: "dHMS",
        padZeroes: true,
      });
    }
  }
  if ($(".musica-counter-active").length) {
    musicaEvents();
  }
  /*** =====================================
   * Gallery Filter
   * ==================================== ***/
  $(window).on("load", function () {
    $(".preloader").fadeOut();
    if ($(".gallery-grid").length) {
      var $grid = $(".gallery-grid").isotope({
        itemSelector: ".grid-item",
        percentPosition: true,
        masonry: {
          columnWidth: ".grid-item",
        },
      });
      $(".gallery-grid .zoom-button").simpleLightbox();
    }
    $(".gallery-filter ul li a").on("click", function () {
      var filterValue = $(this).attr("data-filter");
      $grid.isotope({
        filter: filterValue,
      });
    });
  });
  /** =====================================
   *  Popup Video
   * ===================================== **/
  if ($(".video-play-icon").length) {
    $(".video-play-icon a").magnificPopup({
      items: {
        src: "https://www.youtube.com/watch?v=UAJyJt_lnKA",
      },
      type: "iframe", // this is default type
    });
  }
  /** =====================================
   *  Shop Rating
   * ===================================== **/
  function shoprating() {
    var shopRate = $(".shop-rating");
    var len = shopRate.length;
    for (var i = 0; i < len; i++) {
      var shopRateId = "#" + shopRate[i].id;
      var dataValue = $(shopRateId).attr("data-value");
      $(shopRateId).rateYo({
        rating: dataValue,
        starWidth: "13px",
        normalFill: "#fff",
        spacing: "5px",
        ratedFill: "#ff4e00",
      });
    }
  }
  if ($(".shop-rating").length) {
    shoprating();
  }
  /** =====================================
   *  Shop Item Cart
   * ===================================== **/
  $(".item-quantity .increment-button").on("click", function () {
    var pqty = $(".item-quantity .product-quantity").html();
    pqty++;
    $(".item-quantity .product-quantity").html(pqty);
  });
  $(".item-quantity .decrement-button").on("click", function () {
    var pqty = $(".item-quantity .product-quantity").html();
    if (pqty > 1) {
      pqty--;
    }
    $(".item-quantity .product-quantity").html(pqty);
  });
  /** =====================================
   *  Item price
   * ===================================== **/
  $(".shop-cart-item .increment-button").on("click", function () {
    var $shopCartItemParent = $(this).parents(".shop-cart-item"),
      pqty = $shopCartItemParent.find(".product-quantity").html();
    pqty++;
    $shopCartItemParent.find(".product-quantity").html(pqty);
    var itemPrice = $shopCartItemParent.find(".price span").html();
    $shopCartItemParent.find(".total-price span").html(pqty * itemPrice);

    var totalCost = 0;
    $(".shop-cart-item")
      .find(".total-price span")
      .each(function () {
        var data = $(this).html();
        data *= 1;
        totalCost += data;
      });
    $(".cart-total-cost span span").html(totalCost);
  });
  $(".shop-cart-item .decrement-button").on("click", function () {
    var $shopCartItemParent = $(this).parents(".shop-cart-item"),
      pqty = $shopCartItemParent.find(".product-quantity").html();
    if (pqty > 0) {
      pqty--;
    }
    $shopCartItemParent.find(".product-quantity").html(pqty);
    var itemPrice = $shopCartItemParent.find(".price span").html();
    $shopCartItemParent.find(".total-price span").html(pqty * itemPrice);
    var totalCost = 0;
    $(".shop-cart-item")
      .find(".total-price span")
      .each(function () {
        var data = $(this).html();
        data *= 1;
        totalCost += data;
      });
    $(".cart-total-cost span span").html(totalCost);
  });
  $(".shop-cart-item .cart-close").on("click", function () {
    $(this).parents(".shop-cart-item").fadeOut(1000);
  });
  /** =====================================
   *  Nice Scroll
   * ===================================== **/
  if ($(".nicescroll-active").length) {
    $(".nicescroll-active").niceScroll({
      cursorborder: "",
      cursorcolor: "#00F",
      cursorwidth: 0,
      boxzoom: false,
      scrollspeed: 500,
      horizrailenabled: false,
    });
  }
  /** =====================================
   *  Audio Player Plylist and Sound Control
   * ===================================== **/
  $(".musica-audio-player .audio-playlist").on("click", function () {
    $(".musica-audio-player .audio-playlist-wrapper").toggleClass(
      "playlist-show"
    );
  });
  $(".jp-volume-controls .jp-mute").on("click", function () {
    $(this).toggleClass("toggle-mute");
  });
  /*** =====================================* Contact Form submission* =====================================*/
  $(function () {
    $("form#contact").on("submit", function (e) {
      e.preventDefault();
      $.post("post-contact-form.php", $(this).serialize())
        .done(function (data) {
          $(".comment-form").fadeOut("slow", function () {
            $(".comment-form").fadeIn("slow").html(data);
          });
        })
        .fail(function () {
          alert("Failed to submit. Please Try again.");
        });
    });
  });
});
