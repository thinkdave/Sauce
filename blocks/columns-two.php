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
<section <?php echo $html_id; ?> class="block columns-two<?php echo $html_class; ?>">
	<div class="container">
		<div class="row">

			<div class="col-lg-6 columns-two--one">
				<?php the_sub_field('columns_two_one'); ?>
			</div>

			<div class="col-lg-6 columns-two--two">
				<?php the_sub_field('columns_two_two'); ?>
			</div>

		</div>
	</div>
</section>
