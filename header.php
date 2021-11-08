<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <title><?php wp_title(); ?></title>
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
    integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet"
    href="<?php echo get_bloginfo( 'template_directory' ); ?>/css/main.css?counter=<?php echo time(); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <?php
    // function acronym ( $str, $as_space = array('-') ) {
    //   $str = str_replace( $as_space, ' ', trim( $str ) );
    //   $ret = '';
    //   foreach(explode( ' ', $str ) as $word) {
    //     $ret .= strtoupper( $word[0] );
    //   }
    //   return $ret;
    // }
    ?>
    <div class="logo">
      <a href="<?php echo get_bloginfo( 'url' ); ?>/" class="name"><span lang="en">AS</span></div>
    </div>
    <div class="header-menu">
      <a href="<?php echo get_bloginfo( 'url' ); ?>/">Главная</a>
      <a href="<?php echo get_bloginfo( 'url' ); ?>/#services-section">Навыки</a>
      <a href="<?php echo get_bloginfo( 'url' ); ?>/#portfolio-section">Портфолио</a>
      <a href="<?php echo get_bloginfo( 'url' ); ?>/#experience-section">Опыт работы</a>
      <a href="<?php echo get_bloginfo( 'url' ); ?>/#blog-section">Блог</a>
    </div>
    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
  </header>
  <div class="mobile-menu">
    <a href="<?php echo get_bloginfo( 'url' ); ?>/">Главная</a>
    <a href="<?php echo get_bloginfo( 'url' ); ?>/#services-section">Навыки</a>
    <a href="<?php echo get_bloginfo( 'url' ); ?>/#portfolio-section">Портфолио</a>
    <a href="<?php echo get_bloginfo( 'url' ); ?>/#experience-section">Опыт работы</a>
    <a href="<?php echo get_bloginfo( 'url' ); ?>/#blog-section">Блог</a>
  </div>