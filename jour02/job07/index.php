<form method="post">
    Largeur de la maison: <input type="number" name="largeur" required><br>
    Hauteur de la maison: <input type="number" name="hauteur" required><br>
    <input type="submit" name="dessiner" value="Dessiner la maison">
</form>

<?php
if (isset($_POST['dessiner'])) {
    $largeur = $_POST['largeur'];
    $hauteur = $_POST['hauteur'];

     // Dessiner le toit
     $toit = $largeur / 2;
     for ($k = 0; $k < $toit; $k++) {
         for ($l = 0; $l < $largeur; $l++) {
             if ($l == $toit - $k - 1 || $l == $toit + $k) {
                 echo "*";
             } else {
                 echo "-";
             }
         }
         echo "<br>";
     }

    // Dessiner la maison
    for ($i = 0; $i < $hauteur; $i++) {
        for ($j = 0; $j < $largeur; $j++) {
            if ($i == 0 || $i == $hauteur - 1 || $j == 0 || $j == $largeur - 1) {
                echo "|";
            } else {
                echo " * ";
            }
        }
        echo "<br>";
    }

   
}
?>