<?php /* Template Name: Media Page */ ?>
<?php include'header.php'; ?>
<?php include'herosection.php'; ?>

<section class="section">
  <div class="uk-container">
      <?php

      // check if the repeater field has rows of data
      if( have_rows('media') ):

        // loop through the rows of data
          while ( have_rows('media') ) : the_row();?>

          <div class="uk-grid uk-grid-match uk-text-center">
      <div class="uk-card card uk-padding uk-box-shadow-hover-medium  uk-flex uk-flex-middle uk-width-expand">
        <div class="uk-width-1-3 uk-margin-bottom" uk-scrollspy="cls: uk-animation-slide-bottom;">
          <img class="" src="<?php the_sub_field('media_logo'); ?>" width="100%">


        </div>
        <div class="uk-width-1-3 uk-margin-bottom" uk-scrollspy="cls: uk-animation-slide-bottom;">
          <div class="uk-text-left uk-margin-left">
            <h3 class=""><?php the_sub_field('title'); ?></h3>
            <p><?php the_sub_field('caption'); ?></p>
          </div>
        </div>
        <div class="uk-width-1-3 uk-margin-bottom" uk-scrollspy="cls: uk-animation-slide-bottom;">
          <div class="uk-text-right">
            <a class="youtube__button" href="<?php the_sub_field('media_url'); ?>"> Check Our Videos </a>
          </div>
        </div>
      </div>
    </div>

      <? endwhile;
          else :
          // no rows found
          endif; ?>









  </div>
</section>
<?php include'footer.php'; ?>
