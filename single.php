  <?php get_header(); ?>

  <article class="post">
    <?php
    while (have_posts()) :
      the_post(); ?>

      <header class="content-header">
        <h1><?php echo get_the_title() ?></h1>
        <span class="content-metadata">
          <time><?php the_date() ?></time> by <?php the_author(); ?>
        </span>
      </header>

      <div class="content-body">
        <?php the_content(); ?>
      </div>

    <?php endwhile; ?>
  </article>
  </main>

  <?php get_footer(); ?>

  </html>