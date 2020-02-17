<?php
$post_id = get_the_ID();
$terms = get_the_terms($post_id, 'Project Type');

foreach ($terms as $term) {

    echo $term->name . '<br>';
}
if (have_posts()) : while (have_posts()) : the_post();;
        echo "<h1>";
        the_title();
        echo "</h1>";
        echo '<div>';
        the_content();
        the_terms($post_id, '');
        echo '</div>';
    if (has_post_thumbnail()) {
        echo '<div>';

        the_post_thumbnail();
        echo '</div>';
    }

    endwhile;
endif;

