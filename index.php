<!DOCTYPE html>
<html>
<head>
	<title>Eating Helper</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="Bootstrap/node_modules/bootstrap/compile/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bower_components/wow/css/libs/animate.css">
    <link rel="stylesheet" type="text/css" href="css/Home1.css">
    <link rel="stylesheet" type="text/css" href="css/Home1-Res.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/ionicons@4.5.1/dist/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Playfair+Display:900,400|Lato:300,400,700">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Sofia">

    <link rel="shortcut icon" type="image/x-png" href="Img/images.png">


  </head>
<body>

  <?php include("home/Topo.php") ?>
  <?php include("home/AS.php") ?>
  <?php include("home/CARDAPIOS.php") ?>
  <?php include("home/MV.php") ?>
  <?php include("home/PMA.php") ?>
  <?php include("home/FC.php") ?>
           
</body>
</html>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="Bootstrap/node_modules/jquery/dist/jquery.js"></script>
<script src="Bootstrap/node_modules/popper.js/dist/umd/popper.js"></script>
<script src="Bootstrap/node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="Bootstrap/node_modules/bootstrap/js/modernizr-2.6.2.min.js"></script>
<script src="https://unpkg.com/ionicons@4.5.1/dist/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>

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
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000
  });
</script>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/wow/dist/wow.min.js"></script>
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


