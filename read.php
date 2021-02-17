<?php
include("./connect_db.php");

// Dit is de select query voor het opvragen van alle records uit de tabel users.
$sql = "SELECT * FROM `project` WHERE 1";

//Dit is de functie die de query $sql via de verbinding $conn naar de datebase stuurt.
$result = mysqli_query($conn, $sql);

$records = "";
// De while loop geeft alle gegevens weer uit de tapel users.
while ($record = mysqli_fetch_assoc($result)) {
  $records .= "<tr>
                <th scope='row'>" . $record["id"] . "</th>
                <td>" . $record["burgerservicenummer"] . "</td>
                <td>" . $record["e-mail"] . "</td>
                <td>" . $record["phone-number"] . "</td>
                <td>" . $record["firstname"] . "</td>
                <td>" . $record["infix"] . "</td>
                <td>" . $record["lastname"] . "</td>
                <td>" . $record["password"] . "</td>
                <td>" . $record["gender"] . "</td>
                <td>" . $record["date_of_birth"] . "</td>
                <td>
                  <a href='./update.php?id=" . $record["id"] . "'>
                    <img src='./img/icons/b_edit.png' alt='pencil'>
                  </a>
                </td>
                <td>
                  <a href='./delete.php?id=" . $record["id"] . "'>
                    <img src='./img/icons/b_drop.png' alt='cross'>
                  </a>
                </td>
              </tr>";
}

?>





<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="./CSS/style.css">

  <div class="container">
    <div class=" alert text-dark text-center p-2 border-" role="alert">
      <h1>Inschrijving</h1>
    </div>
    <title>Basketball</title>
</head>
</body>
</div>
<main class="container">
  <div class="row">
    <div class="col-12">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h2 class="display-4">Basketball</h2>
          <p class="lead">text</p>
        </div>
      </div>
    </div>
  <div class="container">
   <div class="row">
     </div class="col-12">
      <a href="aanmeld.php" type="button" class="btn btn-dark btn-lg btn-block">Nieuw record</a>
     </div>
   </div>
  <div class="row">
  </div class="col-12">
  <!-- op deze plek komt de tapel -->
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">burgerservicenummer</th>
        <th scope="col">e-mail</th>
        <th scope="col">phone-number</th>
        <th scope="col">firstname</th>
        <th scope="col">infix</th>
        <th scope="col">lastname</th>
        <th scope="col">password</th>
        <th scope="col">gender</th>
        <th scope="col">date_of_birth</th>
        

        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php
      echo $records;
      ?>
    </tbody>
  </table>


  </div>
  </div>
  </div>
</main>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js…