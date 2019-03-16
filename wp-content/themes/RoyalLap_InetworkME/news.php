<?php /* Template Name: News Page */ ?>
<?php include'header.php'; ?>


<section class="section">
  <div class="uk-container">
    <div class="uk-grid uk-grid-match">
      <?php

      // check if the repeater field has rows of data
      if( have_rows('news') ):

       	// loop through the rows of data
          while ( have_rows('news') ) : the_row();?>
          <div class="uk-width-1-2 uk-margin-bottom">
            <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <img src="<?php the_sub_field('thumbnail'); ?>" alt="">
                        </div>
                        <div class="uk-card-body">
                          <h3 class="uk-card-title"><?php the_sub_field('title'); ?></h3>
                          <p><?php the_sub_field('caption'); ?></p>
                          <button class="button uk-button uk-button-default uk-padding-remove" style="color:#000;">Read More <span uk-icon="icon:  sign-in" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="sign-in"> <polygon points="7 2 17 2 17 17 7 17 7 16 16 16 16 3 7 3"></polygon> <polygon points="9.1 13.4 8.5 12.8 11.28 10 4 10 4 9 11.28 9 8.5 6.2 9.1 5.62 13 9.5"></polygon></svg></span></button>
                        </div>
                    </div>
          </div>


<? endwhile;
      else :
      // no rows found
      endif; ?>









    </div>
  </div>
</section>
<?php include'footer.php'; ?>
