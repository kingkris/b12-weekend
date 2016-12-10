<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <title>Intro to PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/normalize.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="shortcut icon" href="favicon.ico">

  <link href="https://fonts.googleapis.com/css?family=Baloo+Tamma|Open+Sans" rel="stylesheet">

</head>
<body>
<!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<?php
  $sitename = "Anything";
?>
<header>
  <h1><a href="#"><?php echo $sitename; ?></a></h1>
</header>
<div class="wrapper">
  <nav class="kg_site-nav">
    <ul class="kg_site-links">
      <li <?php if($pagename == 'home')echo 'class="active"' ?> ><a href="index.php"><?php echo $sitename ?></a></li>
      <li class="has-submenu <?php if($pagename == 'about')echo 'active' ?> ">
        <a href="about.php">About</a>
        <ul>
          <li><a href="#">sublink02</a></li>
          <li><a href="#">sublink03</a></li>
          <li><a href="#">sublink04</a></li>
          <li><a href="#">sublink05</a></li>
        </ul>
      </li>
      <li <?php if($pagename == 'blog')echo 'class="active"' ?> ><a href="blog.php">Blog</a></li>
      <li <?php if($pagename == 'gallery')echo 'class="active"' ?> ><a href="gallery.php">Gallery</a></li>
      <li <?php if($pagename == 'contact')echo 'class="active"' ?> ><a href="contact.php">Contact</a></li>
      <li class="fr">Call me</li>
    </ul>
  </nav>
</div>
