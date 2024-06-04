<form action="index.php" method="post">
   <label for="username">Username:</label>
   <input name="username" id="username" type="text" />

   <label for="password">Password:</label>
   <input name="password" id="password" type="password" />

   <button type="submit">Valider</button>
</form>


<?php 
if (isset($_POST['username']) && isset($_POST['password'])) {
  if ($_POST['username'] == 'John' && $_POST['password'] == 'Rambo'){
    echo "ce n'est pas ma guerre";
  } else {
    echo 'votre pire cauchemar';
  }
}
?>
  

