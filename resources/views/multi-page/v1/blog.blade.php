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
     <div class="blog bg ">
      <div class="container-fluid section">
        <div class="row">
         <div class="col-md-12 heading-section wow fadeInLeft" data-wow-delay="0.1s">
          <h2 class="mb-4">Blog</h2>
        </div>


        <?php for($i=1;$i<=3;$i++){ ?>
            <?php for($c=1;$c<=3;$c++){ ?>
          <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class=" h-100 box-creative post-entry-1">
              <a href="blog-detail.php">
                <img src="images/blog-0<?=$i?>.jpg" alt="Image"
                class="img-fluid">

                <div class="post-entry-1-contents">
                  <h3>Lorem ipsum dolor sit amet</h3>
                  <span class="meta d-inline-block mb-3">Oct 26, 2023</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
                </div>
              </a>
            </div>
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

