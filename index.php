<?php 

get_header(); 

if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
    get_template_part('template-parts/content');
  endwhile;
  else :
    get_template_part('template-parts/content-none.php');
endif;

if ( is_page( 'our-team' ) ) : ?>
  <section class="team-members">
    <?php 
      $args = array(
        'post_type' => 'team_member',
        'orderby' => 'rand',
      );
    
      $my_query = new WP_Query( $args );
    
      if ( $my_query->have_posts() ) :
        while ( $my_query->have_posts() ) :
          $my_query->the_post();
          get_template_part('template-parts/content-team-member');
        endwhile;
      else :
        get_template_part('template-parts/content-none.php');
      endif;
    ?>
  </section>
<?php endif;

if ( is_page( 'reviews' ) ) : ?>
  <section class="reviews">
    <?php 
      $args = array(
        'post_type' => 'review',
        'orderby' => 'rand',
      );
    
      $my_query = new WP_Query( $args );
    
      if ( $my_query->have_posts() ) :
        while ( $my_query->have_posts() ) :
          $my_query->the_post();
          get_template_part('template-parts/content-review');
        endwhile;
      else :
        get_template_part('template-parts/content-none.php');
      endif;
    ?>
  </section>

  <section class="review-page-content">
      <?php
        if ( have_posts() ) :
          while ( have_posts() ) :
            the_post();
            the_post_thumbnail();
            the_content();
          endwhile;
        endif;
      ?>
  </section>
<?php endif;

if ( is_page( 'contact-us' ) ) :
  get_template_part('template-parts/content-contact-us');
endif;

if ( is_singular( 'review' ) ) :
  get_template_part('template-parts/single-review');
endif;

get_footer(); ?>