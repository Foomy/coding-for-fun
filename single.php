<?php get_header(); ?>
<div id="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h1 class="c64User"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
	<div id="meta">
		erstellt am: <?php the_date('d.m.Y'); ?> |
		von: <?php the_author(); ?> |
		Kategorie(n): <?php the_category(', '); ?></p>
	</div>
	<article class="entry">
		<?php the_content(); ?>
	</article>
	<?php endwhile; endif; ?>
</div><!-- main -->

<div id="sidebar">
	<?php get_sidebar(); ?>
</div><!-- sidebar -->
<?php get_footer(); ?>