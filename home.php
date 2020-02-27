<?php get_header(); ?>

  <div class="intro">
    <h1>Latest articles</h1>
  </div>

  <ul>
    <?php
      while ( have_posts() ) :
        the_post(); ?>

          <li>
            <article>
              <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
              <span>
                <time><?php the_date() ?></time> by <?php the_author(); ?>
              </span>
              <?php if ( has_excerpt() ) : ?>
                <p><?php echo get_the_excerpt(); ?></p>
              <?php endif; ?>
            </article>
          </li>

    <?php endwhile; ?>
  </ul>
</main>

<?php get_footer(); ?>