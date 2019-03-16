<?php /* Template Name: Careers Page */ ?>
<?php include'header.php'; ?>



<section class="section">
  <div class="uk-container">
    <div class="uk-grid">


      <div class="uk-width-1-2">
        <ul uk-accordion>
          <?php

      // check if the repeater field has rows of data
      if( have_rows('careers') ):

        // loop through the rows of data
          while ( have_rows('careers') ) : the_row();?>

            <li>
                <a class="uk-accordion-title" href="#"><?php the_sub_field("job_title"); ?></a>
                <div class="uk-accordion-content">
                  <ul>
                    <?php

                // check if the repeater field has rows of data
                if( have_rows('job_requirements') ):

                  // loop through the rows of data
                    while ( have_rows('job_requirements') ) : the_row();?>

                <li><span dir="ltr"><strong><?php the_sub_field("requirement"); ?></strong></span></li>
<? endwhile;
      else :
      // no rows found
      endif; ?>

</ul>
                </div>
            </li>
          <? endwhile;
                else :
                // no rows found
                endif; ?>


        </ul>
      </div>
      <div class="uk-width-1-2">
        <?php echo do_shortcode('[contact-form-7 id="84" title="Untitled"]'); ?>
      </div>
    </div>
  </div>
</section>





<?php include'footer.php'; ?>
