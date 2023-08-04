<div class="footer">
      <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved.
        <br>Design: <a href="https://templatemo.com/page/1" target="_parent" title="website templates">TemplateMo</a>
      </p>
    </div>
  </section>    
</body>
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="../Assets/Template/User/vendor/jquery/jquery.min.js"></script>
  <script src="../Assets/Template/User/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="../Assets/Template/User/assets/js/isotope.min.js"></script>
  <script src="../Assets/Template/User/assets/js/owl-carousel.js"></script>
  <script src="../Assets/Template/User/assets/js/lightbox.js"></script>
  <script src="../Assets/Template/User/assets/js/tabs.js"></script>
  <script src="../Assets/Template/User/assets/js/isotope.js"></script>
  <script src="../Assets/Template/User/assets/js/video.js"></script>
  <script src="../Assets/Template/User/assets/js/slick-slider.js"></script>
  <script src="../Assets/Template/User/assets/js/custom.js"></script>
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