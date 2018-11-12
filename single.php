<?php get_header(); ?>

	<div class="content-area container">
		<div class="row">
			<div class="col-sm">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

	  </div><!--col-sm-->
	</div><!--row-->
</div><!--container -->

<?php get_footer(); ?>
