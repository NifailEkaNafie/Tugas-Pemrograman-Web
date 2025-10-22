$(document).ready(function(){

  // Tombol promo di beranda
  $("#btn-promo").click(function(){
    $("#promo").slideToggle(600);
  });

  // Efek hover untuk kartu layanan
  $(".service-card").hover(
    function(){ $(this).css("background", "#e6f7ff"); },
    function(){ $(this).css("background", "white"); }
  );
});
