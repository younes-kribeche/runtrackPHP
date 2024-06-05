<?php 
function bonjour($jour = true){
if ($jour == true){
  return 'Bonjour';
} else {
  return 'Bonsoir';
  }
}
echo bonjour($jour = false);
?>