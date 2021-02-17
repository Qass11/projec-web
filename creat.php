<?php
    include("./connect_db.php");

    include("./functions.php");

    $firstname = sanitize($_POST["firstname"]);
    $infix = sanitize($_POST["infix"]);
    $lastname = sanitize($_POST["lastname"]);
    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);
    $gender = sanitize($_POST["gender"]);



    // Dit is de sql-query die de ingevulde gegevens wegschrijft naar de tabel users

    $sql = "INSERT INTO `user` (`id`, `firstname`, `infix`, `lastname`, `email`, `password`,`gender`) VALUES (NULL, '$firstname', '$infix', '$lastname', '$email', '$password', '$gender');";

    //Dit is de functie die de query $sql via de verbinding $conn naar de datebase stuurt.
    mysqli_query($conn, $sql);

    header("Location: ./read.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  </head>
  <body>
    <title>Hello, world!</title>
        <?php echo "<div class='alert alert-success' role='alert'>Het is gelukt, bendakt voor je aanmedling en 
            wij zullen zo snel mogelijk contact met jou opnemen!</div>"; ?>

    <!-- Optional JavaScript; choose one of the two! -->

   
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   
  </body>
</html>

