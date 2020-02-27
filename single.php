  <?php get_header(); ?>

    <article>
      <?php
        while ( have_posts() ) :
          the_post(); ?>

        <header>
          <h1><?php echo get_the_title(); ?></h1>
          <span>
            <time><?php the_date() ?></time> by <?php the_author(); ?>
          </span>
        </header>

        <div>
          <?php the_content(); ?>
        </div>

      <?php endwhile; ?>
    </article>
  </main>

  <?php get_footer(); ?>
</html>