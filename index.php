<?php get_header(); ?>
<div class="clearfix"></div>
			<?php $slider = new WP_Query(array('post_type' => 'slider', 'order' => 'ASC', 'showposts' => -1)); ?>
			<?php if ($slider->have_posts() ) : ?>
			<section class="slider">
				<div class="fade">
					<?php while ($slider->have_posts() ) : $slider->the_post(); ?>
					<div class="podslider">
						<div class="textslider"><h1><?php the_title(); ?></h1></div>
						<div class="textslider1"><?php the_content(); ?></div>
						<?php the_post_thumbnail('full', array ('class'=>"slide"));?>
					</div>
				<?php endwhile; ?>
				</div>
			</section>
			<?php else: ?>
				<p>Место под слайдер</p>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
			<div class="clearfix"></div>
			
			<?php if (have_posts() ) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<section class="content">
					<div class="podtext">	
					<div class="podtext1">
						<span class="podtext-op">Оборот более<br> <span class="podtext-op-vid">1,3</span> млрд. руб.</span>
					</div>
				</div>
				<div class="podtext">
					<div class="podtext1">
						<span class="podtext-op"><span class="podtext-op-vid">300 000</span><br> единиц<br> спецтехники</span>
					</div>
				</div>
				<div class="podtext">
					<div class="podtext1">
						<span class="podtext-op">Базы <br>в <span class="podtext-op-vid">5</span> городах</span>
					</div>
				</div>
					</section>
				<?php endwhile; ?>
			<?php endif; ?>
				<?php wp_reset_query(); ?>
			
			<div class="clearfix"></div>
			<div class="bg"></div>
			<section class="content2">
				<div class="text">

						<div class="text-opis">
						<div class="zag">
						<h2><?php the_title(); ?></h2>
						</div>
							<?php the_excerpt(); ?>
							<div class="knopka"><a href="<?php the_permalink(); ?>" class="button-pod">Подробнее</a></div>
						</div>
					</div>
			</section>
			<section class="content">
				<div class="zag">
					<h2>Основные заказчики</h2>
				</div>
				<?php $slider_logo = new WP_Query(array('post_type' => 'slider_logo', 'order' => 'ASC', 'showposts' => -1)); ?>
			<?php if ($slider_logo->have_posts() ) : ?>
				<div class="zakaz">
					<?php while ($slider_logo->have_posts() ) : $slider_logo->the_post(); ?>
					<div class="zakaz-img">
						<?php the_post_thumbnail('full');?>
					</div>
				<?php endwhile; ?>
				</div>
			<?php else: ?>
				<p>Место под слайдер логотипов</p>
			<?php endif; ?>
			</section>
		</div>
		<div class="clearfix"></div>
<?php get_footer(); ?>