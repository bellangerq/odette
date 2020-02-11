<?php $locale = explode('_', get_locale())[0] ?>
<html lang="<?php echo $locale; ?>">

  <head><?php wp_head(); ?></head>
  <body>
    <?php get_header(); ?>

    <main id="main">
      <article>
        <?php
          while ( have_posts() ) :
            the_post(); ?>

          <header>
            <h2><?php echo get_the_title(); ?></h2>
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
  </body>
</html>