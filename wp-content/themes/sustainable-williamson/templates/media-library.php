<?php /*
* Template Name: Media Library
*/
?>

<?php get_header(); ?>

<?php if(have_posts()){while(have_posts()){the_post(); ?>
  <section id="content">
    <div class="container">
      <div class="content-holder"></div>
    </div>
  </section>
  <section id="page-content">
    <div class="container">
      <div class="eight columns">


        <?php the_content(); ?>

        <?php if(get_field('content_left')) { ?>
          <div class="four columns page-content-block">
            <?php the_field('content_left'); ?>
          </div>
        <?php } ?>

        <?php if(get_field('content_right')) { ?>
          <div class="four columns page-content-block">
            <?php the_field('content_right'); ?>
          </div>
        <?php } ?>

        <div class="clear"></div>

      </div>
      <div class="four columns sidebar">

        <?php include_once(locate_template('partials/sidebar.php')); ?>

      </div>
    </div>

    <div style="background: url(<?php the_field('resources_background'); ?>) no-repeat center fixed; background-size: cover; background-attachment: scroll; padding: 20px 0;">
      <div class="container">
        <div class="row">

            <?php

            // check if the repeater field has rows of data
            if( have_rows('resources') ):

              echo '<h3>Here are resources to help you stay healthy</h3>';

              // loop through the rows of data
              while ( have_rows('resources') ) : the_row();

              ?>

              <div class="four columns resources">
                <a href="<?php the_sub_field('resource_link'); ?>" target="_blank">
                  <div class="case-study">
                    <div class="case-study-image">
                      <img src="<?php the_sub_field('resource_image'); ?>" />
                    </div>
                    <div class="case-study-title">
                      <div class="case-study-title-text">
                        <span><?php the_sub_field('resource_title'); ?></span>
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
      </div>
    </div>

  </section>
<?php } } ?>

<?php get_footer(); ?>
