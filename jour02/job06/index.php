<form action="index.php" method="get">
   <label for="number">Nombre:</label>
   <input name="number" id="number" type="number" />

   <button type="submit">Valider</button>
</form>


<?php
if (isset($_GET['number'])) {
  if ($_GET['number'] % 2 == 0){
    echo "Chiffre pair";
  } else if ($_GET['number'] % 1 == 0) {
    echo 'Chiffre impair';
  }
}
?>
