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
<section <?php echo $html_id; ?> class="block columns-four<?php echo $html_class; ?>">
	<div class="container">
		<div class="row">

			<div class="col-lg-3 columns-four--one">
				<?php the_sub_field('columns_four_one'); ?>
			</div>

			<div class="col-lg-3 columns-four--two">
				<?php the_sub_field('columns_four_two'); ?>
			</div>

			<div class="col-lg-3 columns-four--three">
				<?php the_sub_field('columns_four_three'); ?>
			</div>

      		<div class="col-lg-3 columns-four--four">
				<?php the_sub_field('columns_four_four'); ?>
			</div>

		</div>
	</div>
</section>
