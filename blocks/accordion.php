<?php
	if(get_sub_field('custom_html_id')) {
		$html_id = 'id="';
		$html_id .= get_sub_field('custom_html_id');
		$html_id .= '"';
	} else {
		$html_id = '';
	}

	if(get_sub_field('custom_html_class')) {
		$html_class = ' ' . get_sub_field('custom_html_class');
	} else {
		$html_class = '';
	}
?>
<section <?php echo $html_id; ?> class="block block-accordion<?php echo $html_class; ?>">
	<?php if (get_sub_field('section_heading')): ?>
	<div class="container">
		<div class="row">
			<div class="col">
			<?php the_sub_field('section_heading'); ?>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->
	<?php endif; ?>

	<div class="container">
		<div class="row">
			<div class="col">
			<?php $total_items = count(get_sub_field('items')); ?>
			<?php if( have_rows('items') ): ?>
				<div class="accordion-wrapper">
				<?php $i = 1; while ( have_rows('items') ) : the_row(); ?>
			 		<div class="item">
				 		<div class="item-title <?php if ($i==$total_items) { echo 'last-item';} ?>">
				 			<h3><?php the_sub_field('item_heading'); ?> <span class="accordion-toggle"></span></h3>
				 		</div>
			       		<div class="item-content">
			   				<?php the_sub_field('item_content'); ?>
			       		</div>
			       	</div>

			    <?php $i++; endwhile; ?>
				</div>
			<?php endif; ?>
			</div><!-- .col -->
  		</div><!-- .row -->
	</div><!-- .container -->
</section>
<!--accordion-->