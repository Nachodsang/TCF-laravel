  <a href="#" class="js-temp-nav-toggle temp-nav-toggle"><i></i></a>
  <aside id="temp-aside" role="complementary" class="border js-fullheight">
    <h1 id="temp-logo"><a href="index.php"><img src="images/logo/logo.png" class="img-fluid logo"> Interior Design</a></h1>
    <nav id="temp-main-menu" role="navigation">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="project.php">Project</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>

    <div class="temp-footer">
      <div class="d-flex justify-content-center">
       <a class="btn-square btn-social me-1" href=""><img src="images\icon\line.png" class="img-fluid" alt="line"></a>
       <a class="btn-square btn-social me-1" href=""><img src="images\icon\facebook.png" class="img-fluid" alt="facebook"></a>
       <a class="btn-square btn-social me-1" href=""><img src="images\icon\x-twitter.png" class="img-fluid" alt="x-twitter"></a>
       <a class="btn-square btn-social me-1" href=""><img src="images\icon\instagram.png" class="img-fluid" alt="instagram"></a>
     </div>
   </div>

 </aside>



 <script>

  var url = window.location.href;

  var els = document.querySelectorAll("#temp-main-menu a");
  for (var i = 0, l = els.length; i < l; i++) {
    var el = els[i];
    if (el.href === url) {
     el.classList.add("temp-active");

   }
 }
</script>
