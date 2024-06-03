<?php
$number = 0;
$nothing = '';
do {
  if ($number == 26 || $number == 37 || $number == 88 || $number == 1111) {
    echo $nothing;
  } else {
    echo $number . "<br>";
  }
  $number++;
} while ($number <= 1337);
?>
