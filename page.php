<?php get_header(); ?>
  <div id="content">
    <?php if (have_posts()): ?>
      <?php while (have_posts()): ?>
        <?php the_post(); ?>
        <h1 class="c64User"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
        <div id="meta">
          <?php the_author(); ?> |
          <?php the_date('d.m.Y'); ?>
        </div>

        <article class="page entry">
          <?php the_content(); ?>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
<?php
  get_sidebar();
  get_footer();
?>