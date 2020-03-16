<?php get_header(); ?>

<?php get_template_part('hero') ?>

<div class="posts">
  <ul>
    <?php while (have_posts()) : the_post(); ?>
      <li>
        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <span>
          <time><?php the_date() ?></time><span aria-hidden> • </span><?php the_author(); ?>
        </span>
        <?php if (has_excerpt()) : ?>
          <p><?php the_excerpt(); ?></p>
        <?php endif; ?>
      </li>
    <?php endwhile; ?>
  </ul>
</div>
</main>

<?php get_footer(); ?>