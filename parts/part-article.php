 <?php
 $subpost_query = array(
        'posts_per_page' => 10,
        'orderby' => 'post_date'
    );

    $subposts = get_posts( $subpost_query );
    
    // get posts inside this subcategory
    foreach($subposts as $subpost){
        $subpost_id = $subpost->ID;
        $subpost_date = $subpost->post_date;
        $subpost_title = $subpost->post_title;
        $subpost_link = get_post_permalink($subpost_id);
        $subpost_preview = $subpost->post_excerpt;

        $formatted_date = date('F j, Y', strtotime($subpost_date));

        echo "<article>";
        echo "<a href='" . $subpost_link . "'>";
        echo "<h3>" . $subpost_title . "</h3>";
        echo "</a>";
        echo "<p><small>" . $formatted_date . "</small></p>";
        echo "<p>" . $subpost_preview . "</p>";
        echo "<p>";
        echo "<a href='" . $subpost_link . "'>";
        echo "Read More";
        echo "</a>";
        echo "</p>";
        echo "</article>";
    }
    wp_reset_query();
?>