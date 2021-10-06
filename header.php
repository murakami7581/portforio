<!-- header.php初め -->
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> 
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="WordPress theme development static data for beginners">
  <meta name="keywords" content="WordPress, Theme, development">
   <?php wp_head(); ?>
 </head>
   <body <?php body_class(); ?>>
   <?php wp_body_open(); ?> 
   <div class="cursor">
  <span class="dot1"></span>
  <span class="dot2"></span>
</div>
  <!-- ローディング画面 -->
  <!-- <div id="loading-wrapper">
    <div class="loader"></div>
    <p>Loading...</p>
  </div> -->
  <!-- 重くなったら使用（ロード画面） -->
  <!-- コンテンツ部分 -->
  <!-- <div id="page"> -->
   
 
    <header class="l-header">
     <canvas class="l-header__background"></canvas>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js"></script>
     <img class="c-main__container__img1" src="<?php echo esc_url( get_template_directory_uri() . "/image/tunnel.jpg" ); ?>" alt="一番上の写真">
     <div class="l-header__container">
      <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . "/image/gia2.png" ); ?>" alt="一覧の写真"></img></a>
	    <?php wp_nav_menu( array( 
      'theme_location' => 'header' 
      ) ); 
      ?>
	   </div>
     <h1 class="p-section__top--text">MURAKAMI YOSHIYA</h1>
    </header>
<!-- header.php終わり -->
