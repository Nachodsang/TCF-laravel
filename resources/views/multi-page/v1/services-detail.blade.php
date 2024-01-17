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
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
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
          <div class="row justify-content-center">
            <div class="col-lg-8 wow zoomIn" data-wow-delay="0.1s">
              <div class="img-s mt-5 mt-lg-0">
                <img src="images/blog-01.jpg" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid section ">
        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
         <span class="meta d-inline-block mb-3">Oct 26, 2023</span>
         <div class="heading-section mt-0">
          <h2 class="mb-0">SERVICE OVERVIEW</h2>
        </div>


        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.
        </p>
        <p> Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat sunt doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo eum ullam incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis ipsa, odit. Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p>
        <div class="row justify-content-center mt-4">
          <div class="col-lg-4 mb-4">
            <img src="images/blog-02.jpg" class="img-fluid">
            <small>Dsign Toluca</small>
          </div>
          <div class="col-lg-4 mb-4">
            <img src="images/blog-03.jpg" class="img-fluid">
            <small>Roman Parque</small>
          </div>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.
        </p>
        <p> Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat sunt doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo eum ullam incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis ipsa, odit. Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p>
      </div>


      <div class=" gallery-section">
        <div class="">

          <div class="row ce-animate">
            <div class="col-md-12">
              <div class="carousel-gallery owl-carousel ftco-owl">
               <?php for($i=1;$i<=6;$i++){ ?>
                <div class="item">
                  <div class="gallery-wrap py-4">
                    <img src="images/service-0<?=$i?>.jpg" class="img-fluid">
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="contactus-block mt-5">
        <div class="row align-items-center">
          <div class="col-lg-6">
           <div class="categories_tags">
            <p>Tags: <a href="#">#website</a>, <a href="#">#trends</a></p>
          </div>
          <div class="temp-footer">
            <div class="d-flex align-items-center  mb-4 mb-lg-0">
              <div class="me-2">Share post:</div>
              <a class="btn-square btn-share me-1" href=""><img src="images\icon\line.png" class="img-fluid" alt="line"></a>
              <a class="btn-square btn-share me-1" href=""><img src="images\icon\facebook.png" class="img-fluid" alt="facebook"></a>
              <a class="btn-square btn-share me-1" href=""><img src="images\icon\x-twitter.png" class="img-fluid" alt="x-twitter"></a>
              <a class="btn-square btn-share me-1" href=""><img src="images\icon\instagram.png" class="img-fluid" alt="instagram"></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="text-right ">
             <div class="h3 mb-3">Get a Quote</div>
             <div class="mb-3">If You Have Any Query, Please Contact Us</div>
             <form action="#">
              <input type="submit" value="Contact Us" class="btn  btn-message">
            </form>
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
<script src="js/owl.carousel.min.js"></script>
<script data-pace-options='{ "ajax": false }' src="js/pace.min.js"></script>
<script type="text/javascript">
    //Finished loader
  Pace.on("done", function() {
    jQuery(".loader").addClass('animated fadeOutRight').fadeOut(1000);
  });

  $('.carousel-gallery').owlCarousel({
    center: false,
    loop: true,
    items:1,
    margin: 30,
    stagePadding: 0,
    nav: false,
    navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
    responsive:{
      0:{
        items: 1
      },
      600:{
        items: 2
      },
      1000:{
        items: 3
      }
    }
  });

 

</script>

</body>
</html>

