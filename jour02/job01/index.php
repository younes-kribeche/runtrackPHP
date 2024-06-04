<form action="index.php" method="get">
   <label for="nom">Votre nom :</label>
   <input name="nom" id="nom" type="text" />

   <label for="age">Votre âge :</label>
   <input name="age" id="age" type="number" />

   <button type="submit">Valider</button>
</form>

<?php 
if (isset($_GET['nom']) && isset($_GET['age'])) {
  $i = 0;
  foreach ($_GET as $key => $value){
   $i++;
  }
   echo 'Il y a ' . $i . ' arguments $_GET.';
}
?>