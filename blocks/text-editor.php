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
<section <?php echo $html_id; ?> class="block text-editor<?php echo $html_class; ?>">
  <div class="row">
    <div class="small-12 columns">
        <?php the_sub_field('text_editor_content_editor'); ?>
    </div><!--columns-->
  </div><!--row-->
</section>
<!--text-editor-->
