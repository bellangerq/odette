<article class="blog-post">
  <?php if ( is_single() ) { ?>
    <h2 class="blog-post-title"><?php echo get_the_title() ?></h2>
  <?php } else { ?>
    <h2 class="blog-post-title"><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a></h2>
  <?php } ?>
	<span>
    <time><?php echo get_the_date() ?></time> by <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>"><?php the_author(); ?></a>
  </span>

  <?php
    if ( is_single() ) {
      echo get_the_content();
    }
  ?>
</article>