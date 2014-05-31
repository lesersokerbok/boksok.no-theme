<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <div class="wrap container" role="document">

    <div class="page-header">
      <h1>
        <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        <?php if(is_archive()) : ?>
          <small><?php single_cat_title(); ?></small>
        <?php endif; ?>
      </h1>
    </div>


    <main class="main" role="main">
      <?php include roots_template_path(); ?>
    </main><!-- /.main -->

  <footer class="content-info" role="contentinfo">
        <?php dynamic_sidebar('sidebar-footer'); ?>
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </footer>

  <?php wp_footer(); ?>


  </div><!-- /.wrap -->

</body>
</html>
