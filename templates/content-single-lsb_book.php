<article <?php post_class(); ?>>
  <div class="entry-image">
    <?php if ( has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('large'); ?></img></a>
    <?php else : ?>
      <img src="http://dummyimage.com/300x450/eeeeee/eeeeee.jpg"></img>
    <?php endif; ?>
  </div>
  <header>
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <p class="meta">
      <?php the_terms($post->ID, 'lsb_tax_author') ?>
      <?php if(get_the_terms($post->ID, 'lsb_tax_illustrator')): ?>
        <br/>
        Illustratør: <?php the_terms($post->ID, 'lsb_tax_illustrator') ?>
      <?php endif; ?>
      <?php if(get_the_terms($post->ID, 'lsb_tax_translator')): ?>
        <br/>
        Oversetter: <?php the_terms($post->ID, 'lsb_tax_translator') ?>
      <?php endif; ?>
    </p>
  </header>
  <div class="entry-content">
    <p><?php the_field('lsb_review'); ?></p>
    <?php if(get_field('lsb_quote')): ?>
      <blockquote><?php the_field('lsb_quote'); ?></blockquote>
    <?php endif; ?>
    <p class="meta">
      ISBN: <?php the_field('lsb_isbn'); ?><br/>
      Forlag: <?php the_terms($post->ID, 'lsb_tax_publisher') ?><br/>
      Utgitt: <?php the_field('lsb_published_year'); ?><br/>
      Antall sider: <?php the_field('lsb_pages'); ?>
    </p>
  </div>
  <footer>
    <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
  </footer>
</article>
