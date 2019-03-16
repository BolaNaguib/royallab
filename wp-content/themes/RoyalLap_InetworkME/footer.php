  <?php if( have_rows('social_media', 'option') ): ?>

    <div class="socialmedia uk-text-center">

    <?php while( have_rows('social_media', 'option') ): the_row(); ?>

      <div class="socialicon" style="background-color:#<?php the_sub_field('background_color'); ?>;">
        <a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('icon'); ?></a>
      </div>

    <?php endwhile; ?>
  </div>


<?php endif; ?>






<div class="hotline uk-text-center">
  <h1 class="uk-margin-remove">16064</h1>
  <span>Hotline</span>
</div>
<footer>
  <section class="upfooter">
    <div class="uk-container">
      <div class="uk-grid">
      <div class="uk-width-1-3">
        <h3 class="footer__title"> <?php the_field('footer_1st_coloumn_title','option'); ?> </h3>
        <hr class="footer__title__hr">
        <?php if( have_rows('footer_1st_coloumn', 'option') ): ?>

          <ul class="uk-list ">
            <?php while( have_rows('footer_1st_coloumn', 'option') ): the_row();
            if( get_row_layout() == 'links' ): ?>
                <li><a class="footer__link" href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_text'); ?></a></li>
            <?php endif; endwhile; ?>
            </ul>
        <?php endif; ?>


      </div>
      <div class="uk-width-1-3">
        <h3 class="footer__title"> <?php the_field('footer_2nd_coloumn_title' , 'option'); ?> </h3>
        <hr class="footer__title__hr">
        <?php if( have_rows('footer_2nd_coloumn', 'option') ): ?>

          <ul class="uk-list ">
            <?php while( have_rows('footer_2nd_coloumn', 'option') ): the_row();
            if( get_row_layout() == 'links' ): ?>
                <li><a class="footer__link" href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_text'); ?></a></li>
            <?php endif; endwhile; ?>
            </ul>
        <?php endif; ?>


      </div>
      <div class="uk-width-1-3">
        <h3 class="footer__title"> <?php the_field('footer_3rd_coloumn_title','option'); ?> </h3>
        <hr class="footer__title__hr">
        <?php if( have_rows('footer_3rd_coloumn', 'option') ): ?>

          <ul class="uk-list ">
            <?php while( have_rows('footer_3rd_coloumn', 'option') ): the_row();
            if( get_row_layout() == 'links' ): ?>
                <li><a class="footer__link" href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_text'); ?></a></li>
            <?php endif; endwhile; ?>
            </ul>
        <?php endif; ?>


      </div>
      </div>
    </div>
  </section>
<section class="downfooter">
  <div class="uk-container">
    <div class="uk-grid">
      <div class="uk-width-1-2">
        All Copy Rights Reserved

      </div>
      <div class="uk-width-1-2 uk-text-right">
        Developed by Inetwork-ME
      </div>
    </div>
  </div>
</section>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit-icons.min.js"></script>
<script>
function hideLoader() {
  $('#loading').hide();
}

$(window).ready(hideLoader);

// Strongly recommended: Hide loader after 20 seconds, even if the page hasn't finished loading
setTimeout(hideLoader, 20 * 1000);
</script>
    </body>
</html>
