<?php get_header(); ?>

<?php get_template_part('hero') ?>

<div class="posts">
  <ul>
    <?php while (have_posts()) : the_post(); ?>
      <li class="post">
        <a class="post-link" href="<?php the_permalink() ?>">
          <h2><?php the_title() ?></h2>
          <span>
            <time><?php the_date() ?></time><span aria-hidden="true"> • </span><?php the_author(); ?>
          </span>
          <?php if (has_excerpt()) : ?>
            <p><?php the_excerpt(); ?></p>
          <?php endif; ?>
        </a>
        <?php tags() ?>
      </li>
    <?php endwhile; ?>
  </ul>
</div>

<?php pagination() ?>

</main>

<?php get_footer(); ?>