<?php
$number = 0;
$nothing = '';
$school = 'LaPlateforme_';
do {
  if ($number % 3 == 0 && $number % 5 == 0) {
    echo "<p>FizzBuzz</p>";
  } 

  else if ($number % 5 == 0){
    echo "<p>Buzz</p>";
  }

  else if ($number % 3 == 0){
    echo "<p>Fizz</p>";
  }

  else {
    echo $number . "<br>";
  }
  $number++;
} while ($number <= 100);
?>
