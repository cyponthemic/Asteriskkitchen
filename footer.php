
<!--
<footer class="row">
	<?php do_action('foundationPress_before_footer'); ?>
	<?php dynamic_sidebar("footer-widgets"); ?>
	<?php do_action('foundationPress_after_footer'); ?>
	
</footer>
-->
	
</section>	

<a class="exit-off-canvas"></a>
	
	<?php do_action('foundationPress_layout_end'); ?>
	<?php get_template_part('parts/background-slider'); ?>
	</div>
</div>



<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
	<?php if(!is_product()): ?>
    <!-- Swiper JS -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/swiper.js"></script>

    <!-- Initialize Swiper -->
    
    <script>
    var swiper = new Swiper('.swiper-container', {
       
        direction: 'horizontal',
        speed:1000,
        effect:'fade',
        autoplay:5000
    });
    </script>
    <?php endif; ?>
</body>
</html>
