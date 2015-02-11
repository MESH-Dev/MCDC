<?php /*
* Template Name: Contact
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

      <?php echo do_shortcode( '[wpgmza id="1"]' ) ?>

      <h3>Contact Us</h3>
      <br/>

      <?php the_content(); ?>

    </div>
    <div class="four columns sidebar">

      <?php include_once(locate_template('partials/sidebar.php')); ?>

    </div>

  </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>
