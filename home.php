<?php get_header(); ?>

<div class="row">
  	<div class="col-md-12" id="funfont">
	<h2>32Hertz.com</h2>
	</div>

  	<div class="jumbotron" id = "myjumbo">
	<h1 class="text-center">Articles</h1>
	</div>


    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
    	<p><em><?php the_time('l, F jS, Y'); ?></em></p>
    
    	<?php endwhile; else: ?>
      	<p><?php _e('Sorry, there are no posts.'); ?></p>
    	<?php endif; ?>

</div>

<?php get_footer(); ?>