<?php get_header(); ?>

<div class="container" id="mycontent">
	<div class="row">
		<div class="col-xs-12" id="">

  

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
	  	<?php the_content(); ?>

	  	<hr>
		<?php // comments_template(); ?>

		<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
		<?php endif; ?>


		</div>	
	</div>
</div>

<?php get_footer(); ?>