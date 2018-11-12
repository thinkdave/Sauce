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
<section <?php echo $html_id; ?> class="block text-editor two-columns<?php echo $html_class; ?>">
  <div class="row">
    <?php while(have_rows('two_columns')) : the_row(); ?>
    <div class="small-12 large-6 columns">
        <div class="inner">
          <?php the_sub_field('content_editor'); ?>
        </div><!-- inner -->
    </div><!--columns-->
    <?php endwhile; ?>
  </div><!--row-->
</section>
<!--text-editor-->
