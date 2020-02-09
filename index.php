<html lang="<?php echo explode('_', get_locale())[0] ?>">

<head><?php wp_head(); ?></head>

<body>
    <?php get_header() ?>
    <hr>
    <main id="main">
        <?php
            if ( have_posts() ) {
                // Load posts loop.
                while ( have_posts() ) {
                    the_post();
                    get_template_part( 'content', get_post_format() );
                }
            }
        ?>
    </main>
    <hr>
    <?php get_footer() ?>
</body>

</html>