<?php
  // $c = (count($items) == 1) ? 'grid__span--6' : '';
  $d = (count($items) == 1) ? 'diary dropdown' : '';
?>
<div class='layout--card'>
  <span><?php echo $title; ?></span>
  <div class='grid__wrapper'>
      <?php foreach ($items as $val){
        include("components/elements/diary_dropdown_element.php");
      }
      ?>
  </div>
</div>
