<?php ?>
<article <?php post_class(); ?>>
<div class="member-container">
  <div class="team-image"><?php  the_post_thumbnail(); ?></div>
  <div class="team-title"><?php the_title(); ?></div>
  <div class="team-position"><?php the_field('team_member_position'); ?></div>
  </div>
  
</article>