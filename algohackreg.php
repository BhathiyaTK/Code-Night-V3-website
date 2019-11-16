<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Code Night v3.0 - 2019</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Code Night v3.0 - 2019" name="title">
  <meta content="HTML,CSS,Bootstrap,PHP,Firebase" name="keywords">
  <meta content="Code Night v3.0 - 2019" name="description">
  <meta content="Bhathiya Kariyawasam" name="author">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <!-- <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/theme-default.min.css" rel="stylesheet" type="text/css" />

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <h2><a href="index.php"><b>CODE</b>_NIGHT</a></h2>
        <!-- <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php#intro">Home</a></li>
          <li><a href="index.php#faq">FAQ</a></li>
          <li><a href="index.php#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro-reg">
    <div class="intro-container wow fadeIn">
      <div class="countdown-sec mt-5">
      <p class="mb-4 pb-0">Hurry Up. Time is running out !</p>
          <div class="countdown countdown-col">
              <div class="counter-day counter-div" data-aos="fade-up" data-aos-duration="1600">
                  <span class="days">00</span>
                  <div class="smalltext">Days</div>
              </div>
              <div class="counter-hour counter-div" data-aos="fade-up" data-aos-duration="1900">
                  <span class="hours">00</span>
                  <div class="smalltext">Hours</div>
              </div>
              <div class="counter-minute counter-div" data-aos="fade-up" data-aos-duration="2200">
                  <span class="minutes">00</span>
                  <div class="smalltext">Minutes</div>
              </div>
              <div class="counter-second counter-div" data-aos="fade-up" data-aos-duration="2500">
                  <span class="seconds">00</span>
                  <div class="smalltext">Seconds</div>
              </div>
          </div>
      </div>
    </div>
  </section>

  <main id="main">

    <!--==========================
      Registration Section
    ============================-->
    <section id="contact" class="section-with-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Algorithm Hackthon Team Registration</h2>
          <p>Gather your hacker team</p>
        </div>

        <div class="hack-selector mt-5 mb-5">
          <div class="forms-div mt-5" id="algo-reg-form-div">
            <?php require_once 'forms/algohackform.php'; ?>
          </div>
        </div>
      </div>
    </section><!-- #contact -->

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <img src="img/logo.png" alt="Code Night v3.0" width="100%">
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="index.php">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="index.php#schedule">Event Schedule</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="index.php#faq">FAQ</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              <strong>Phone:</strong> <a href="tel:+94779460818">(+94)77 946 0818</a> / <a href="tel:+94776249054">(+94)77 624 9054</a><br>
              <strong>Email:</strong> <a href="mailto:codenightv3@gmail.com">codenightv3@gmail.com</a><br>
            </p>

            <div class="social-links">
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Society of Computer Science</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- Firebase scripts -->
  <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-database.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-analytics.js"></script>
  <script src="process/algohack.js"></script>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script> 
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="js/jquery.jCounter-0.1.4.js"></script>

  <!-- Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  
  <script>
    $(document).ready(function(){

      $('#TeamProjectDescription').restrictLength( $('#pres-max-length') );
      
    });
    $.validate();
  </script>

</body>

</html>
