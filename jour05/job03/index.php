<?php
$serverName = "localhost";
$username = "root";
$dbName = "jour05";

try {
  $connexion = new PDO("mysql:host=$serverName;dbname=$dbName", $username);
  $connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo 'Connexion réussie';
} catch(PDOException $e) {
    echo 'Connexion échouée: ' . $e->getMessage();
};


$sql = 'SELECT * FROM etudiant';

$stmt = $connexion->query($sql);

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

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

