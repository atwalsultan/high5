<?php ?>
<article <?php post_class(); ?>>
  <p><?php the_title(); ?></p>
  <p><?php the_field('team_member_position'); ?></p>
  <p><?php  the_post_thumbnail(); ?></p>
</article>