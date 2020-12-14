$(document).ready(function() {
  $(".menu-trigger").click(function () {
    $(this).toggleClass("active");
    $(this).next().toggleClass("onanimation");
    $('ul li').hide();
    $('ul li').each(function(i) {
      $(this).delay(80 * i).fadeIn(500);
    });
  });
});