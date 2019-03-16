<?php /* Template Name: Home Page Page */ ?>
<?php include'header.php'; ?>
<!-- Main page template -->
<?php

// check if the flexible content field has rows of data
if( have_rows('main_page') ):

     // loop through the rows of data
    while ( have_rows('main_page') ) : the_row();

        if( get_row_layout() == 'hero_section' ):
?>
<video loop muted playsinline uk-video="autoplay: inview" width="100%" style="position:relative; z-index:-1;">
  <source src="<?php the_sub_field('hero_video'); ?>" type="video/mp4">
</video>

<?php
        elseif( get_row_layout() == 'buttons_section' ):
?>

<section class="section">
  <div class="uk-container">
    <div class="uk-grid">
      <?php

      // check if the repeater field has rows of data
      if( have_rows('button') ):

        // loop through the rows of data
          while ( have_rows('button') ) : the_row(); ?>
      <div class="uk-width-1-3 uk-margin-top">
        <div class="bigbutton">
          <a href="<?php the_sub_field('button_url'); ?>">
          <h1><?php the_sub_field('button_icon'); ?></h1>
          <h4><?php the_sub_field('button_text'); ?></h4>
          </a>
        </div>
      </div>
    <? endwhile;
          else :
          // no rows found
          endif; ?>
    </div>
  </div>
</section>

<?php
        elseif( get_row_layout() == 'maps_section' ):
?>
<section class="maps_section">
  <?php the_sub_field('map'); ?>
</section>

<?php elseif( get_row_layout() == 'live_healthy'): ?>

  <section class="section section_color_gray">
    <div class="uk-container">
      <div class="uk-text-center">
        <h1>Live Healthy</h1>
        <hr class="hr hr_margin_auto">
      </div>
      <br>

      <div class="uk-grid" >
        <?php

        // check if the repeater field has rows of data
        if( have_rows('cards') ):

          // loop through the rows of data
            while ( have_rows('cards') ) : the_row(); ?>
        <div class="uk-width-1-3 uk-margin-remove"  uk-scrollspy="cls: uk-animation-fade;">
          <div class="uk-text-center">
      <div class="uk-inline-clip uk-transition-toggle uk-light livehealthy  card gradient" tabindex="0">
          <img src="<?php the_sub_field('image'); ?>" alt="">
          <div class="uk-position-center">
              <div class="uk-transition-slide-top-small"><h4 class=""><?php the_sub_field('title'); ?></h4></div>
              <div class="uk-transition-slide-bottom-small"><h4 class="uk-margin-remove">
                <a href="<?php the_sub_field('url'); ?>" class="uk-button uk-button-default">
                  View Test
                </a>
              </h4></div>
          </div>
      </div>
  </div>
  </div>
<? endwhile;
      else :
      // no rows found
      endif; ?>

        </div>
      </div>
    </div>
  </section>






<?php elseif( get_row_layout() == 'main_news'): ?>



  <section class="section"  uk-scrollspy="cls: uk-animation-fade;">
    <div class="uk-container">
      <div uk-slider="center: true">

      <div class="uk-position-relative uk-visible-toggle uk-light">

          <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
              <?php if( have_rows('card') ): while ( have_rows('card') ) : the_row(); ?>
              <li>
                  <div class="uk-card uk-card-default">
                      <div class="uk-card-media-top">
                          <img src="<?php the_sub_field('thumbnail'); ?>" alt="">
                      </div>
                      <div class="uk-card-body">
                        <h3 class="uk-card-title"> <?php the_sub_field('title'); ?></h3>
                        <p><?php the_sub_field('caption'); ?></p>
                        <a href="<?php the_sub_field('url'); ?>" class="button uk-button uk-button-default uk-padding-remove" style="color:#000;">Read More <span uk-icon="icon:  sign-in"></span></a>
                      </div>
                  </div>
              </li>
            <? endwhile; else : endif; ?>

          </ul>

          <a class="prev_slide uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
          <a class="next_slide uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

      </div>

      <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

  </div>
    </div>
  </section>


<?php elseif( get_row_layout() == 'cta'): ?>

  <section class="cta"  uk-scrollspy="cls: uk-animation-fade;" >
  <div class="uk-container">
    <div class="uk-clearfix">
      <div class="uk-align-left uk-margin-remove uk-padding uk-padding-remove-horizontal uk-text-left">
        <h2 class="uk-margin-remove cta__title"><?php the_sub_field('title'); ?>
  </h2>
      </div>
      <div class="uk-align-right uk-margin-remove uk-padding uk-padding-remove-horizontal uk-text-right">
        <h2 class="uk-margin-remove">    <a href="<?php the_sub_field('button_url'); ?>" class="uk-button uk-button-default  cta__button"><?php the_sub_field('button_text'); ?>
  </a>
  </h2>

      </div>
    </div>
  </div>
  </section>





<?php
        endif;

    endwhile;

else :

    // no layouts found

endif;

?>

<!-- END main page  -->



<?php include'footer.php'; ?>
