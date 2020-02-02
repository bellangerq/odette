<html>

<head><?php wp_head(); ?></head>

<body>
    <?php get_header() ?>
    <hr>
    <?php
        if ( have_posts() ) {

            // Load posts loop.
            while ( have_posts() ) {
                the_post();
                get_template_part( 'content', get_post_format() );
            }
        }
    ?>
    <hr>
    <?php get_footer() ?>
</body>

</html>