<html>
<head><?php wp_head(); ?></head>
<body>
<h1>Odette</h1>
<p>A minimal WordPress theme.</p>
<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        the_title( '<h2>', '</h2>' );
        the_content();
    }
}
wp_footer();
?>
</body>
</html>