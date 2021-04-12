<?php ?>
<article <?php post_class(); ?>>
  <p><?php the_title(); ?></p>
  <p><?php the_field('feature_description'); ?></p>
  <p><?php  the_post_thumbnail(); ?></p>
</article>