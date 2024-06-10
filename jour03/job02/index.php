<?php 
function bonjour($jour = true): string{
if ($jour == true){
  return 'Bonjour';
} else {
  return 'Bonsoir';
  }
}
echo bonjour($jour = false);
?>