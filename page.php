<?php get_header(); ?>

	<div class="content-area row">
    <div class="small-12 columns">
    <?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'template-parts/content', 'page' ); ?>

    <?php endwhile; ?>

    </div><!--columns-->
	</div><!--content-area-->

<?php get_footer(); ?>
