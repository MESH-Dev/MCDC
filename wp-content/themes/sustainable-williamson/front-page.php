<?php get_header(); ?>

<section id="content">

  <div class="container">
    <div class="content-callout">
      <span><?php the_field('first_callout') ?></span>
    </div>
  </div>

</section>

<section id="overview" style="background: url(<?php the_field('background_image_1'); ?>) no-repeat top center fixed; background-size: cover;">
  <div class="container">

    <?php

    // check if the repeater field has rows of data
    if( have_rows('textboxes') ):

      $i = 0;

     	// loop through the rows of data
        while ( have_rows('textboxes') ) : the_row();

            // display a sub field value
            ?>

            <div class="four columns">

                <div class="overview-callout">
                  <div class="overview-callout-headline">
                    <span><?php the_sub_field('textbox_headline'); ?></span>
                  </div>
                  <div class="overview-callout-body">
                    <span><?php the_sub_field('textbox_body'); ?></span>
                  </div>
                </div>

            </div>

            <?php

            $i = $i + 1;

        endwhile;

    else :

        // no rows found

    endif;

    ?>

  </div>
</section>

<!-- <section id="contact">
  <div class="container">
    <div class="contact-callout">
      <h3>Participants</h3>
      <?php

      // check if the repeater field has rows of data
      if( have_rows('participants') ):

        // loop through the rows of data
        while ( have_rows('participants') ) : the_row();

        ?>

        <div class="participant">
          <a href=""><img src="<?php the_sub_field('participant'); ?>" /></a>
        </div>

        <?php

      endwhile;

      else :

        // no rows found

      endif;

      ?>
    </div>
  </div>
</section> -->

<section id="video-thumbnails">
  <div class="container">
    <h3>What's coming up with the coalition</h3>

    <?php

      $args = array(
        'post_type' => 'calendarentry',
      );

      // The Query
      $the_query = new WP_Query( $args );

      // The Loop
      if ( $the_query->have_posts() ) {

        while ( $the_query->have_posts() ) {
          $the_query->the_post();
          ?>

          <div><?php echo get_the_title(); ?></div>

          <?php
        }
      } else {
        // no posts found
      }
      /* Restore original Post Data */
      wp_reset_postdata();

    ?>

  </div>
</section>

<section id="video" style="background: url(<?php the_field('background_image_2'); ?>) no-repeat top center fixed; background-size: cover; background-attachment: scroll;">
  <div class="container">
    <div class="video-container">
      <a href="#" data-featherlight="#sw-vid">
        <div class="video-callout" style="background: url(<?php echo get_template_directory_uri() ?>/assets/img/sw_vid.jpg) no-repeat top center fixed; background-size: cover; background-attachment: scroll;">
          <span><img src="<?php echo get_template_directory_uri() ?>/assets/img/play-btn-lrg.png" /></span>
        </div>
      </a>
    </div>
  </div>
</section>

<div class="lightbox" id="sw-vid">
  <iframe width="770" height="463" src="//www.youtube.com/embed/HwZ_MNT6C1k" frameborder="0" allowfullscreen></iframe>
</div>

<section id="testimonial">
  <div class="container">
    <?php if (get_field('testimonial')) { ?>
    <div class="testimonial-callout">
      <blockquote><?php the_field('testimonial'); ?></blockquote>
      <br/>
      <span>&mdash; <?php the_field('testimonial_author'); ?></span>
    </div>
    <?php } ?>
  </div>
</section>

<section id="case-studies">
  <div class="container">

    <?php

    // check if the repeater field has rows of data
    if( have_rows('augmented_reports') ):

      echo '<h3>Experience our Augmented Report</h3>';

      // loop through the rows of data
      while ( have_rows('augmented_reports') ) : the_row();

      ?>

      <div class="three columns">
        <a href="<?php the_sub_field('augmented_report_link'); ?>" target="_blank">
          <div class="case-study">
            <div class="case-study-image">
              <img src="<?php the_sub_field('augmented_report_image'); ?>" />
            </div>
            <div class="case-study-title">
              <div class="case-study-title-text">
                <span><?php the_sub_field('augmented_report_title'); ?></span>
              </div>
            </div>
          </div>
        </a>
      </div>

      <?php

    endwhile;

    else :

      // no rows found

    endif;

    ?>


    <div class="clear"></div>

    <?php

    // check if the repeater field has rows of data
    if( have_rows('past_reports') ):

      echo '<h3>Download our Past Reports</h3>';

      // loop through the rows of data
      while ( have_rows('past_reports') ) : the_row();

      ?>

      <div class="three columns">
        <a href="<?php the_sub_field('past_report_link'); ?>" target="_blank">
          <div class="case-study">
            <div class="case-study-image">
              <img src="<?php the_sub_field('past_report_image'); ?>" />
            </div>
            <div class="case-study-title">
              <div class="case-study-title-text">
                <span><?php the_sub_field('past_report_title'); ?></span>
              </div>
            </div>
          </div>
        </a>
      </div>

      <?php

    endwhile;

    else :

      // no rows found

    endif;

    ?>

    <div class="clear"></div>

    <?php

    // check if the repeater field has rows of data
    if( have_rows('affiliates') ):

      echo '<h3>Living Lab Affiliates</h3>';

      // loop through the rows of data
      while ( have_rows('affiliates') ) : the_row();

      ?>

      <div class="three columns">
        <a href="<?php the_sub_field('affiliate_link'); ?>" target="_blank">
          <div class="case-study">
            <div class="case-study-image">
              <img src="<?php the_sub_field('affiliate_image'); ?>" />
            </div>
            <div class="case-study-title">
              <div class="case-study-title-text">
                <span><?php the_sub_field('affiliate_title'); ?></span>
              </div>
            </div>
          </div>
        </a>
      </div>

      <?php

    endwhile;

    else :

      // no rows found

    endif;

    ?>

  </div>

</section>

<?php get_footer(); ?>
