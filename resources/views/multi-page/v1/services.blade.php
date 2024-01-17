<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Interior Design</title>
  <link href="images/logo/logo-ico.ico" rel="icon">

  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/flexslider.css">
  <link rel="stylesheet" href="css/animated.css">
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <div class="loader"></div>

  <div id="temp-page">
    <?php include("header.php");?>


    <div id="temp-main">
      <div class="service bg">
        <div class="container-fluid section ">
          <div class="row">
            <div class="col-lg-12 wow fadeInLeft" data-wow-delay="0.1s">
             <div class="heading-section">
              <h2 class="mb-4">Our Services</h2>
            </div>
          </div>
          <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.3s">
            <a href="services-detail.php" class="services-wrap">
              <div class="services-img" style="background-image: url(images/service-01.jpg)"></div>
              <div class="title-s desc hover-filled-slide-right">
                <h3>Interior Design</h3>
              </div>
            </a>
          </div>
          <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.5s">
            <a href="services-detail.php" class="services-wrap">
              <div class="services-img" style="background-image: url(images/service-02.jpg)"></div>
              <div class="title-s desc hover-filled-slide-right">
                <h3>Renovate</h3>
              </div>
            </a>
          </div>
          <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.7s">
            <a href="services-detail.php" class="services-wrap">
              <div class="services-img" style="background-image: url(images/service-03.jpg)"></div>
              <div class="title-s desc hover-filled-slide-right">
                <h3>Prop Stylish</h3>
              </div>
            </a>
          </div>
          <div class="col-md-4 wow fadeInLeft move-bottom" data-wow-delay="0.1s">
            <a href="services-detail.php" class="services-wrap">
              <div class="services-img" style="background-image: url(images/service-04.jpg)"></div>
              <div class="title-s desc hover-filled-slide-right">
                <h3>Constuction</h3>
              </div>
            </a>
          </div>
          <div class="col-md-4 wow fadeInLeft move-bottom" data-wow-delay="0.3s">
            <a href="services-detail.php" class="services-wrap">
              <div class="services-img" style="background-image: url(images/service-05.jpg)"></div>
              <div class="title-s desc hover-filled-slide-right">
                <h3>Modern Design</h3>
              </div>
            </a>
          </div>
          <div class="col-md-4 wow fadeInLeft move-bottom" data-wow-delay="0.5s">
            <a href="services-detail.php" class="services-wrap">
              <div class="services-img" style="background-image: url(images/service-06.jpg)"></div>
              <div class="title-s desc hover-filled-slide-right">
                <h3>Master Planning</h3>
              </div>
            </a>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 wow fadeInDown">
            <div class="custom-pagination  text-center mt-4">
             <a href="#" class="active">1</a>
             <a href="#">2</a>
             <a href="#">3</a>
             <a href="#">4</a>
             <span>...</span>
             <a href="#">15</a>
           </div>
         </div>

       </div>


     </div>
   </div>

   <?php include("footer.php");?>
 </div>
 <!--temp-main -->
</div>



<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/sticky-kit.min.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/main.js"></script>
<script src="js/animation.js"></script>

<script data-pace-options='{ "ajax": false }' src="js/pace.min.js"></script>
<script type="text/javascript">
    //Finished loader
  Pace.on("done", function() {
    jQuery(".loader").addClass('animated fadeOutRight').fadeOut(1000);
  });
</script>

</body>
</html>

