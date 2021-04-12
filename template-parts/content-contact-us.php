<?php ?>
<article class="contact-page">

<h2 class="contact-page-title"><?php the_title(); ?></h2>

<div class="contact-page-content-wrapper">
<div class="contact-page-img"><?php  
  the_post_thumbnail(); ?></div>

<div class="contact-page-form"><?php  
  the_content(); ?></div></div>
</article>