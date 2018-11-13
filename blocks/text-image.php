<?php

  $image_position = get_sub_field();

  if($image_position === 'image-right') {
    $text_position = 'col-lg-5 order-lg-2';
  } else {
    $text_position = 'col-lg-5 offset-lg-7';
  }

?>


<section class="block text-image">
  <div class="text-image-wrap">
    <div class="container">
      <div class="text-image-img image-right col-lg-6" style="background-image: url(<?php bloginfo('template_url'); ?>/img/img2.jpg);"></div>
      <div class="row">
        <div class="text-image-content col-lg-5 order-lg-2">
          <h2>A brief history</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit eget leo tempus placerat. Quisque cursus pellentesque neque sit amet elementum. Ut iaculis velit erat, et scelerisque velit tincidunt non. Curabitur eget nisl a mi viverra finibus.</p>
          <p>Proin purus ex, porttitor at purus ut, vestibulum viverra lorem. Quisque suscipit tellus ut augue maximus, id blandit erat sodales. Nullam sed mi purus.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="block text-image">
  <div class="text-image-wrap">
    <div class="container">
      <div class="text-image-img image-left col-lg-6" style="background-image: url(<?php bloginfo('template_url'); ?>/img/img2.jpg);"></div>
      <div class="row">
        <div class="text-image-content col-lg-5 offset-lg-7">
          <h2>A brief history</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit eget leo tempus placerat. Quisque cursus pellentesque neque sit amet elementum. Ut iaculis velit erat, et scelerisque velit tincidunt non. Curabitur eget nisl a mi viverra finibus.</p>
          <p>Proin purus ex, porttitor at purus ut, vestibulum viverra lorem. Quisque suscipit tellus ut augue maximus, id blandit erat sodales. Nullam sed mi purus.</p>
        </div>
      </div>
    </div>
  </div>
</section>
