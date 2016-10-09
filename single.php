<?php get_header(); ?>
  <div id="content">
    <?php if (have_posts()): ?>
      <?php while (have_posts()): ?>
        <?php the_post(); ?>
        <h1 class="c64User"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
        <div id="meta">
          erstellt am: <?php the_date('d.m.Y'); ?> |
          von: <?php the_author(); ?> |
          Kategorie(n): <?php the_category(', '); ?></p>
        </div>

        <article class="entry">
          <?php the_content(); ?>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>
  </div><!-- main -->
<?php
  get_sidebar();
  get_footer();
?>