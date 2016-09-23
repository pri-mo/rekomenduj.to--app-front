<?php
  $c = (count($items) == 1) ? 'grid__item--1of2' : ((count($items) % 3 == 0) ? 'grid__item--1of3' : 'grid__item--1of2');
?>
<div class="input input--select grid__item <?php echo $c; ?>">
  <select name="<?php echo $val[0];?>" id="<?php echo $val[0];?>"  required>
    <?php
      for ($i=0; $i <= $val[1]; $i++){
        echo "<option value='$i'>$i</option>";
      }
     ?>
  </select>
  <label class="diary-label" for="diary-category"
  data-focused=<?php echo $val[0];?>

  data-invalid="To pole jest obowiązkowe"><?php echo $val[0];?></label>
</div>
