<?php
 $id = $_GET["id"];
 
 include("./connect_db.php");

 $sql = "SELECT * FROM `project` WHERE `id` = $id";


 $result = mysqli_query($conn, $sql);

 $record = mysqli_fetch_assoc($result);

 
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
    <link rel="stylesheet" href="./cSS/style.css">

    <div class="container">
        <div class="alert text-dark text-center p-2 border-" role="alert">
            <h1>Basketball</h1>
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
    </div>
    <div class="row">
    </div class="col-6">
    <form action="./creat.php" method="post">
        <div class="form-group">
            <label for="burgerservicenummer">burgerservicenummer</label>
            <input type="text" class="form-control" id="burgerservicenummer" aria-describedby="burgerservicenummerHelp"
                placeholder="Invoer burgerservicenummer" name="burgerservicenummer"
                value="<?php echo $record["burgerservicenummer"]; ?>">
        </div>


        <div class="row">
        </div class="col-6">
        <form action="./creat.php" method="post">
            <div class="form-group">
                <label for="e-mail">e-mail</label>
                <input type="text" class="form-control" id="e-mail" aria-describedby="e-maillHelp"
                    placeholder="Invoer e-mail" name="e-mail" value="<?php echo $record["e-mail"]; ?>">
            </div>

            <div class="row">
            </div class="col-6">
            <form action="./creat.php" method="post">
                <div class="form-group">
                    <label for="phone-number">phone-number</label>
                    <input type="text" class="form-control" id="phone-number" aria-describedby="phone-numberHelp"
                        placeholder="Invoer phone-number" name="phone-number"
                        value="<?php echo $record["phone-number"]; ?>">
                </div>



                <div class="row">
                </div class="col-6">
                <form action="./creat.php" method="post">
                    <div class="form-group">
                        <label for="firstname">firstname</label>
                        <input type="text" class="form-control" id="firstname" aria-describedby="firstlHelp"
                            placeholder="Invoer voornaam" name="firstname" value="<?php echo $record["firstname"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="infix">infix</label>
                        <input type="text" class="form-control" id="infix" aria-describedby="infixlHelp"
                            placeholder="Invoer tussenvoegsel" name="infix" value="<?php echo $record["infix"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="lastname">lastname</label>
                        <input type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp"
                            placeholder="Invoer achternaam" name="lastname" value="<?php echo $record["lastname"]; ?>">

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" aria-describedby="passwordHelp"
                                placeholder="Invoer password" name="password"
                                value="<?php echo $record["password"]; ?>">
                            <small id="passwordHelp" class="form-text text-muted">Wij zullen uw gegevens nooit delen met
                                derden.</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="radio" id="gender" name="gender" value="male">
                        <label for="male">Male</label><br>
                        <input type="radio" id="gender" name="gender" value="female">
                        <label for="female">Female</label><br>
                        <input type="radio" id="gender" name="gender" value="other">
                        <label for="other">Other</label>
                    </div>

                    <h2>Starting Date</h2>
<section>
  <fieldset>
    <legend>Input[type="date"]</legend>
    <div class="field moveindate">
      <label for="MoveInDate">Date</label>
      <input autocomplete="off" class="text" id="MoveInDate" name="MoveInDate" placeholder="DD-MM-YYYY" type="date" min="2016-12-17" max="2016-01-01" spellcheck="false" value="2016-12-17">
    </div>
  </fieldset>
  <fieldset>
    <legend>pickadate.js</legend>
    <div class="field moveindate">
      <label>Date</label>
      <input class="datepicker" name="date" type="text" autofocuss>
    </div>
  </fieldset>
</section>

<h2>Date of Birth</h2>
<section id="date-of-birth-example-1">
  <fieldset>
    <legend>Multiple Text Fields</legend>
    <div class="field-inline-block">
      <label>DD</label>
      <input type="text" pattern="[0-9]*" maxlength="2" size="2" class="date-field" />
    </div>
    /
    <div class="field-inline-block">
      <label>MM</label>
      <input type="text" pattern="[0-9]*" maxlength="2" size="2" class="date-field" />
    </div>
    /
    <div class="field-inline-block">
      <label>YYYY</label>
      <input type="text" pattern="[0-9]*" maxlength="4" size="4" class="date-field date-field--year" />
    </div>
    <p><small>E.g. 26/04/1980</small></p>
  </fieldset>
  <fieldset>
    <legend>Single Text Field</legend>
    <div class="field">
      <label>Date</label>
      <input type="text" pattern="[0-9]*" name="date" type="text" class="single-date-field">
    </div>
    <p><small>E.g. 26/04/1980</small></p>
  </fieldset>
</section>

                    <button type="submit" class="btn btn-dark">Versturen</button>
                </form>
                </div>
                </div class="col-6">

                </div>
                <div class="row">
                </div class="col-12">
                <p>Het resultaat van jouw traject staat natuurlijk voorop.
                    Samen bekijken we welk traject het beste bij jou past!
                </p>
                </div>
                </div>
</main>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
<script scr="./js/app.js"></script>
</body>

</html>