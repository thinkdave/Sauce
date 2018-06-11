<?php get_header(); ?>

<div class="content">
	<div class="row">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('small-12 columns'); ?>>
		<?php the_excerpt(); ?>
	</article>

	<?php endwhile; ?>

	<?php else : ?>

	<?php endif; ?>
	</div><!--/row-->
</div><!--/content-->

<?php get_footer(); ?>
