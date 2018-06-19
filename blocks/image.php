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
<section <?php echo $html_id; ?> class="block imageblock<?php echo $html_class; ?>">
  <div class="image-media">
    <?php $bannerImage = get_sub_field('image_image_image_upload'); ?>
    <div class="image-img" style="background-image: url('<?php echo $bannerImage['url']; ?>');"></div><!--banner-img-->
  </div><!--image-media-->
</section>
<!--image-->
