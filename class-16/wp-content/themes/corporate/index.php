<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Theme Development Basics</h2>

    <?php

    if (have_posts()) {
        while (have_posts()): the_post();
            
            // the_post_thumbnail();
            // the_title( '<h2>', after: '</h2>' );
            // the_content();
            // the_excerpt();

            // next_post_link();
            // previous_post_link();
            // the_category();
            // the_author();
            // the_ID();
            // the_meta();
            // the_shortlink();
            // the_tags();
            // the_time();

        endwhile;
    }

    ?>

</body>

</html>