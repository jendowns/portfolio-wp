<?php get_header(); ?>
<body <?php body_class(); ?>><nav><div class="flex-grid"><ul><li> <a href="/" title="Back Home"><i class="icon icon-arrow-left" aria-hidden="true"> </i> Back</a></li></ul></div></nav><section><div class="container"><p class="date">Posted on <?php echo get_the_date("F j, Y"); ?></p><h1><?php the_title(); ?></h1><?php while (have_posts()) : the_post(); the_content(); endwhile; ?></div></section><?php get_footer(); ?> 