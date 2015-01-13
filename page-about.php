<?php
/* Template Name: [About] */
?>

<?php get_header(); ?>

	<div id="content">
		<div class="slider">
			<ul class="slider__wrapper">
				<li class="slider__item"><img src="<?php echo get_template_directory_uri(); ?>/images/slide-about.jpg" alt="SDNK Research Group"></li>
			</ul>
		</div>

		<div class="main">
			<div class="about-col profile">
				<h2>The Team</h2>
				<div class="members">
					<section class="member">
						<img src="<?php echo get_template_directory_uri(); ?>/images/profile.png" alt="">
						<h3>Dago Agazino</h3>
						<p>Graphics</p>
					</section>
					<section class="member">
						<img src="<?php echo get_template_directory_uri(); ?>/images/profile.png" alt="">
						<h3>Kei Yamagishi</h3>
						<p>Coding</p>
					</section>
					<section class="member">
						<img src="<?php echo get_template_directory_uri(); ?>/images/profile.png" alt="">
						<h3>Nan Zheng</h3>
						<p>Interface Design</p>
					</section>
					<section class="member">
						<img src="<?php echo get_template_directory_uri(); ?>/images/profile.png" alt="">
						<h3>Sean Jeon</h3>
						<p>Project Manager</p>
					</section>
				</div>
			</div>
			<div class="about-col purpose">
				<h2>The Purpose</h2>
				<p>The primary purpose of Urban Traffic Research Project by SDNK Research Group is inform how other mega cities handle transit issues related with population growing to Transit Canada and general public who live in Greater Vancouver area.</p>
			</div>


		</div>
	</div>

<?php get_footer(); ?>