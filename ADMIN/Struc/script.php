</body>
</html>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../../Bootstrap/node_modules/jquery/dist/jquery.js"></script>
<script src="../../Bootstrap/node_modules/popper.js/dist/umd/popper.js"></script>
<script src="../../Bootstrap/node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="../../Bootstrap/node_modules/bootstrap/js/modernizr-2.6.2.min.js"></script>
<script src="https://unpkg.com/ionicons@4.5.1/dist/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="../../slick/slick.js" type="text/javascript" charset="utf-8"></script>

 <!-- Initialize Swiper -->
<script type="text/javascript">
  $(function() {
    $('a').bind('click',function(event){
      var $anchor = $(this);
      $('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top}, 1000,'swing');
      // Outras Animações
      // linear, swing, jswing, easeInQuad, easeInCubic, easeInQuart, easeInQuint, easeInSine, easeInExpo, easeInCirc, easeInElastic, easeInBack, easeInBounce, easeOutQuad, easeOutCubic, easeOutQuart, easeOutQuint, easeOutSine, easeOutExpo, easeOutCirc, easeOutElastic, easeOutBack, easeOutBounce, easeInOutQuad, easeInOutCubic, easeInOutQuart, easeInOutQuint, easeInOutSine, easeInOutExpo, easeInOutCirc, easeInOutElastic, easeInOutBack, easeInOutBounce
    });
  });

  $(".regular").slick({
    dots: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#tres").click(function(event){
      $(".div3").toggle("fast");
      event.preventDefaul();
    });
  })
</script>

<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../bower_components/wow/dist/wow.min.js"></script>
<script>
  $(function(){       
    $('.toggle').click(function(){
      $('.layout').toggleClass('ativo');
      $('.menu-responsivo').toggleClass('ativo');
      $(this).toggleClass('ativo');
    });
    new WOW().init();
  });
</script>

