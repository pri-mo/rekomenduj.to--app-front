<?php
  $suffixSingle = "osoba";
  $suffixMaxfive = "osoby";
  $suffixFivemore = "osób";
  $title = "Moi rozmówcy:";
?>

<div class='layout--card'>
    <span><?php echo $title; ?></span>
    <div class='grid__wrapper'>
    <?php
      foreach ($questions as $question) {
        $labelOriginal = $question;
        $labelFocused = $question;
        $labelInvalid= $question;
        $inputName = $question;
        $c = 'grid__item grid__xs-span--6';
        include("components/atoms/number-with-roller0.php");
      }
    ?>
    </div>
</div>
