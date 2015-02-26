<?php get_header(); ?>

<div class="row">
	<div class="small-12 medium-8 large-7 columns opacity-white" role="main">
	<div class="inner">
	<?php do_action('foundationPress_before_content'); ?>

	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header class="">
				<h1 class="entry-title center-elements"><?php the_title(); ?></h1>
			</header>
			<?php do_action('foundationPress_page_before_entry_content'); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			</article>
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>
	</div>
	</div>
	
</div>
<?php get_footer(); ?>
