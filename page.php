<?php get_header(); ?>
	<div id="main">
		<h1 class="c64User"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
		<div id="meta">
			<?php the_author(); ?> |
			<?php the_date('d.m.Y'); ?> |
			<?php the_category(', '); ?>
		</div>
		<div class="entry">
			<?php the_content(); ?>
		</div>
	</div><!-- main -->

	<div id="sidebar">
		<?php get_sidebar(); ?>
	</div><!-- sidebar -->
<?php get_footer(); ?>