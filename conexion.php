<?php 
 
// connexion avec la base de données 
$cone = mysqli_connect("localhost","root","","entreprise");

if (!$cone) {
    # code...
    echo "you are not connected to data base";
}

?>