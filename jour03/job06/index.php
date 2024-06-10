<?php
function leetSpeak(string $str): string {
  $leetMap = [
      'a' => '4',
      'b' => '8',
      'e' => '3',
      'g' => '6',
      'l' => '1',
      's' => '5',
      't' => '7'
  ];

  $translatedStr = '';
  for ($i = 0; $i < strlen($str); $i++) {
      $char = $str[$i];
      if (isset($leetMap[$char])) {
          $translatedStr .= $leetMap[$char];
      } else {
          $translatedStr .= $char;
      }
  }
  return $translatedStr;
}

echo leetSpeak('abeglst');

?>

