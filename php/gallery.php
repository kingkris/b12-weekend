<?php
/**
 * Created by PhpStorm.
 * User: KriS
 * Date: 04-Dec-16
 * Time: 11:59 AM
 */
  $pagename = 'gallery';
  include 'header.php';
?>
<div>
  <h1>This is home</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dicta, dolorem doloribus dolorum ducimus est et eum harum inventore iure magnam molestias nisi nulla quidem similique sint sit totam voluptates?</p>

  <?php
    for($i=0;$i<10;$i++){
      echo '<p>' . $i . '</p>';
    }

    echo '<hr>';

    for($i=0;$i<10;$i++):
      echo '<p>' . $i . '</p>';
    endfor;

  ?>

</div>

<?php include 'footer.php'; ?>

