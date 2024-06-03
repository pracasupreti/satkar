/*-------jquery nice select js-------------*/
/*
  jQuery Nice Select - v1.0
 */




! function(e) {
  e.fn.niceSelect = function(t) {
    function s(t) {
      t.after(e("<div></div>").addClass("nice-select").addClass(t.attr("class") || "").addClass(t.attr("disabled") ? "disabled" : "").attr("tabindex", t.attr("disabled") ? null : "0").html('<span class="current"></span><ul class="list"></ul>'));
      var s = t.next(),
        n = t.find("option"),
        i = t.find("option:selected");
      s.find(".current").html(i.data("display") || i.text()), n.each(function(t) {
        var n = e(this),
          i = n.data("display");
        s.find("ul").append(e("<li></li>").attr("data-value", n.val()).attr("data-display", i || null).addClass("option" + (n.is(":selected") ? " selected" : "") + (n.is(":disabled") ? " disabled" : "")).html(n.text()))
      })
    }
    if ("string" == typeof t) return "update" == t ? this.each(function() {
      var t = e(this),
        n = e(this).next(".nice-select"),
        i = n.hasClass("open");
      n.length && (n.remove(), s(t), i && t.next().trigger("click"))
    }) : "destroy" == t ? (this.each(function() {
      var t = e(this),
        s = e(this).next(".nice-select");
      s.length && (s.remove(), t.css("display", ""))
    }), 0 == e(".nice-select").length && e(document).off(".nice_select")) : console.log('Method "' + t + '" does not exist.'), this;
    this.hide(), this.each(function() {
      var t = e(this);
      t.next().hasClass("nice-select") || s(t)
    }), e(document).off(".nice_select"), e(document).on("click.nice_select", ".nice-select", function(t) {
      var s = e(this);
      e(".nice-select").not(s).removeClass("open"), s.toggleClass("open"), s.hasClass("open") ? (s.find(".option"), s.find(".focus").removeClass("focus"), s.find(".selected").addClass("focus")) : s.focus()
    }), e(document).on("click.nice_select", function(t) {
      0 === e(t.target).closest(".nice-select").length && e(".nice-select").removeClass("open").find(".option")
    }), e(document).on("click.nice_select", ".nice-select .option:not(.disabled)", function(t) {
      var s = e(this),
        n = s.closest(".nice-select");
      n.find(".selected").removeClass("selected"), s.addClass("selected");
      var i = s.data("display") || s.text();
      n.find(".current").text(i), n.prev("select").val(s.data("value")).trigger("change")
    }), e(document).on("keydown.nice_select", ".nice-select", function(t) {
      var s = e(this),
        n = e(s.find(".focus") || s.find(".list .option.selected"));
      if (32 == t.keyCode || 13 == t.keyCode) return s.hasClass("open") ? n.trigger("click") : s.trigger("click"), !1;
      if (40 == t.keyCode) {
        if (s.hasClass("open")) {
          var i = n.nextAll(".option:not(.disabled)").first();
          i.length > 0 && (s.find(".focus").removeClass("focus"), i.addClass("focus"))
        } else s.trigger("click");
        return !1
      }
      if (38 == t.keyCode) {
        if (s.hasClass("open")) {
          var l = n.prevAll(".option:not(.disabled)").first();
          l.length > 0 && (s.find(".focus").removeClass("focus"), l.addClass("focus"))
        } else s.trigger("click");
        return !1
      }
      if (27 == t.keyCode) s.hasClass("open") && s.trigger("click");
      else if (9 == t.keyCode && s.hasClass("open")) return !1
    });
    var n = document.createElement("a").style;
    return n.cssText = "pointer-events:auto", "auto" !== n.pointerEvents && e("html").addClass("no-csspointerevents"), this
  }
}(jQuery);

//Partner slider
var swiper_6 = new Swiper('.partner-wrap', {
  slidesPerView: 10,
  spaceBetween: 20,
  loop: true,
  speed: 1000,
  navigation: {
    nextEl: '.partner-next',
    prevEl: '.partner-prev',
  },
  // Responsive breakpoints
  breakpoints: {

    575: {
      slidesPerView: 2,
      spaceBetween: 30
    },
    767: {
      slidesPerView: 3,
      spaceBetween: 30
    },
    991: {
      slidesPerView: 4,
      spaceBetween: 30
    }
  }
});

/* -------------------------------------
                   Slider
        -------------------------------------- */
//Hero-slider
var swiper_1 = new Swiper('.hero-slider', {
  slidesPerView: 1,
  spaceBetween: 0,
  loop: true,
  speed: 1000,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: '.hero-next',
    prevEl: '.hero-prev',
  },
  // Responsive breakpoints
  breakpoints: {

    767: {
      slidesPerView: 1,
      spaceBetween: 30
    },
  }
});
//Trending place slider
var swiper_2 = new Swiper('.trending-place-wrap', {
  slidesPerView: 3,
  spaceBetween: 30,
  slidesPerGroup: 3,
  speed: 1500,
  loop: true,
  pagination: {
    el: '.trending-pagination',
    clickable: true,
  },
  // Responsive breakpoints
  breakpoints: {
    767: {
      slidesPerView: 1,
      slidesPerGroup: 1,
      spaceBetween: 10
    },
    1024: {
      slidesPerView: 2,
      spaceBetween: 30
    }
  }
});

//Trending place slider
var swiper_2 = new Swiper('.trending-place2-wrap', {
  slidesPerView: 4,
  spaceBetween: 20,
  slidesPerGroup: 4,
  speed: 1500,
  loop: true,
  pagination: {
    el: '.trending-pagination2',
    clickable: true,
  },
  // Responsive breakpoints
  breakpoints: {
    767: {
      slidesPerView: 1,
      slidesPerGroup: 1,
      spaceBetween: 10
    },
    1024: {
      slidesPerView: 2,
      spaceBetween: 30
    }
  }
});
//Similar Listing Slider
var swiper_3 = new Swiper('.similar-list-wrap', {
  slidesPerView: 2,
  spaceBetween: 30,
  loop: true,
  speed: 1000,
  navigation: {
    nextEl: '.similar-next',
    prevEl: '.similar-prev',
  },
  // Responsive breakpoints
  breakpoints: {

    767: {
      slidesPerView: 1,
      spaceBetween: 30
    },
  }
});
//Popular place slider one
var swiper = new Swiper('.popular-place-wrap', {
  slidesPerView: 4,
  spaceBetween: 20,
  loop: true,
  speed: 1000,
  navigation: {
    nextEl: '.popular-next',
    prevEl: '.popular-prev',
  },
  // Responsive breakpoints
  breakpoints: {

    767: {
      slidesPerView: 1,
    },
    991: {
      slidesPerView: 2,
      spaceBetween: 30
    },
    1200: {
      slidesPerView: 3,
      spaceBetween: 30
    }
  }
});
//Popular place slider Two
var swiper_4 = new Swiper('.popular-place-wrap.v2', {
  slidesPerView: 3,
  spaceBetween: 30,
  loop: true,
  speed: 1000,
  navigation: {
    nextEl: '.popular-next.style2',
    prevEl: '.popular-prev.style2',
  },
  // Responsive breakpoints
  breakpoints: {

    767: {
      slidesPerView: 1,
    },
    991: {
      slidesPerView: 2,
      spaceBetween: 30
    }
  }
});



//Testimonial slider
var swiper_7 = new Swiper('.testimonial-wrapper', {
  slidesPerView: 3,
  loop: true,
  speed: 1000,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  centeredSlides: true,
  pagination: {
    el: '.client-pagination',
    clickable: true,
  },
  // Responsive breakpoints
  breakpoints: {

    991: {
      slidesPerView: 1,
    }
  }
});


(function($) {

  /*---------------------------------
             Nice select
  -----------------------------------*/
  $('select').niceSelect();



}(jQuery));
