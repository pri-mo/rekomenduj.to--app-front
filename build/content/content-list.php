<?php
// require the Faker autoloader
require_once 'vendor/autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create('pl_PL');

$itemCount = empty($contentItemsCount) ? 15 : $contentItemsCount;
switch ($contentItems) {
  case 'polls':
    $itemType = 'list-item--poll';
    $itemLabel = 'Opowiedz nam o...';
    $headerIcon = 'rg-poll';
    $headerTitle = 'Ankiety dla Ciebie';
    break;

  default:
    # code...
    break;
}
?>

<section class="layout--base content-list__header">
  <div class="<?php echo $headerIcon ?> content-list__header-icon"></div>
  <h1 class="content-list__header-title"><?php echo $headerTitle ?></h1>
</section>

<section class="layout--base content-list">
  <div class="list-sizer"></div>
<?php
for ($i=0; $i < $itemCount; $i++) {
  $randChoice = $faker->numberBetween($min = 0, $max = $itemCount);
?>
<a  href="#dontmove"
    class="list-item <?php echo $itemType ?>"
    data-label="<?php echo $itemLabel ?>"
    data-index="<?php echo $i + 1 ?>">
  <?php
    if ($randChoice % 2 === 0) {
      echo "<img onerror='imgBroken(this)' src='https://unsplash.it/{$faker->randomElement($array = array ('800', '600'))}/{$faker->randomElement($array = array ('800', '600'))}?image={$faker->numberBetween($min = 0, $max = 1084)}' alt='' class='image--cover'";
    }
  ?>
  <span class="list-item__name"><?php echo $faker->sentence ?></span>
</a>
<?php } ?>

</section>