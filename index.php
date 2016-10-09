<?php get_header(); ?>
<div id="content">
	<?php if (have_posts()): ?>
		<?php while (have_posts()): the_post(); ?>
			<div class="entry">
				<h1 class="c64User noMarginBottom">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h1>
				<p class="small">
					<?php the_author_posts_link(); ?> |
					<?php the_date('Y-m-d'); ?> |
					<?php the_category(', '); ?>
				</p>
				<?php the_excerpt(); ?>
			</div>
		<?php endwhile; ?>

		<p style="text-align: center;">
			<?php next_post_link('&laquo; Ältere Einträge'); ?>
			<php
			<?php previous_posts_link('| Neuere Einträge &raquo;'); ?>
		</p>
	<?php endif; ?>
</div><!-- main -->

<aside>
	<?php get_sidebar(); ?>
</aside><!-- sidebar -->
<?php get_footer(); ?>
