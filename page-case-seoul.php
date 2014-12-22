<?php
/* Template Name: [Seoul] */
?>

<?php get_header(); ?>

	<div id="content">
		<div class="banner-city">
			<img src="<?php echo get_template_directory_uri(); ?>/images/banner_seoul.jpg" alt="tokyo">
		</div>

		<div class="main">
			<aside class="sub-city">
				<div class="title">
					<h5>Case Study</h5>
				</div>
				<div class="city-list">
					<div class="line"></div>
					<ul>
						<li><a href="">Tokyo, Japan <img src="<?php echo get_template_directory_uri(); ?>/images/dot_orange.png" alt="not current page icon"></a></li>
						<li><a href="">Seoul, S.Korea <img src="<?php echo get_template_directory_uri(); ?>/images/dot_green.png" alt="current page icon"></a></li>
						<li><a href="">Mexico City, Mexico <img src="<?php echo get_template_directory_uri(); ?>/images/dot_orange.png" alt="not current page icon"></a></li>

					</ul>
				</div>
			</aside>

			<section class="report">
				<article>

					<?php if(have_posts()): while(have_posts()): the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<section>
					<?php the_content(); ?>
					<?php endwhile; endif; ?>
					</section>
				</article>
			</section>

		</div>
	</div>

<?php get_footer(); ?>