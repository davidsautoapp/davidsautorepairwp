<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php wp_title('|', true, 'right') ?></title>

  <?php wp_head(); ?>
  <!-- core CSS -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
  <link rel="shortcut icon" href="images/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php get_template_directory_uri() ?>/images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php get_template_directory_uri() ?>/images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php get_template_directory_uri() ?>/images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php get_template_directory_uri() ?>/images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body class="homepage">

  <header id="header">
    <nav class="navbar navbar-inverse" role="banner">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">
            <!-- <img src="images/logo.png" alt="logo"> -->
            <h1>David's Auto Repair</h1>
          </a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="services">Services</a></li>
            <li><a href="gallery">Gallery</a></li>
            <li><a href="contact-us">Contact</a></li>
          </ul>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <div class="header-contacts container">
      <a class="header-phone" href="tel:+1-718-383-4808">
        <span class="fa fa-phone icon"></span>
        <span class="separator">:</span>
        <span class="digits">718-383-4808</span>
      </a>
    </div>
    <!--/nav-->

  </header>
  <!--/header-->