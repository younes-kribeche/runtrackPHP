<form action="index.php" method="post">
   <label for="nom">Votre nom :</label>
   <input name="nom" id="nom" type="text" />

   <label for="age">Votre âge :</label>
   <input name="age" id="age" type="number" />

   <button type="submit">Valider</button>
</form>


<?php 
if (isset($_POST['nom']) && isset($_POST['age'])) {
   $i = 0;
   foreach ($_POST as $key => $value){
    $i++;
   }
   echo 'Il y a ' . $i . ' arguments $_POST.' . '</br>';
   echo 'Bienvenue ' . ($_POST['nom'] . ', vous avez ' . $_POST['age']) . ' ans.'; 

}
?>
