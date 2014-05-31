<?php
/*
Template Name: Book Search
*/
?>

<section class="book-search" role="nav">
  <?php get_search_form(); ?>

  <p>eller hopp rett til bøker for</p>
  <a class="filter" href="/bok">Lesevansker</a>
  <a class="filter" href="/bok">Nye i Norge</a>
  <a class="filter" href="/not">Demente</a>
  <a class="filter" href="/not">Svaksynte</a>
  <a class="filter" href="/not">Utviklingshemmede</a>
  <p>eller se liste over <a href="/bok">alle "Leser søker bok"-bøkene.</p>

</section>
<!--  If there is some page content -->
<?php while (have_posts()) : the_post(); ?>
  <?php if (get_the_content()): ?>
  <article class="player">
    <?php the_content(); ?>
  </article>
<?php endif; ?>
<?php endwhile; ?>
