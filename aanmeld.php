<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="shortcut icon" href="./img/icon dark.jpg" type="image/x-icon">
    <title>Basketball</title>
</head>

<body>

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
                <input type="text" class="form-control" id="burgerservicenummer"
                    aria-describedby="burgerservicenummerlHelp" placeholder="Invoer burgerservicenummer"
                    name="burgerservicenummer">
            </div>

            </div>
            <div class="form-group">
                <label for="email">e-mail</label>
                <input type="text" class="form-control" id="e-mail" aria-describedby="e-mail"
                    placeholder="Invoer e-mail" name="e-mail">

                <div class="row">
                </div class="col-6">
                <form action="./creat.php" method="post">
                    <div class="form-group">
                        <label for="phone-number">phone-number</label>
                        <input type="text" class="form-control" id="phone-number" aria-describedby="phone-numberHelp"
                            placeholder="Invoer phone-number" name="e-mail">
                    </div>

                    <div class="row">
                    </div class="col-6">
                    <form action="./creat.php" method="post">
                        <div class="form-group">
                            <label for="firstname">firstname</label>
                            <input type="text" class="form-control" id="firstname" aria-describedby="firstlHelp"
                                placeholder="Invoer voornaam" name="firstname">
                        </div>
                        <div class="form-group">
                            <label for="infix">infix</label>
                            <input type="text" class="form-control" id="infix" aria-describedby="infixlHelp"
                                placeholder="Invoer tussenvoegsel" name="infix">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Lastname</label>
                            <input type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp"
                                placeholder="Invoer achternaam" name="lastname">

                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" aria-describedby="password"
                                placeholder="Invoer password" name="password">
                        </div>
                    </form>

                    <div class="form-group">
                        <input type="radio" id="gender" name="gender" value="male">
                        <label for="male">Male</label><br>
                        <input type="radio" id="gender" name="gender" value="female">
                        <label for="female">Female</label><br>
                        <input type="radio" id="gender" name="gender" value="other">
                        <label for="other">Other</label>
                    </div>

                    <form action="/">
                        <input type="date" id="brith" name="birth">
                    </form>

                    <!-- <div class="row">
                    </div class="col-12">
                  </div>
                  </div> -->
                    <p>Wij zulluen uw gegevens nooit delen met derde!</p>
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> I agree with the condition</label><br>
              <button type="submit" class="btn btn-dark">Versturen</button>
          </form>
</div>
</div class="col-6">
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