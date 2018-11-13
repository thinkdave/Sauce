<?php get_header(); ?>

<?php get_template_part( 'blocks/text-image' ); ?>

	<div class="content-area container">
		<div class="row">
	    <div class="col-sm">
	    <?php while ( have_posts() ) : the_post(); ?>

	    <?php get_template_part( 'template-parts/content', 'page' ); ?>

	    <?php endwhile; ?>

		</div><!--col-sm-->
		</div><!--row-->
	</div><!--container-->

<?php get_footer(); ?>
