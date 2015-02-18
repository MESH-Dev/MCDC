<?php /*
* Template Name: Calendar
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

  <section id="content">
    <div class="container">
      <div class="content-holder"></div>
    </div>
  </section>

  <section id="page-content">
    <div class="container">
      <div class="eight columns">
        <div class="row">
          <?php the_content(); ?>

          <div class="calendar-current">

            <div class="calendar-current-left">
              <div class="calendar-current-today">Today's Events!</div>
            </div>
            <div class="calendar-current-right">
              <?php

                $args = array(
                  'post_type' => 'calendarentry',
                  'orderby' => 'post_date'
                );

                // The Query
                $the_query = new WP_Query( $args );

                // The Loop
                if ( $the_query->have_posts() ) {

                  ?>

                  <div class="calendar-current">
                    <div class="calendar-current-header events">
                      <h3>Events for <?php echo date("l, F j"); ?></h3>
                    </div>

                    <?php

                    while ( $the_query->have_posts() ) {
                      $the_query->the_post();

                      $firstDate = date('Y-m-d', get_field('event_date'));
                      $secondDate = date('Y-m-d');



                      $terms = get_the_terms($post->ID, 'type');

                      if (!empty($terms)) {
                        $term = array_pop($terms);
                        $color = $term->slug;
                      } else {
                        $color = 'black';
                      }

                      $date = get_field('event_date');

                      if ($firstDate == $secondDate) {

                      ?>

                        <div class="calendar-current-title"><?php echo get_the_title(); ?></div>

                        <div class="calendar-entry-body">
                          <?php the_content(); ?>
                        </div>


                      <?php

                      }
                    }
                    ?>

                  </div>

                  <?php
                } else {
                  // no posts found
                }
                /* Restore original Post Data */
                wp_reset_postdata();

              ?>
            </div>

          </div>

          <div class="calendar-current-filter">
            <h3 class="filter-header">Filter Upcoming Events</h3>

            <a href="">
              <div class="btn filter">
                <div class="btn-headline">View by Event Type</div>
              </div>
            </a>
            <a href="">
              <div class="btn filter">
                <div class="btn-headline">View by Date</div>
              </div>
            </a>
          </div>

          <!-- Running -->

          <?php

            $args = array(
              'post_type' => 'calendarentry',
              'type' => 'running'
            );

            // The Query
            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() ) {

              ?>

              <div class="calendar-type-header running">
                <h3>Upcoming Running and Walking Events</h3>
              </div>

              <?php

              while ( $the_query->have_posts() ) {
                $the_query->the_post();

                $terms = get_the_terms($post->ID, 'type');

                if (!empty($terms)) {
                  $term = array_pop($terms);
                  $color = $term->slug;
                } else {
                  $color = 'black';
                }

                $date = get_field('event_date');

                ?>

                <div>
                  <div class="calendar-entry-header">


                    <div class="calendar-entry-date-month <?php echo $color; ?>-bg"><?php echo date('M',$date); ?></div>
                    <div class="calendar-entry-date-day <?php echo $color; ?>"><?php echo date('d',$date); ?></div>
                    <div class="calendar-entry-title <?php echo $color; ?>"><?php echo get_the_title(); ?></div>

                  </div>
                  <div class="calendar-entry-body">
                    <?php the_excerpt(); ?>
                  </div>
                </div>

                <?php
              }
            } else {
              // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();

          ?>

          <!-- Clinic -->

          <?php

            $args = array(
              'post_type' => 'calendarentry',
              'type' => 'clinic'
            );

            // The Query
            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() ) {

              ?>

              <div class="calendar-type-header clinic">
                <h3>Upcoming Clinic Events</h3>
              </div>

              <?php

              while ( $the_query->have_posts() ) {
                $the_query->the_post();

                $terms = get_the_terms($post->ID, 'type');

                if (!empty($terms)) {
                  $term = array_pop($terms);
                  $color = $term->slug;
                } else {
                  $color = 'black';
                }

                $date = get_field('event_date');

                ?>

                <div>
                  <div class="calendar-entry-header">


                    <div class="calendar-entry-date-month <?php echo $color; ?>-bg"><?php echo date('M',$date); ?></div>
                    <div class="calendar-entry-date-day <?php echo $color; ?>"><?php echo date('d',$date); ?></div>
                    <div class="calendar-entry-title <?php echo $color; ?>"><?php echo get_the_title(); ?></div>

                  </div>
                  <div class="calendar-entry-body">
                    <?php the_content(); ?>
                  </div>
                </div>

                <?php
              }
            } else {
              // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();

          ?>

          <!-- Education -->

          <?php

            $args = array(
              'post_type' => 'calendarentry',
              'type' => 'education'
            );

            // The Query
            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() ) {

              ?>

              <div class="calendar-type-header education">
                <h3>Upcoming Meetings and Educational Events</h3>
              </div>

              <?php

              while ( $the_query->have_posts() ) {
                $the_query->the_post();

                $terms = get_the_terms($post->ID, 'type');

                if (!empty($terms)) {
                  $term = array_pop($terms);
                  $color = $term->slug;
                } else {
                  $color = 'black';
                }

                $date = get_field('event_date');

                ?>

                <div>
                  <div class="calendar-entry-header">


                    <div class="calendar-entry-date-month <?php echo $color; ?>-bg"><?php echo date('M',$date); ?></div>
                    <div class="calendar-entry-date-day <?php echo $color; ?>"><?php echo date('d',$date); ?></div>
                    <div class="calendar-entry-title <?php echo $color; ?>"><?php echo get_the_title(); ?></div>

                  </div>
                  <div class="calendar-entry-body">
                    <?php the_content(); ?>
                  </div>
                </div>

                <?php
              }
            } else {
              // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();

          ?>

          <!-- Agricultural -->

          <?php

            $args = array(
              'post_type' => 'calendarentry',
              'type' => 'agricultural'
            );

            // The Query
            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() ) {

              ?>

              <div class="calendar-type-header agricultural">
                <h3>Upcoming Agricultural Events</h3>
              </div>

              <?php

              while ( $the_query->have_posts() ) {
                $the_query->the_post();

                $terms = get_the_terms($post->ID, 'type');

                if (!empty($terms)) {
                  $term = array_pop($terms);
                  $color = $term->slug;
                } else {
                  $color = 'black';
                }

                $date = get_field('event_date');

                ?>

                <div>
                  <div class="calendar-entry-header">


                    <div class="calendar-entry-date-month <?php echo $color; ?>-bg"><?php echo date('M',$date); ?></div>
                    <div class="calendar-entry-date-day <?php echo $color; ?>"><?php echo date('d',$date); ?></div>
                    <div class="calendar-entry-title <?php echo $color; ?>"><?php echo get_the_title(); ?></div>

                  </div>
                  <div class="calendar-entry-body">
                    <?php the_content(); ?>
                  </div>
                </div>

                <?php
              }
            } else {
              // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();

          ?>

          </div>
        </div>
        <div class="four columns sidebar">

          <?php include_once(locate_template('partials/sidebar.php')); ?>

        </div>
    </div>
  </section>

<?php endwhile; ?>

<?php get_footer(); ?>
