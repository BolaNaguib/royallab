<?php /* Template Name: Branches Page */ ?>
<?php include'header.php'; ?>
<?php include'herosection.php'; ?>

<section class="section">
  <div class="uk-container">
    <ul class="uk-flex-center" uk-tab>
      <?php

      // check if the repeater field has rows of data
      if( have_rows('branches') ):

        // loop through the rows of data
          while ( have_rows('branches') ) : the_row();?>

      <li><a href="#">
          <h1 class="location__icon uk-margin-remove"><span uk-icon="icon: location"></span></h1>
          <h2 class="location__text uk-margin-remove">
            <?php the_sub_field('branch_city'); ?>
          </h2>

        </a>


      </li>
      <? endwhile;
                    else :
                    // no rows found
                    endif; ?>

    </ul>

    <ul class="uk-switcher uk-margin">
      <?php

  // check if the repeater field has rows of data
  if( have_rows('branches') ):

    // loop through the rows of data
      while ( have_rows('branches') ) : the_row();?>
      <li>
        <div class="uk-grid">
          <?php

  // check if the repeater field has rows of data
  if( have_rows('branch') ):

    // loop through the rows of data
      while ( have_rows('branch') ) : the_row();?>
          <div class="uk-width-1-2 uk-margin-bottom">
            <div class="uk-card card uk-card-default uk-padding-small">
              <div class="mapframe">
                <?php the_sub_field('iframe'); ?>

              </div>
              <h3 class="uk-margin-small">
                <?php the_sub_field('name'); ?>
              </h3>
              <span>
                <?php the_sub_field('address'); ?></span>
            </div>

          </div>
          <? endwhile;
      else :
      // no rows found
      endif; ?>

        </div>

      </li>
      <? endwhile;
        else :
        // no rows found
        endif; ?>






    </ul>
  </div>
</section>
<?php include'footer.php'; ?>




<ul>1
  <li>2
    <ul>3
      <li>4
        <ul>5
          <li>6
            
          </li>
        </ul>
      </li>
    </ul>
  </li>
</ul>
