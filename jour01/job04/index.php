<?php
$number = 0;
do {
  if ($number == 42) {
    echo "<strong>$number</strong><br>";
  } else {
    echo $number . "<br>";
  }
  $number++;
} while ($number <= 1337);
?>
