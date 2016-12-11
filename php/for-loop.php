<?php
/**
 * Created by PhpStorm.
 * User: KriS
 * Date: 04-Dec-16
 * Time: 11:59 AM
 */
  $pagename = 'for-loop';
  include 'header.php';
?>
<div>
  <h1>Demo of FOR loop</h1>

  <div class="dabba">
    <?php for ($i = 1; $i<=100; $i++){ ?>
      <div class="box">
        <p>this is box <?php echo $i ?> </p>
      </div>
    <?php } ?>
  </div>
  <hr>
  <hr>
  <hr>
  <h1>Demo of FOR loop</h1>

  <div class="dabba">
    <?php
      for ($i = 1; $i<=100; $i++) {
        echo '<div class="box">';
        echo '<p>this is box' . $i .'</p>';
        echo '</div>';
      }
    ?>
  </div>
  <div class="dabba">
    <?php
      for ($year = 1977; $year<=3500; $year++) {
        $x = $year/4;
        if(is_int($x)){
          echo '<div class="box">';
          echo '<p>' . $year .'</p>';
          echo '</div>';
        }
      }
    ?>
  </div>

  <hr>
  <hr>
  <hr>
<h1>Triangle</h1>
  <div class="trianglex">
    <?php
      for ($i = 0; $i < 10; $i++){
        echo '<div>';
        for ($j=0;$j < $i; $j++){
          echo '<span>*</span>';
        }
        echo '</div>';
      }
    ?>
  </div>

  <hr>
  <hr>
<h1>Triangle</h1>
  <div class="triangle">
    <?php
      for ($i = 0; $i < 10; $i++){
        echo '<div>';
        for ($j=0;$j < $i; $j++){
          echo '<span>*</span>';
        }
        echo '</div>';
      }
    ?>
  </div>

</div>

<?php include 'footer.php'; ?>

