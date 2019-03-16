<?php /* Template Name: About Us Page */ ?>
<?php include'header.php'; ?>
<?php include'herosection.php'; ?>
<section class="section">
  <div class="uk-container">
    <div class="uk-grid uk-flex uk-flex-middle">

      <div class="uk-width-1-2">
        <h3>
          <?php the_field('title'); ?>
        </h3>
        <hr class="hr hr_size_medium hr_border_yellow">
        <b>
          <?php the_field('caption'); ?></b>
      </div>
      <div class="uk-width-1-2 uk-text-right">
        <img width="80%" src="<?php the_field('image'); ?>" alt="">

      </div>
    </div>


    <div class="uk-grid uk-grid-match uk-text-center">


      <?php

   // check if the repeater field has rows of data
   if( have_rows('why_us') ):

     // loop through the rows of data
       while ( have_rows('why_us') ) : the_row();?>
      <div class="uk-width-1-3 uk-margin-bottom" uk-scrollspy="cls: uk-animation-slide-bottom;">
        <div class="uk-card card uk-box-shadow-hover-medium">
          <img class="uk-padding-small" src="<?php the_sub_field('thumbnail'); ?>" width="100%" alt="Border rounded">
          <div class="uk-padding-small">
            <h3 class="">
              <?php the_sub_field('title'); ?>
            </h3>
            <p class="uk-text-justify">
              <?php the_sub_field('caption'); ?>
            </p>

          </div>

        </div>
      </div>

      <?
                endwhile;

            else :

                // no rows found

            endif;

            ?>










    </div>
  </div>
</section>
<?php include'footer.php'; ?>
