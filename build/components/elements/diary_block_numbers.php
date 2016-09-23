<?php
  $suffixSingle = "osoba";
  $suffixMaxfive = "osoby";
  $suffixFivemore = "osób";
  $title = "Moi rozmówcy:";
?>

<div class='layout--card'>
    <span><?php echo $title; ?></span>
  <?php
    foreach ($questions as $question) {
      $labelOriginal = $question;
      $labelFocused = $question;
      $labelInvalid= $question;
      $inputName = $question;
      include("components/atoms/number-with-roller0.php");
    }
  ?>
</div>
