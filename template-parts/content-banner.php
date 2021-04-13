<?php ?>
<article <?php post_class(); ?>>
  <div>
    <img src="<?php the_field('column_1') ?>" alt="">
  </div>
  
  <div class="banner-content">
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
  </div>

  <div>
    <img src="<?php the_field('column_3') ?>" alt="">
  </div>
</article>