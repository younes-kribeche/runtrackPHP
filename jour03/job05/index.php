<?php
function occurences(string $str,string $char): string {
  $count = 0;
  $i = 0;
  while (isset($str[$i])) {  
    if ($str[$i] == $char) {
      $count++;
    }
    $i++;
  }
  return $count;
}

$str = "parapluie";
$char = 'a';
echo occurences($str, $char);
?>
