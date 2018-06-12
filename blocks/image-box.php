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
<section <?php echo $html_id; ?> class="block image-box<?php echo $html_class; ?>">
  <div class="image-box-media">
    <?php $bgImage = get_sub_field('image_box_bg_image_upload'); ?>
    <div class="image-box-img" style="background-image: url('<?php echo $bgImage['url']; ?>');"></div><!--image-box-img-->
  </div><!--image-box-media-->
  <div class="row">
    <div class="small-12 medium-6 medium-offset-6 large-5 large-offset-7 columns">
      <div class="valign">
        <?php the_sub_field('image_box_content_editor'); ?>
      </div><!--valign-->
    </div><!--columns-->
  </div><!--row-->
</section>
<!--image-box-->
