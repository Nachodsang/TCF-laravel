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
          <h2 class="mb-4">Conatact</h2>
        </div>
      </div>


      <div class="row d-flex align-items-center">
        <div class="col-md-5 contact-info">
          <div class="d-flex align-items-center wow fadeInLeft" data-wow-delay="0.3s">
            <div class="responsive-all-devices-icon">
             <span class="material-symbols-outlined">
              location_on
            </span>
          </div>
          <p class="ms-3"><a href="#">123/4 Na Ranong Road, Thailand, Bangkok</a></p>
        </div>

        <div class="d-flex align-items-center wow fadeInLeft" data-wow-delay="0.5">
          <div class="responsive-all-devices-icon">
            <span class="material-symbols-outlined">
              mail
            </span>
          </div>
          <p class="ms-3"><a href="mailto:contact@gmail.com">contact@gmail.com</a></p>
        </div>


        <div class="d-flex align-items-center wow fadeInLeft" data-wow-delay="0.7s">
          <div class="responsive-all-devices-icon">
            <span class="material-symbols-outlined">
              phone_enabled
            </span>
          </div>
          <p class="ms-3"><a href="tel:1234567890">+123 456 7890</a></p>
        </div>





      </div>

      <div class="col-md-7 col-md-push-1">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-md-pull-1 wow fadeInRight" data-wow-delay="0.5s">
            <div class="form-contact">
              <form action="">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Phone">
                </div>
                <div class="form-group">
                  <textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-message mt-4" value="Send Message">
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>

    
    </div>

  </div>
</div>
  <div class="clol-lg-12">
          <div id="map">
          <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
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

