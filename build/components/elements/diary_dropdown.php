<?php
  $c = (count($items) == 1) ? 'grid__item--1of2' : 'grid__item--1of1';
  $d = (count($items) == 1) ? 'diary dropdown' : '';
?>
<div class='layout--card'>
  <div class='grid__container'>
    <div class='grid__item <?php echo $c;?>'>
      <span><?php echo $title; ?></span>
    </div>
      <?php foreach ($items as $val){
        include("components/elements/diary_dropdown_element.php");
      }
      ?>
  </div>
</div>
