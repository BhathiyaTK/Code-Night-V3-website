<?php
if (($_SERVER['REQUEST_METHOD'] == "POST")) {
  if (isset($_POST["contact_us"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    if ((!empty($name))&&(!empty($email))&&(!empty($subject))&&(!empty($message))) {
      $headers = "From: $email \r\n";
      $headers .= "Reply-To: $email \r\n";
      $headers .= "To: $email \r\n";
      $headers .= "X-Mailer: PHP/" . PHP_VERSION;

      $to = "socs@appa.sab.ac.lk";
      $subject = "Message from Code Night delegate";
      $body =  "From: $name\nEmail: $email\n\n$message";

      mail($to, $subject, $body, $headers);

      if (mail($to, $subject, $body, $headers)) {
        echo '<script>alert("Your message sent successfully! We will reach you within 6 hours.");</script>';
      }else{
        echo '<script>alert("Message sending failed! Try again shortly.");</script>';
      }
    }
  }
}
?>

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
        <h2><a href="#intro"><b>CODE</b>_NIGHT</a></h2>
        <!-- <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#schedule">Schedule</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="buy-tickets"><a href="#" data-toggle="modal" data-target="#regModal">Register Now</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <img src="img/logo.png"/>
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
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>About The Event</h2>
            <p>Code Night is a hackathon organized by the Society of Computer Sciences in collaboration with Computing and Information Systems which already held twice. Code Night version 3.0 will be an overnight hackathon series in Sabaragamuwa University of Sri Lanka which organized with the key objective of giving the hackathon experience to 2nd and 3rd year undergraduates in Department of Computing and Information Systems and build-up the collaboration between the undergraduates. Instead of a traditional hackathon, this event will provide series of idea and algorithm hackathons to each batch.</p>
          </div>
          <div class="col-lg-6 text-center mt-5">
            <h3>Limited seats available. Register your team now for feel amazing hackthon experience.</h3>
            <a href="#" class="about-btn mt-4" data-toggle="modal" data-target="#regModal">Register Now</a>
          </div>
        </div>
      </div>
    </section>

    <!--==========================
      Schedule Section
    ============================-->
    <section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Event Schedule</h2>
          <p>Here is our event schedule</p>
        </div>

        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Idea Hack</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Algorithm Hack</a>
          </li>
        </ul>

        <div class="tab-content row justify-content-center">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

            <div class="row schedule-item">
              <div class="col-md-3"><time>06.00 PM - 06:30 PM</time></div>
              <div class="col-md-9">
                <h4>Registration</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-3"><time>06.30 PM - 07:00 PM</time></div>
              <div class="col-md-9">
                <h4>Openning Ceremony</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-3"><time>07.00 PM - 07:30 PM</time></div>
              <div class="col-md-9">
                <h4>Introduction</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-3"><time>07.30 PM - 09:00 PM</time></div>
              <div class="col-md-9">
                <h4>Session 1 - Beginning of the Idea Hackthon</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-3"><time>09.00 PM - 10:00 PM</time></div>
              <div class="col-md-9">
                <h4>Dinner</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-3"><time>10.00 PM - 11:30 PM</time></div>
              <div class="col-md-9">
                <h4>Session 2 - Code Review</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-3"><time>11.30 PM - 12:00 PM</time></div>
              <div class="col-md-9">
                <h4>Entertainment musical item</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-3"><time>12.00 AM - 02:00 AM</time></div>
              <div class="col-md-9">
                <h4>Session 3 - Pre-pitch</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-3"><time>02.00 AM - 03:00 AM</time></div>
              <div class="col-md-9">
                <h4>Entertainment game</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-3"><time>03.00 AM - 06:00 AM</time></div>
              <div class="col-md-9">
                <h4>Session 4 - Idea pitch and end of the hackthon</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-3"><time>06.00 AM - 07:00 AM</time></div>
              <div class="col-md-9">
                <h4>Closing ceremony and prize giving</h4>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

            <div class="row schedule-item">
              <div class="col-md-3"><time>06.00 PM - 06:30 PM</time></div>
              <div class="col-md-9">
                <h4>Registration</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-3"><time>06.30 PM - 07:00 PM</time></div>
              <div class="col-md-9">
                <h4>Openning Ceremony</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-3"><time>07.00 PM - 07:30 PM</time></div>
              <div class="col-md-9">
                <h4>Introduction</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-3"><time>07.30 PM - 09:00 PM</time></div>
              <div class="col-md-9">
                <h4>Session 1 - Beginning of the Algorithm Hackthon</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-3"><time>09.00 PM - 10:00 PM</time></div>
              <div class="col-md-9">
                <h4>Dinner</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-3"><time>10.00 PM - 11:30 PM</time></div>
              <div class="col-md-9">
                <h4>Session 2 - Hackthon Continues</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-3"><time>11.30 PM - 12:00 PM</time></div>
              <div class="col-md-9">
                <h4>Entertainment musical item</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-3"><time>12.00 AM - 02:00 AM</time></div>
              <div class="col-md-9">
                <h4>Session 3 - Hackthon Continues</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-3"><time>02.00 AM - 03:00 AM</time></div>
              <div class="col-md-9">
                <h4>Entertainment game</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-3"><time>03.00 AM - 06:00 AM</time></div>
              <div class="col-md-9">
                <h4>Session 4 - Hackthon Ending</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-3"><time>06.00 AM - 07:00 AM</time></div>
              <div class="col-md-9">
                <h4>Closing ceremony and prize giving</h4>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 2 -->

        </div>

      </div>

    </section>

    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Gallery</h2>
          <p>Check our gallery from the past hackthons</p>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel">
        <a href="img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/1.jpg" alt=""></a>
        <a href="img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/2.jpg" alt=""></a>
        <a href="img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/3.jpg" alt=""></a>
        <a href="img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/4.jpg" alt=""></a>
        <a href="img/gallery/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/5.jpg" alt=""></a>
        <a href="img/gallery/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/6.jpg" alt=""></a>
        <a href="img/gallery/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/7.jpg" alt=""></a>
        <a href="img/gallery/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/8.jpg" alt=""></a>
      </div>

    </section>

    <!--==========================
      Sponsors Section
    ============================-->
    <section id="supporters" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Powered by</h2>
        </div>

        <div class="row no-gutters supporters-wrap clearfix">

          <div class="col-lg-6 col-md-6 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/cis.png" class="img-fluid" alt="" width="50%">
            </div>
          </div>
          
          <div class="col-lg-6 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/socs.png" class="img-fluid" alt="" width="80%">
            </div>
          </div>

        </div>

      </div>

    </section>

    <!--==========================
      F.A.Q Section
    ============================-->
    <section id="faq" class="wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>F.A.Q </h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9">
              <ul id="faq-list">

                <li>
                  <a data-toggle="collapse" class="collapsed" href="#faq1">Where is this hackthon held? When? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq1" class="collapse" data-parent="#faq-list">
                    <p>
                      This hackthon will be held on 21<sup>st</sup> November at 6.00 PM to 22<sup>nd</sup> November at 7.00 AM at 104 Hall in Faculty of Applied Sciences, Sabaragamuwa university of Sri Lanka.
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq2" class="collapsed">Does this hackthon make me cost? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq2" class="collapse" data-parent="#faq-list">
                    <p>
                      Absolutely not. This hackthon is totally free of cost. 
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq3" class="collapsed">Do I need to bring dinner and other snacks myself for this event?<i class="fa fa-minus-circle"></i></a>
                  <div id="faq3" class="collapse" data-parent="#faq-list">
                    <p>
                      No. You don't need to bring dinner or any snack for the event. Dinner and extra snacks will provides during the event. (This is not compulsory, If you need, you can bring your own foods.)
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq4" class="collapsed">What will I get by participating to this hackthon? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq4" class="collapse" data-parent="#faq-list">
                    <p>
                      All registered hackthon participants will receive swags. And also hackthon winners will receive very special gifts. Specially you will get a great hackthon experience.
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq5" class="collapsed">Do I need to participate this event? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq5" class="collapse" data-parent="#faq-list">
                    <p>
                      Why not? If you are a programming enthusiast and love to solve coding tasks, you should participate to this event. We can make sure that you will feel wonder and get an amazing hackthon experience by participating to this event.
                    </p>
                  </div>
                </li>
      
              </ul>
          </div>
        </div>

      </div>

    </section>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-with-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Feel free to contact us at anytime.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Society</h3>
              <address>Society of Computer Science (SOCS)</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+94779460818">(+94)77 946 0818</a> / <a href="tel:+94776249054">(+94)77 624 9054</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:codenightv3@gmail.com">codenightv3@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="index.php" method="POST" role="form" class="contactForm" id="contact_form">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit" name="contact_us">Send Message</button></div>
          </form>
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
              <li><i class="fa fa-angle-right"></i> <a href="#intro">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#schedule">Event Schedule</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#faq">FAQ</a></li>
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

  <!-- Registration Modal -->
  <div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Select Your Hackthon</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="mt-5 mb-5 text-center">
            <div style="margin-bottom: 10px;"><a href="ideahackreg.php" id="idea-hack-btn">Idea Hackthon</a></div><br>
            <div><a href="algohackreg.php" id="algo-hack-btn">Algorithm Hackthon</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
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
</body>

</html>
