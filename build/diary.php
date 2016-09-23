<?php

$lang = 'pl';

$tagsBodyBasic = 'preload device--mobile scope--inside'; // platform-ios

$tagsNav = '';
$tagsTemplate = 'template--contentlist template--campaigns';

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<head>
  <?php include "components/head.php" ?>
</head>

<body class="<?php echo $tagsBodyBasic . ' ' . $tagsNav . ' ' . $tagsTemplate ?>">
  <!-- <img src="assets/images/phonegap.png" id="iOSbar" alt="" /> -->
  <?php include "components/bof-scripts.php" ?>

  <div class="page__wrapper">

    <?php include 'components/nav.php' ?>

    <main>

      <section>
        <?php
        $headerIcon = 'rg-diary';
        $headerTitle = 'Pamiętnik kampanii';
        include("components/elements/diary_header.php");
        ?>
      </section>

      <section>
      <?php
      $inputName = "jhgjhgj";
      include("components/elements/answer_longform.php");
      ?>
      </section>

      <section>
      <?php
      $questions = ["Liczba moich rozmówców", "Liczba osób, które nie słyszały o produkcie"];
      include("components/elements/diary_block_numbers.php");
      ?>
      </section>

      <section>
      <?php
      $items = [['Próbki:',1], ['Kupony:',5], ['Ulotki:', 10]];
      $title = "Prezenty dla znajomych:";
      include("components/elements/diary_dropdown.php");
      ?>
      </section>

      <section>
      <?php
      $card = 0;
      include("components/elements/diary_load_image_cards.php");
      ?>
      </section>

      <section>
        <div class="layout--card buttons">
          <button class="button-diary" type="button" name="button">Wyczyść</button>
          <button class="button-diary" type="button" name="button">Zapisz</button>
        </div>
      </section>

      <section>
          <?php
          $headerIcon = 'rg-stack';
          $headerTitle = 'Poprzednie wpisy';
          include("components/elements/diary_header.php");
          ?>


        <section class="content-list diary-entries">
          <div class="list-item diary-entry">
            <div class="diary-entry__timestamp">3 sie 2016</div>
            <div class="diary-entry__content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet itaque nulla, neque illo, nesciunt expedita? Consequatur, praesentium quas maxime reprehenderit autem atque, architecto alias velit tempora eos dignissimos, odio adipisci!</p>
            </div>
            <a class="diary-entry__more"><span class="rg-more"></span></a>
          </div>

          <div class="list-item diary-entry">
            <div class="diary-entry__timestamp">3 sie 2016</div>
            <div class="diary-entry__content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet itaque nulla, neque illo, nesciunt expedita? Consequatur, praesentium quas maxime reprehenderit autem atque, architecto alias velit tempora eos dignissimos, odio adipisci!</p>
            </div>
            <a class="diary-entry__more"><span class="rg-more"></span></a>
          </div>
        </section>
      </section>
    </main>

    <?php include 'components/footer.php' ?>
  </div>

  <?php
  $masonry = true;

  include 'components/eof-scripts.php'
  ?>
</body>
</html>
