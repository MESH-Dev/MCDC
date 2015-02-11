<section id="image">
  <div class="image-holder" style="background: url(<?php the_field('background_image_3', get_page_by_title('Home Page')->ID); ?>) no-repeat center fixed; background-size: cover; background-attachment: scroll;">
  </div>
</section>

<footer>
  <div class="container">
    <div class="four columns">
      <div class="footer-content">
        <div class="footer-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/SW_Logo_white.png" />
        </div>
        <div class="footer-contact">
          <p>29 East 3rd Ave<br/>
          Williamson, WV 25661</p>
          <p><strong>Call:</strong> 1-304-235-3400<br/>
          <strong>Fax:</strong> 1-304-235-3403</p>
        </div>
      </div>
    </div>
    <div class="four columns">
      <div class="footer-content">
        <div class="footer-headline">
          <span>Affiliate Programs</span>
        </div>
        <div class="footer-body">
          <p class="footer-link"><a href="http://williamsonhealthwellness.com">williamsonhealthwellness.com »</a></p>
          <p class="footer-link"><a href="http://healthyselfies.org">healthyselfies.org »</a></p>
          <p class="footer-link"><a href="http://mingodiabetes.com">mingocountydiabetescoalition.org »</a></p>
        </div>
      </div>
    </div>
    <div class="four columns">
      <div class="footer-content">
        <div class="footer-headline">
          <span>Follow Us</span>
        </div>
        <div class="footer-body">
          <a href="https://www.facebook.com/SustainableWilliamsonWV" target="_blank"><div class="circle-icon"><i class="fa fa-facebook"></i></div></a>
          <a href="https://twitter.com/suswilliamson" target="_blank"><div class="circle-icon"><i class="fa fa-twitter"></i></div></a>
          <a href="http://vimeo.com/sustainablewilliamson" target="_blank"><div class="circle-icon"><i class="fa fa-vimeo-square"></i></div></a>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Close the wrapper -->
</div>

<?php wp_footer(); ?>
</body>
</html>
