<?php ?>
  <article <?php post_class(); ?>>
  <div class="article-content">
    <h3 class="feature-title"><?php the_title(); ?></h3>
    <div class="feature-desc"><?php the_field('feature_description'); ?></div>
    <a class="ext-link" href="high5.wmdd.ca"><?php the_field('external_link'); ?></a>
  </div>
  <div class="article-image">
    <?php  the_post_thumbnail(); ?>
  </div>
</article>