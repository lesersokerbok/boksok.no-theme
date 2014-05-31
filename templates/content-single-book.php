<article <?php post_class(); ?>>
  <div class="entry-image">
    <a href="<?php the_permalink(); ?>"><img src="<?php echo get_field('images')[0]['image']['sizes']['large']; ?>"></img></a>
    <p class="meta">Passer for: <?php the_terms($post->ID, 'filters') ?></p>
  </div>
  <header>
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <p class="meta">Forfatter: <?php the_terms($post->ID, 'authors') ?></p>
  </header>
  <div class="entry-content">
    <p><?php the_field('review'); ?></p>
    <blockquote><?php the_field('quote'); ?></blockquote>
    <p class="meta">
      ISBN: <?php the_field('isbn'); ?><br/>
      Forlag: <?php the_terms($post->ID, 'publishers') ?><br/>
      Utgitt: <?php the_field('year_published'); ?>
    </p>
  </div>
  <footer>
    <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
  </footer>
</article>
