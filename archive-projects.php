

<h1>All projectss</h1

<?php
if(have_posts()) : while(have_posts()) : the_post();
    echo "<h1>";
    the_title();
    echo "</h1>";
    echo '<div>';
    the_content();
    
    echo '</div>';
    ?>
    <a href="<?php the_permalink(); ?>">link to project</a>
    <?php
 


endwhile; endif;

?>