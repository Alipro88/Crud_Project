<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
  </head>
  <body>

    <?php

      include_once "conexion.php";

     


      
      if (isset($_POST['button'])){
        // extract data ;
        extract($_POST);
        // vérifier tout les champs 
        echo "button is clicked";
        
        if (isset($nom)  && isset($prénom) && isset($age)) {
          # code...
          include_once "conexion.php";

          $req = mysqli_query($cone,"INSERT INTO employé VALUES(NULL,'$nom','$prénom','$age')");
        if ($req) {
          header("location: index.php");
        } else {
          $message = "employé non ajouter";
        }
        

        }else {
          # code...
          $message = "Veuiller remplir les champs";
        }
        

      }
    ?>

    <a href="index.php">retour</a>
    <h1>Ajouter un employé</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <form     method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom</label>
    <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prenom</label>
    <input type="text"   name="prénom" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Age</label>
    <input type="number"  name="age" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary"  name="button">Ajouter</button>
</form>
  </body>
</html>