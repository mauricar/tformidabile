//preloader
  $(window).bind("load", function () {
      $("#status").fadeOut();
      $("#preloader").delay(450).fadeOut("slow");
  })