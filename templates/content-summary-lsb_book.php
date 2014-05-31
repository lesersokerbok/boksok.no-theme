<article <?php post_class(); ?>>
  <div class="entry-image">
    <a href="<?php the_permalink(); ?>"><img src="http://dummyimage.com/235x310/aaaaaa/fff&text=Cover"></img></a>
  </div>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="meta">
      <?php the_terms($post->ID, 'lsb_tax_author') ?><br/>
      <?php the_terms($post->ID, 'lsb_tax_publisher') ?><br/>
      <?php the_field('year_published'); ?>
    </p>
  </header>
</article>
