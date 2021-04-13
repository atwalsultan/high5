<?php ?>
<article <?php post_class(); ?>>
<div class="article-header">
<h1>User Story</h1>
<p>From <?php the_field('review_author')?></p>
</div>

<div class="single-content-image">

<div class="single-excerpt"><?php the_excerpt()?></div>

<div class="single-image">
<?php the_post_thumbnail();?>
</div>

<div class="single-content"><?php the_field('review_content')?></div>

</div>
<div class="article-footer">

  <?php the_post_navigation(array(
    'prev_text' => 'Previous Story',
    'next_text' => 'Next Story',
  ));
  ?>
  </div>

</article>

  
 
