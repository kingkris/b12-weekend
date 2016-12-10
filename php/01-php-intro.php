<?php $page = "blog-single" ?>


<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <title>Intro to PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/normalize.min.css">
  <?php
    echo '<link rel="stylesheet" href="css/' . $page . '.css">';
  ?>
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
      <li class="active"><a href="#"><?php echo $sitename ?></a></li>
      <li class="has-submenu">
        <a href="#">link01</a>
        <ul>
          <li><a href="#">sublink02</a></li>
          <li><a href="#">sublink03</a></li>
          <li><a href="#">sublink04</a></li>
          <li><a href="#">sublink05</a></li>
        </ul>
      </li>
      <li><a href="http://www.htmlden.com/" >Webdesign Training</a></li>
      <li><a href="#">link03</a></li>
      <li><a href="#">link04</a></li>
      <li><a href="#">link05</a></li>
    </ul>
  </nav>
</div>





<div class="sidebar">
  <div class="widget">
    <h3><i class="icon-developer_mode"></i> <?php echo $sitename ?></h3>
    <?php
     echo '<h3><i class="icon-developer_mode"></i> ';
      if(9<4){
        echo 'Hello ' . $sitename;
      } else{
        echo 'Hi ' . $sitename;
      }
     echo '</h3>';
    ?>
    <ul>
      <li><a href="#"><strong>Tunisia</strong>: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium consequatur doloribus, enim maiores reiciendis .</a></li>
      <li><a href="#"><strong>Tunisia</strong>: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium consequatur doloribus, enim maiores reiciendis rem voluptatibus. A cupiditate, dicta excepturi exercitationem maiores nam nobis ullam velit veritatis voluptas. Incidunt.</a></li>
      <li><a href="#"><strong>Tunisia</strong>: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium consequatur doloribus, enim maiores reiciendis rem voluptatibus. A cupiditate, dicta . Incidunt.</a></li>
    </ul>
    <a href="#"><i class="icon-phonelink"></i> See more</a>
  </div><!--eo widget-->
</div><!--eo sidebar-->

<div class="container">
  <h2>My Skills</h2>
  <ul class="skills">
    <li>
      <i class="icon-call_missed_outgoing"></i>
      <h3>Creative design</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, amet atque culpa dicta esse ex explicabo, iure maiores maxime!</p>
    </li>
    <li>
      <i class="icon-call_missed_outgoing"></i>
      <h3>Excellent support</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, amet atque culpa dicta esse ex explicabo, iure maiores maxime!</p>
    </li>
    <li>
      <i class="icon-settings_remote"></i>
      <h3>Responsive design</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, amet atque culpa dicta esse ex explicabo, iure maiores maxime!</p>
    </li>
    <li>
      <i class="icon-sentiment_very_dissatisfied"></i>
      <h3>Campaign analysis</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, amet atque culpa dicta esse ex explicabo, iure maiores maxime!</p>
    </li>
    <li>
      <i class="icon-dns"></i>
      <h3>Marketing</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, amet atque culpa dicta esse ex explicabo, iure maiores maxime!</p>
    </li>
    <li>
      <i class="icon-details"></i>
      <h3>Web development</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, amet atque culpa dicta esse ex explicabo, iure maiores maxime!</p>
    </li>
    <li>
      <i class="icon-developer_mode"></i>
      <h3>Creative design</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, amet atque culpa dicta esse ex explicabo, iure maiores maxime!</p>
    </li>
    <li>
      <i class="icon-device_hub"></i>
      <h3>Creative design</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, amet atque culpa dicta esse ex explicabo, iure maiores maxime!</p>
    </li>
  </ul>
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

</body>
</html>
