<?php
/* Template Name: Blocks Page Builder */
get_header(); ?>

	<div class="blocks content-area">
		<?php

		if( have_rows('blocks')) : while(have_rows('blocks')) : the_row();

			if(get_row_layout() == 'block_hero') :
			get_template_part('blocks/hero');

			elseif(get_row_layout() == 'block_editor') :
			get_template_part('blocks/editor');
			
			elseif(get_row_layout() == 'block_text_image') :
			get_template_part('blocks/text-image');

			elseif(get_row_layout() == 'block_columns_two') :
			get_template_part('blocks/columns-two');

			elseif(get_row_layout() == 'block_columns_three') :
			get_template_part('blocks/columns-three');

			elseif(get_row_layout() == 'block_columns_four') :
			get_template_part('blocks/columns-four');

			elseif(get_row_layout() == 'block_columns_six') :
			get_template_part('blocks/columns-six');

			elseif(get_row_layout() == 'block_image_fullwidth') :
			get_template_part('blocks/image-fullwidth');

			elseif(get_row_layout() == 'block_accordion') :
			get_template_part('blocks/accordion');


			else : endif;

		endwhile; endif;

		?>
	</div><!--blocks-->

<?php get_footer(); ?>