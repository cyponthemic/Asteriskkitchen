<?php global $post; ?>
<?php
$small_thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small-slider', false, '' );
$medium_thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium-slider', false, '' );
$large_thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large-slider', false, '' );
if(is_woocommerce()):
$small_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(296), 'small-slider', false, '' );
$medium_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(296), 'medium-slider', false, '' );
$large_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(296), 'large-slider', false, '' );
endif;

?>

<div class="swiper-container">
        <div class="swiper-wrapper">
        	<?php 
        	
	        	echo '<div class="swiper-slide slide-1" data-interchange="';
	        	echo '['.$small_thumb[0].',(small)], ';
				echo '['.$medium_thumb[0].',(medium)], ';
				echo '['.$large_thumb[0].',(large)] ';
				echo '"></div>';
        	?>
          <?php if(!is_woocommerce()): ?> 
          <?php 
          if( class_exists('Dynamic_Featured_Image')) {
          		echo 'il ya des images';
		       global $dynamic_featured_image;
		       $featured_images = $dynamic_featured_image->get_featured_images( );
			   foreach ($featured_images as $bkg):
			   $smallSizedSlider = $dynamic_featured_image->get_image_url($bkg['attachment_id'], 'small-slider');
			   $mediumSizedSlider = $dynamic_featured_image->get_image_url($bkg['attachment_id'], 'medium-slider');
			   $largeSizedSlider = $dynamic_featured_image->get_image_url($bkg['attachment_id'], 'large-slider');
			   echo '<div class="swiper-slide slide-1" data-interchange="';
			   echo '['.$smallSizedSlider.',(small)], ';
			   echo '['.$mediumSizedSlider.',(medium)], ';
			   echo '['.$largeSizedSlider.',(large)] ';
			   echo '"></div>';
			   endforeach;
			  
			}
		  endif; 
		  ?>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
</div>