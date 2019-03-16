<!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,800" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/css/uikit.min.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">



    </head>
    <body>
      <div id="loading"></div>

      <!-- START uk-sticky -->
      <div uk-sticky="animation: uk-animation-slide-top;
                      sel-target: .uk-navbar-container;
                      cls-active: uk-navbar-sticky nav_theme_white;
                      cls-inactive: uk-navbar-transparent uk-dark uk-width-expand ;
                      top: 200"
           class="nav">

        <!-- START .navbar -->
        <nav class="navbar
                    uk-padding-small" uk-navbar>


          <!-- START .uk-navbar-left -->
          <div class="uk-navbar-left">
            <a href="index.php">
              <img src="<?php the_field('logo', 'option'); ?>"  alt="" style="width: 4em;">
            </a>
          </div> <!-- END .uk-navbar-left -->




          <!-- START .uk-navbar-right -->
          <div class="uk-navbar-right">

            <?php wp_nav_menu([
            'theme_location'  => '',
              'menu'            => '',
              'container'       => '',
              'container_class' => '',
              'container_id'    => '',
              'menu_class'      => '',
              'menu_id'         => '',
              'echo'            => true,
              'fallback_cb'     => '',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul id="%1$s" class="%2$s uk-navbar-nav">%3$s</ul>',
              'depth'           => 0,
              'walker'          => new Bootstrap_Walker_Menu_Nav(),

            ]); ?>

        
          </div><!-- END .uk-navbar-right -->
        </nav><!-- END .navbar -->
      </div><!-- END uk-sticky -->


      <!-- Start uk-offcanvas Mobile Nav  -->
      <div id="offcanvas-slide" uk-offcanvas>

        <!-- START .uk-offcanvas-bar -->
        <div class="uk-offcanvas-bar">

          <ul class="uk-nav uk-nav-default">
            <li class="active " >
              <a href="#" title="link_title">
                <span class="nav_animation nav__link">Home</span>
              </a>
            </li>


          </ul>

        </div> <!-- END .uk-offcanvas-->
      </div><!-- END uk-offcanvas Mobile Nav  -->
