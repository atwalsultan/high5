<?php ?>
<article <?php post_class(); ?>>
  <p><?php the_title(); ?></p>
  <p><?php the_field('review_author'); ?></p>
  <img src="<?php the_field('review_author_image'); ?>"></img>
  <p><?php the_field('review_content'); ?></p>
  <p><?php  the_post_thumbnail(); ?></p>
</article>