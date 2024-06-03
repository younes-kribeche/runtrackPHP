<?php
$number = 0;
$nothing = '';
$school = 'LaPlateforme_';
do {
  if ($number >= 0 && $number <= 20) {
    echo "<p style='font-style: italic'>$number</p>";
  } 

  else if ($number == 42){
    echo "<p>$school</p>";
  }

  else if ($number >= 25 && $number <= 50){
    echo "<p style='text-decoration: underline'>$number</p>";
  }

  else {
    echo $number . "<br>";
  }
  $number++;
} while ($number <= 100);
?>
