<?php /* Template Name: Our Staff Page */ ?>
<?php include'header.php'; ?>
<?php include'herosection.php'; ?>


<section class="section">
  <div class="uk-container">
    <div class="uk-grid uk-grid-match uk-text-center">

      <?php

      // check if the repeater field has rows of data
      if( have_rows('staff') ):

        // loop through the rows of data
          while ( have_rows('staff') ) : the_row();?>

      <div class="uk-width-1-3 uk-margin-bottom" uk-scrollspy="cls: uk-animation-slide-bottom;">
        <div class="uk-card card uk-padding uk-box-shadow-hover-medium">
          <img class="uk-border-circle staff__thumbnail" src="<?php the_sub_field('picture'); ?>" width="100%" alt="Border rounded">
          <h3 class="staff__title">
            <?php the_sub_field('name'); ?>
          </h3>
          <p>
            <?php the_sub_field('job'); ?>
          </p>

        </div>
      </div>


      <?   endwhile;
            else :
            // no rows found
            endif; ?>








    </div>
  </div>
</section>

<?php include'footer.php'; ?>
