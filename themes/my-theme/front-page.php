<?php get_header();

while (have_posts()) {
    the_post(); ?>

<h1><?php the_title(); ?></h1>
<h2>Hello from front-page.php</h2>
<p><?php the_content(); ?></p>

<?php
}

get_footer(); ?>