$(function () {
  const revers = document.getElementById("revers");

  window.addEventListener("scroll", () => {
    const scrollValue = document.scrollingElement.scrollTop;
    if (scrollValue >= 500) {
      $("#revers").fadeIn(500);
      // revers.style.display = "block";
    } else {
      $("#revers").fadeOut(500);
      //   revers.style.display = "none";
    }
  });

  let winHeight, winScroll, scrollPos, scrollPosShort;

  $(window).on("load scroll", function () {
    winScroll = $(window).scrollTop();
    winHeight = $(window).height();
    scrollPos = winHeight * 0.8 + winScroll;
    scrollPosShort = winHeight + winScroll;

    if ($(".howuse").offset().top <= scrollPos) {
      $(".howuse").addClass("show");
    }

    if ($(".area-top").offset().top <= scrollPos) {
      $(".area-top").addClass("show");
    }

    if ($(".voice-top").offset().top <= scrollPos) {
      $(".voice-top").addClass("show");
    }

    if ($(".qa").offset().top <= scrollPos) {
      $(".qa").addClass("show");
    }

    if ($(".recautions").offset().top <= scrollPos) {
      $(".recautions").addClass("show");
    }
  });
});
