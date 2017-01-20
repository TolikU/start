<?php get_header(); ?>
  <div class="clearfix"></div>
      <section class="slider">
      </section>
      <section class="content3">
        <div class="zag">
          <h2><?php the_title();?></h2>
        </div>
        <div class="text">
          <div class="text-img">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="text-opis">
          <?php
            while ( have_posts() ) : the_post();
            the_content();
            endwhile; ?>

          </div>
        </div>
      </section>
    </div>
    <div class="clearfix"></div>
<?php get_footer(); ?>