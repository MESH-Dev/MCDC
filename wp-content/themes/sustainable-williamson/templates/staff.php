<?php /*
* Template Name: Staff
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

        <?php

        // check if the repeater field has rows of data
        if( have_rows('staff_members') ):

          $rows = count(get_field('staff_members'));

          $staffPerCol = ceil($rows/2);

          $i = 1;

          // loop through the rows of data
          while ( have_rows('staff_members') ) : the_row();

            // display a sub field value

            if ($i == 1 || ($i == ($staffPerCol + 1))) {
              echo "<div class='four columns staff'>";
            }

            ?>

              <div class="staff-member">

                <div class="row">
                  <div class="picture" style="background: url('<?php the_sub_field('picture'); ?>') no-repeat; background-size: cover;"></div>
                </div>

                <div class="row">
                  <span class="name"><?php the_sub_field('name'); ?></span>
                  <span class="title"><?php the_sub_field('title'); ?></span>
                </div>

                <div class="row specialty">
                  <span class="question">Specialty: </span>
                  <span class="answer"><?php the_sub_field('specialty'); ?></span>
                </div>

                <div class="row">
                  <span class="question">Experience: </span>
                  <span class="answer"><?php the_sub_field('experience'); ?></span>
                </div>

                <span class="description"><?php the_sub_field('description'); ?></span>

              </div>

            <?php

            if ($i == $staffPerCol || $i == $rows) {
              echo "</div>";
            }

            $i = $i + 1;

          endwhile;

        else :

          // no rows found

        endif;

        ?>

      </div>
      <div class="four columns sidebar">

        <?php include_once(locate_template('partials/sidebar.php')); ?>

      </div>

    </div>
  </section>

<?php endwhile; ?>

<?php get_footer(); ?>
