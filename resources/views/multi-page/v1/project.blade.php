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
     <div class="project bg  site-section">
      <div class="container-fluid section">
        <div class="row">
         <div class="col-md-12 heading-section wow fadeInLeft" data-wow-delay="0.1s">
          <h2 class="mb-4">Project</h2>
        </div>
      </div>

      <div class="row site-block-retro d-block d-md-flex">
        <?php for($i=1;$i<=3;$i++){ ?>
              <?php for($c=1;$c<=3;$c++){ ?>
         <div class="col-lg-4 mb-4">
          <a href="project-detail.php" class=" project-box unit-9" data-aos="fade-up" data-aos-delay="200">
           <div class="image" style="background-image: url('images/project-0<?=$i?>.jpg');"></div>
           <figcaption>
            <div>
             <h3>Laudantium</h3>
             <span>Hotel</span>
           </div>
         </figcaption>
       </a>
     </div>
      <?php } ?>
   <?php } ?>
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

