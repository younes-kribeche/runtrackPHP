<?php
function bonjour($jour = true){
  if ($jour == true){
    echo 'Bonjour'; 
  } else {
    echo 'Bonsoir';
  }
}
bonjour(false);
?>  