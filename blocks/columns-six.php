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
<section <?php echo $html_id; ?> class="block columns-six<?php echo $html_class; ?>">
	<div class="container">
		<div class="row">

			<div class="col-lg-2 columns-six--one">
				<?php the_sub_field('columns_six_one'); ?>
			</div>

			<div class="col-lg-2 columns-six--two">
				<?php the_sub_field('columns_six_two'); ?>
			</div>

			<div class="col-lg-2 columns-six--three">
				<?php the_sub_field('columns_six_three'); ?>
			</div>

      <div class="col-lg-2 columns-six--four">
				<?php the_sub_field('columns_six_four'); ?>
			</div>

      <div class="col-lg-2 columns-six--five">
				<?php the_sub_field('columns_six_five'); ?>
			</div>

      <div class="col-lg-2 columns-six--six">
				<?php the_sub_field('columns_six_six'); ?>
			</div>

		</div>
	</div>
</section>
