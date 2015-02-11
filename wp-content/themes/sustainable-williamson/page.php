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

      </div>
      <div class="four columns sidebar">

        <?php include_once(locate_template('partials/sidebar.php')); ?>

      </div>

    </div>
  </section>
<?php } } ?>

<?php get_footer(); ?>
