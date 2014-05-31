<article <?php post_class(); ?>>
  <div class="entry-image">
    <a href="<?php the_permalink(); ?>"><img src="<?php echo get_field('images')[0]['image']['sizes']['medium']; ?>"></img></a>
  </div>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="meta"><?php the_terms($post->ID, 'authors') ?>
      / <?php the_terms($post->ID, 'publishers') ?>
      <?php the_field('year_published'); ?></p>
  </header>
</article>
