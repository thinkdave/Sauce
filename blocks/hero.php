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
<section <?php echo $html_id; ?> class="block hero<?php echo $html_class; ?>">
  <div class="hero-media">
    <?php $heroImage = get_sub_field('image'); ?>
    <div class="hero-img" style="background-image: url('<?php echo $heroImage['url']; ?>');"></div><!--hero-img-->
  </div><!--hero-media-->
  <div class="row">
    <div class="small-12 large-6 large-offset-3 columns end">
      <div class="valign">
        <?php the_sub_field('content'); ?>
      </div><!--valign-->
    </div><!--columns-->
  </div><!--row-->
</section>
<!--hero-->
