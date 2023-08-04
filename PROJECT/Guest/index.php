<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="TemplateMo">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <title>Women's Partner</title>

  <!-- Bootstrap core CSS -->
  <link href="../Assets/Template/Guest/Homepage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="../Assets/Template/Guest/Homepage/assets/css/fontawesome.css">
  <link rel="stylesheet" href="../assets/template/guest/homepage/assets/css/templatemo-edu-meeting.css">
  <link rel="stylesheet" href="../assets/template/guest/homepage/assets/css/owl.css">
  <link rel="stylesheet" href="../assets/template/guest/homepage/assets/css/lightbox.css">

</head>

<body>

  <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <!-- ***** Logo Start ***** -->
          <a href="index.html" class="logo">
            Women's Partner
          </a>
          <!-- ***** Logo End ***** -->
          <!-- ***** Menu Start ***** -->
          <ul class="nav">
            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
            <li><a href="UserRegistration.php">User Registration</a></li>
            <li><a href="DoctorRegistration.php">Doctor Registration</a></li>
            <li><a href="Login.php">Login</a></li>
          </ul>
          <a class='menu-trigger'>
            <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<section class="section main-banner" id="top" data-section="section1">
  <video autoplay muted loop id="bg-video">
    <source src="../assets/template/guest/homepage/assets/images/course-video.mp4" type="video/mp4" />
    <!-- | ../assets/video/file.mp4 | -->
  </video>
  <div class="video-overlay header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="caption">
            <h2>Welcome to Women's Partner</h2>
            <!-- Description -->
            <p>Join our community to connect, share, and support each other.</p>
            <div class="main-button-red">
              <a href="UserRegistration.php">
                <div class="scroll-to-section">Join Us Now!</div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** Main Banner Area End ***** -->

<section class="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="owl-service-item owl-carousel">

          <div class="item">
            <div class="icon">
              <img src="../assets/template/guest/homepage/assets/images/service-icon-01.png" alt="">
            </div>
            <div class="down-content">
              <h4>Share Your Thoughts</h4>
              <p>Express yourself and share your thoughts with other community members in a safe and supportive environment.</p>
            </div>
          </div>

          <div class="item">
            <div class="icon">
              <img src="../assets/template/guest/homepage/assets/images/service-icon-02.png" alt="">
            </div>
            <div class="down-content">
              <h4>Share Photos</h4>
              <p>Showcase your moments, achievements, and experiences by sharing photos with the community.</p>
            </div>
          </div>

          <div class="item">
            <div class="icon">
              <img src="../assets/template/guest/homepage/assets/images/service-icon-03.png" alt="">
            </div>
            <div class="down-content">
              <h4>Chat with Others</h4>
              <p>Connect and engage with like-minded women through our chat feature, fostering meaningful conversations and friendships.</p>
            </div>
          </div>

          <div class="item">
            <div class="icon">
              <img src="../assets/template/guest/homepage/assets/images/service-icon-02.png" alt="">
            </div>
            <div class="down-content">
              <h4>Consult Doctors</h4>
              <p>Get professional medical advice and guidance by consulting our experienced doctors specializing in women's health.</p>
            </div>
          </div>

          <div class="item">
            <div class="icon">
              <img src="../assets/template/guest/homepage/assets/images/service-icon-03.png" alt="">
            </div>
            <div class="down-content">
              <h4>Counseling from Psychiatrists</h4>
              <p>Seek support and counseling from qualified psychiatrists to address your mental health concerns and promote well-being.</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<section class="contact-us" id="contact">
  <div class="footer">
    <p>&copy; 2023 Women's Partner, Ltd. All Rights Reserved.</p>
  </div>
</section>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="../assets/template/guest/homepage/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/template/guest/homepage/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/template/guest/homepage/assets/js/isotope.min.js"></script>
  <script src="../assets/template/guest/homepage/assets/js/owl-carousel.js"></script>
  <script src="../assets/template/guest/homepage/assets/js/lightbox.js"></script>
  <script src="../assets/template/guest/homepage/assets/js/tabs.js"></script>
  <script src="../assets/template/guest/homepage/assets/js/video.js"></script>
  <script src="../assets/template/guest/homepage/assets/js/slick-slider.js"></script>
  <script src="../assets/template/guest/homepage/assets/js/custom.js"></script>
  <script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
      var
        direction = section.replace(/#/, ''),
        reqSection = $('.section').filter('[data-section="' + direction + '"]'),
        reqSectionPos = reqSection.offset().top - 0;

      if (isAnimate) {
        $('body, html').animate({
          scrollTop: reqSectionPos
        },
          800);
      } else {
        $('body, html').scrollTop(reqSectionPos);
      }

    };

    var checkSection = function checkSection() {
      $('.section').each(function () {
        var
          $this = $(this),
          topEdge = $this.offset().top - 80,
          bottomEdge = topEdge + $this.height(),
          wScroll = $(window).scrollTop();
        if (topEdge < wScroll && bottomEdge > wScroll) {
          var
            currentId = $this.data('section'),
            reqLink = $('a').filter('[href*=\\#' + currentId + ']');
          reqLink.closest('li').addClass('active').
            siblings().removeClass('active');
        }
      });
    };

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
      e.preventDefault();
      showSection($(this).attr('href'), true);
    });

    $(window).scroll(function () {
      checkSection();
    });
  </script>
</body>

</body>

</html>