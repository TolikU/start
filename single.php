<?php get_header(); ?>
	<div class="clearfix"></div>
	<section class="slider"></section>
	<section class="content3">
		<?php if(have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div class="zag">
			<h2><?php the_title(); ?></h2>
		</div>
		<div class="text">
			<div class="text-img">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="text-opis">
				<?php the_content(); ?>
			</div>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</section>
<?php get_footer(); ?>
