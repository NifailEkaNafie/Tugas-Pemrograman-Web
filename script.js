$(document).ready(function() {
  // Promo toggle
  $("#btn-promo").click(function() {
    $("#promo").slideToggle(600);
  });

  // Animasi saat scroll
  $(window).on("scroll", function() {
    $(".fade-in").each(function() {
      var top_of_element = $(this).offset().top;
      var bottom_of_screen = $(window).scrollTop() + $(window).height();
      if (bottom_of_screen > top_of_element + 50) {
        $(this).css("opacity", "1").css("transform", "translateY(0)");
      }
    });
  });
});
