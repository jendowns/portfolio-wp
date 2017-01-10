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
        echo "<div class='flex-grid'>";
        echo "<div class='col'>";
        echo "<div class='card'>";
        echo "<a href='" . $subpost_link . "'>";
        echo "<h2>" . $subpost_title . "</h2>";
        echo "</a>";
        echo "<span class='date'>" . $formatted_date . "</span>";
        echo "<p>" . $subpost_preview . "</h2>";
        echo "<p class='cta'>";
        echo "<a class='btn' href='" . $subpost_link . "'>";
        echo "Read More";
        echo "</a>";
        echo "</p>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</article>";
    }
    wp_reset_query();
?>