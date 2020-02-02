<div class="blog-post">
  <?php if ( is_single() ) { ?>
    <h2 class="blog-post-title"><?php the_title() ?></h2>
  <?php } else { ?>
    <h2 class="blog-post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
  <?php } ?>
	<span><time><?php the_date() ?></time> by <?php the_author() ?></span>

  <?php the_content() ?>
</div>