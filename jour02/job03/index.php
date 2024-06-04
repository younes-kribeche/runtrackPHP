<form action="index.php" method="post">
   <label for="nom">Votre nom :</label>
   <input name="nom" id="nom" type="text" />

   <label for="age">Votre âge :</label>
   <input name="age" id="age" type="number" />

   <button type="submit">Valider</button>
</form>

<?php 
if (isset($_GET['nom']) && isset($_GET['age'])) {
   $nombreArgumentsPOST = count($_POST);
   echo 'Il y a ' . $nombreArgumentsPOST . ' arguments $_POST.';
?>