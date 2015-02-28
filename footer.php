
<!--
<footer class="row">
	<?php do_action('foundationPress_before_footer'); ?>
	<?php dynamic_sidebar("footer-widgets"); ?>
	<?php do_action('foundationPress_after_footer'); ?>
	
</footer>
-->
	<footer class="row social-bar">
			<div id="social" class="large-7 medium-8 columns opacity-white">
				<div class="inner">
				<hr>
				<a href="https://twitter.com/asteriskkitchen">
					<i class="fa fa-twitter"></i>
				</a> 
			
				<a href="http://www.facebook.com/AsteriskKitchen?fref=ts" >
					
					<i class="fa fa-facebook-official"></i>
				</a> 
				</		
			</div>
	</footer><!-- #colophon -->

</section>	

<a class="exit-off-canvas"></a>
	
	<?php do_action('foundationPress_layout_end'); ?>
	<?php get_template_part('parts/background-slider'); ?>
	</div>
</div>



<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>

    <!-- Swiper JS -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
       
        direction: 'horizontal',
        speed:1000,
        autoplay:5000
    });
    </script>
</body>
</html>
