<?php
$serverName = "localhost";
$username = "root";
$dbName = "jour05";

try {
  $connexion = new PDO("mysql:host=$serverName;dbname=$dbName", $username); // Connexion à la base de données avec PDO
  $connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Définition du mode d'erreur
  echo 'Connexion réussie'; // Message affiché en cas de connexion réussie
} catch(PDOException $e) {
    echo 'Connexion échouée: ' . $e->getMessage(); // Message affiché en cas d'échec de connexion
};


$sql = 'SELECT prenom, nom, naissance, sexe, email FROM etudiant WHERE prenom LIKE "T%"'; // Requête SQL pour sélectionner les colonnes nom et capacité de la table 'salle'

$stmt = $connexion->query($sql); // Exécution de la requête SQL

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC); // Récupération des résultats de la requête sous forme de tableau associatif
?>



<table border="1" style="border-collapse:collapse">
  <thead>
    <tr>
      <?php 
      if (!empty($rows)){
        foreach (array_keys($rows[0]) as $colName){
          echo "<th>$colName</th>";
        }
      }
      ?>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 
        foreach ($rows as $row){
          echo '<tr>';
          foreach ($row as $cell){
            echo "<td>$cell</td>";
          }
          echo '</tr>';
        }
      ?>
    </tr>
  </tbody>
</table>

