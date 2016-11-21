 <?php
 $subpost_query = array(
        'posts_per_page' => 10,
        'orderby' => 'post_date'
    );

    $subposts = get_posts( $subpost_query );
    
    // get posts inside this subcategory
    foreach($subposts as $subpost){
        $subpost_id = $subpost->ID;
        $subpost_title = $subpost->post_title;
        $subpost_link = get_post_permalink($subpost_id);
        $subpost_preview = $subpost->post_excerpt;

        echo "<article>";
        echo "<div class='flex-grid'>";
        echo "<div class='col'>";
        echo "<div class='card'>";
        echo "<a href='$subpost_link'>";
        echo "<h2>" . $subpost_title . "</h2>";
        echo "</a>";
        echo "<span class='date'>" . get_the_date("F j, Y") . "</span>";
        echo "<p>" . $subpost_preview . "</h2>";
        echo "<p class='cta'>";
        echo "<a class='btn' href='" . $subpost_link . "'>";
        echo "Read More";
        echo "</a>";
        echo "</p>";


        /*


     .flex-grid
          .col
            .card
              h2 Creating a Sidebar of Categories and Posts in WordPress
              span.date October 20, 2016
              p I wrote about using PHP to generate a side navigation menu, with categories as dropdown triggers and posts as dropdown list items.
              p.cta
                a.btn(href='/wordpress-sidebar', target='_blank') 
                  | Read More &nbsp;
                  i.icon.icon-open(aria-hidden="true") 



        */

        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</article>";


    }
    wp_reset_query();
?>