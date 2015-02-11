<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=.9">
  <title><?php echo get_bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
  <div class="row">
    <div class="nav-bar">
      <a href="http://williamsonhealthwellness.com">
        <div class="top-third light-green-bg top-1 clinic-1">
          <div class="top-third-text">
            <div class="sub-text">
              <span>Our Clinic</span>
            </div>
          </div>
        </div>
        <div class="top-third yellow-bg top-1 clinic-2">
          <div class="top-third-text">
            <div class="main-text">
              <span>williamsonhealthwellness.com »</span>
            </div>
          </div>
        </div>
      </a>
      <a href="http://sustainablewilliamson.org">
        <div class="top-third blue-bg top-2 platform-1">
          <div class="top-third-text">
            <div class="sub-text">
              <span>Our Platform</span>
            </div>
          </div>
        </div>
        <div class="top-third teal-bg top-2 platform-2">
          <div class="top-third-text">
            <div class="main-text">
              <span>sustainablewilliamson.org »</span>
            </div>
          </div>
        </div>
      </a>
      <a href="http://mingodiabetes.com">
        <div class="top-third bright-green-bg top-3 outreach-1">
          <div class="top-third-text">
            <div class="sub-text">
              <span>Our Outreach</span>
            </div>
          </div>
        </div>
        <div class="top-third purple-bg top-3 outreach-2">
          <div class="top-third-text">
            <div class="main-text">
              <span>mingodiabetes.com »</span>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
  <div class="row white-bg">
    <div class="container white-ribbon">
      <div class="content-right">

        <!-- Add the logo image here -->
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/Williamson_seal_logo.png" />

      </div>
    </div>
  </div>

  <div id="responsiveNav">
    <?php if(has_nav_menu('main_nav')){
        $defaults = array(
          'theme_location'  => 'main_nav',
          'menu'            => 'main_nav',
          'container'       => false,
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => 'menu',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'          => ''
        ); wp_nav_menu( $defaults );
      }else{
        echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
      } ?>
  </div>

  <div class="header-image" style="background: url(<?php the_field('header_image') ?>) no-repeat top center fixed; background-size: cover;">
  </div>

  <div class="container">
    <div class="row">
      <div class="two columns">
        <div id="logo">
          <a href="<?php echo get_bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/SW_Logo.png" /></a>
        </div>
      </div>

    </div>
  </div>

</header>

<!-- Open the wrapper -->
<div class="wrapper">

  <section id="slogan">
    <div class="container">
      <div class="row">
        <div class="home-callout">
          <?php if(is_front_page()){ ?>
          <span><?php the_field('headline'); ?></span>
          <?php } else { ?>
          <span><?php echo get_the_title(); ?></span>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
