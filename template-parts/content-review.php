<?php ?>
<article <?php post_class(); ?>>
  <?php  the_post_thumbnail(); ?>

  <div class="review-content">
    <?php the_excerpt(); ?>

    <div class="author">
      <img src="<?php the_field('review_author_image'); ?>"></img>
      <div class="author-name-occupation">
        <p><?php the_field('review_author'); ?></p>
        <p><?php the_field('review_author_occupation'); ?></p>
      </div>
    </div>

    <div><a href="<?php the_permalink() ?>">READ THEIR STORY ></a></div>
  </div>
</article>