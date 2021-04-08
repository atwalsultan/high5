<?php 

get_header(); 

// if ( have_posts() ) :
//   while ( have_posts() ) :
//     the_post();
//     get_template_part('template-parts/content');
//   endwhile;
//   else :
//     get_template_part('template-parts/content-none.php');
// endif; ?>

<section class="features">
  <?php 
    $args = array(
      'post_type' => 'app_feature',
      'orderby' => 'publish_date',
      'order' => 'ASC',
    );
  
    $my_query = new WP_Query( $args );
  
    if ( $my_query->have_posts() ) :
      while ( $my_query->have_posts() ) :
        $my_query->the_post();
        get_template_part('template-parts/content-feature');
      endwhile;
    else :
      get_template_part('template-parts/content-none.php');
    endif;
  ?>
</section>

<?php get_footer(); ?>