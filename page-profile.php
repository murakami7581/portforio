<?php get_header(); ?>
<main class="l-main">
<!-- <div class="p-section__main">
  <div class="c-section__text">
  <p class="c-section__text--1">Portforio</p>
  </div>
  </div> -->
<!-- <div class="c-main__container">
  
  <a class="c-main__container__top" href="<?php echo esc_url(home_url('')); ?>">Top</a>
  <?php wp_nav_menu( array( 
  'theme_location' => 'header' 
  ) ); 
  ?>
  </div> -->
 <p class="l-main__text--scrool">SCROOL</p>
 <div class="l-main--line"></div>
<article>
<div class="p-section__profile">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

       <h1><?php the_title(); ?></h1>
       <div class="p-section__profile--content">
       <?php the_post_thumbnail(''); ?>
         <?php the_content(); ?>
       </div>
    <?php endwhile; endif; ?>
</div>
</article>
</main>

<?php get_footer(); ?>