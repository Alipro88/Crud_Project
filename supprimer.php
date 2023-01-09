<?php 
// conexion à la badse de données 
include_once "conexion.php";


   


// récupérer l id 
$id = $_GET['id'];

// requete suppression
$req = mysqli_query($cone , "DELETE FROM employé WHERE id = $id");

// rediriger vers la page index 
header("location:index.php");

?>