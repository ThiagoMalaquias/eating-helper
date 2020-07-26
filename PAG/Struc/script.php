</body>
</html>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../Bootstrap/node_modules/jquery/dist/jquery.js"></script>
<script src="../Bootstrap/node_modules/popper.js/dist/umd/popper.js"></script>
<script src="../Bootstrap/node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="../Bootstrap/node_modules/bootstrap/js/modernizr-2.6.2.min.js"></script>
<script src="../bower_components/wow/dist/wow.min.js"></script>
<script src="https://unpkg.com/ionicons@4.5.1/dist/ionicons.js"></script>
<script src="../slick/slick.js" type="text/javascript" charset="utf-8"></script>




 <!-- Initialize Swiper -->
<script type="text/javascript">
  $(".regular").slick({
    dots: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 5
  });

  $(function () {
    $('[data-toggle="popover"]').popover()
  });

  $(function(){       
    new WOW().init();
  });
</script>

