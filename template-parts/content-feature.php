<?php ?>
  <article <?php post_class(); ?>>
  <div class="article-content">
    <img src="<?php the_field('hand_icon')  ?>" class="hand-icon" alt="Hand Icon">
    <h3 class="feature-title"><?php the_title(); ?></h3>
    <div class="feature-desc"><?php the_field('feature_description'); ?></div>
    <a class="ext-link" href="https://high5.wmdd.ca/index.html" target="_blank"><?php the_field('link_text'); ?></a>
  </div>
  <div class="article-image">
    <?php  the_post_thumbnail(); ?>
  </div>
</article>