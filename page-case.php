<?php
/* Template Name: [Case] */
?>

<?php get_header(); ?>

	<div id="content">
		<div class="banner-title">
			<h1>Case Study</h1>
		</div>
		<div class="banner-case">
			<div class="banner-case-pic">
				<img src="<?php echo get_template_directory_uri(); ?>/images/banner_case.png" alt="Case Study page">
			</div>
			<div class="banner-case-des">
				<p>Our case studies mainly focus on three typical large cities: Tokyo, Seoul, and Mexico City with a population between 8 and 14 million.
					The case studies show how their urban traffic situations are and provide an analysis of urban traffic management and control in each city.
					More case studies will be added in the future.</p>
			</div>
		</div>

		<div class="main">
			<div class="case-col tokyo">
				<article>
					<h2>Tokyo, Japan</h2>
					<p>Tokyo has been solving its problems in public transit by developing technologies and operations to sustain tens of million users, especially trains and subway.<a href="http://urbantraffic.info/case-tokyo">Read More</a></p>
				</article>
			</div>

			<div class="case-col seoul">
				<article>
					<h2>Seoul, S.Korea</h2>
					<p>Seoul has a great urban public transportation system to handling about a million people per day. They have done massive upgrade in 2004. After then, the usage of the public transportation rate in Seoul increased 30%. Seoul public transportation uses lots of high technology from seatlight tracking to payment system.<a href="http://urbantraffic.info/case-seoul">Read More</a></p>
				</article>
			</div>

			<div class="case-col mexico">
				<article>
					<h2>Mexico City, Mexico</h2>
					<p>Mexico City Metro is a rapid transit system serving the Greater Mexico City area in the Latin American country. It is the world's 8 busiest metro and North America's second largest rapid transit system. <a href="http://urbantraffic.info/case-mexico">Read More</a></p>
				</article>
			</div>

		</div>
	</div>

<?php get_footer(); ?>