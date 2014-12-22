<?php
/* Template Name: [blog] */
?>

<?php get_header(); ?>
	<div id="content">

		<div class="main">
			        <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                         <div class="post">
                              <h1 class="title"><?php the_title(); ?></h1>

                              <?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?>

                              <?php the_content(); ?>
                         </div><!-- /.post -->

                    <?php endwhile; ?>

                    <?php else : ?>

                        <h2 class="title">There is no article.</h2>


                    <?php endif; ?>


		</div>
	</div>

<?php get_footer(); ?>