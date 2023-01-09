<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  </head>
  <body>
    <a class="centerA"href="ajouter.php"><img src="images/plus.png" alt="">Ajouter</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
    <table class="table"  id="datatableid">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Age</th>
      <th scope="col">Modifier</th>
      <th scope="col">supprimer</th>
    </tr>
  </thead>
  <tbody>
  <?php
    // inclure la page de conexion
    include_once "conexion.php";

    
    
    // requete pour afficher les données 

    $req = mysqli_query($cone , "SELECT * FROM employé"); 

    if (mysqli_num_rows($req)   == 0) {
      # code...
      echo "there is no employe yet";

    }else {

      while ($row = mysqli_fetch_assoc($req)) {
        # code...
        ?>
        <tr>

         <td><?=$row[ 'nom' ]  ?></td>
         <td><?=$row[ 'prenom' ]  ?></td>
         <td> <?=$row[ 'age' ]  ?></td>
         <td><a class="editImg" href="modifier.php?id=<?=$row['id']?>"><img src="images/edit.png" alt="#"></a></td>
         <td><a class="Delete" href="supprimer.php?id=<?=$row['id']?>"> <img src="images/Delete.png" alt="#"></a></td>

       </tr>


       <?php
      }


    }

    ?>
    
  </tbody>
</table>


<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script  src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

<script>

$(document).ready(function () {
    $('#datatableid').DataTable();
});
</script>
  </body>
</html>

