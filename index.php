<link href="style.css" rel="stylesheet"> <!--Calling the style.css which we use -->
<script src="https://kit.fontawesome.com/68967da625.js" crossorigin="anonymous"></script> 

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>

<?php 
    if ( have_posts() ) { 
    while ( have_posts() ) : the_post();
 ?>
 <div class="blog-post">
    <h2 class="blog-post-title" id="BlogTitle"><?php the_title(); ?></h2>
    <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>

    <?php the_content(); ?>
 </div>
 <?php

 endwhile;
 } 
 ?>

 <nav>
    <ul class="pager" id="BlogPosts">
        <br> 
        <li><?php next_posts_link('Previous'); ?></li>
        <li><?php previous_posts_link('Next'); ?></li>
    </ul>
 </nav>

</div>



<?php get_footer(); ?>


