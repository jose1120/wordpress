<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);

if(have_posts()):
    while(have_posts()):
        the_post(); 
        ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>


        <?php
    endwhile;

else:
    echo "<p>No content found</p>";
endif;



?>