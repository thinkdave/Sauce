<?php
/* Template Name: Blocks Page Builder */
get_header(); ?>

	<div class="blocks content-area">
		<?php

		if( have_rows('blocks')) : while(have_rows('blocks')) : the_row();

			if(get_row_layout() == 'block_hero') :
			get_template_part('blocks/hero');

			elseif(get_row_layout() == 'block_imagebox') :
			get_template_part('blocks/image-box');

			elseif(get_row_layout() == 'block_editor') :
			get_template_part('blocks/editor');

			else : endif;

		endwhile; endif;

		?>
	</div><!--blocks-->

<?php get_footer(); ?>
