<?php
/*
Template name: Single Project Template
*/
get_header();
?>

<section id="portfolio-projects">
  <div class="container blog">
    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div class="project-image">
      <div class="img" style="background: url('<?php the_post_thumbnail_url( 'medium' ); ?>'); background-size: cover !important; background-position: center center !important;"></div>
    </div>
    <div class="content-area">
      <div class="inside">
        <?php the_content(); ?>
      </div>
      <div class="right-widgets">
        <?php get_sidebar( 'right-sidebar' ); ?>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <?php else : ?>
    <div>
      <h2 class="">Блог появится в ближайшее время</h2>
    </div>
  <?php endif; ?>
</section>

<?php get_footer(); ?>