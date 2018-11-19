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
	
	$a = get_sub_field('custom_html_class');
	if (strpos($a, 'reverse') !== false) {
		$text_position = 'col-lg-5 order-lg-2';
		$image_position = 'image-right';
	}else{
		$text_position = 'col-lg-5 offset-lg-7';
		$image_position = 'image-left';
	}
?>


<section class="block text-image">
  <div class="text-image-wrap">
    <div class="container">
    	<?php $bgImage = get_sub_field('image'); ?>
      <div class="text-image-img col-lg-6 <?php echo $image_position; ?>" style="background-image: url(<?php echo $bgImage['url']; ?>)"></div>
      <div class="row">
        <div class="text-image-content <?php echo $text_position; ?>">
          	<?php the_sub_field('content');?>
        </div>
      </div>
    </div>
  </div>
</section>