
<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">

  </head>
  <body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark >
      <a class="brand" href="#">Super game</a>
          <form class="form-inline my-2 my-lg-0 text-right" method="POST" action="game.php">
              <input class="form-control mr-sm-2" type="text" placeholder="Name" name="username">
              <input class="form-control mr-sm-2" type="password" placeholder="Password" name="password">
              <button class="btn btn-outline-success my-2 my-sm-0" id="login" type="submit">Login</button>
              <a id='reg' class="btn btn-outline-success my-2 my-sm-0" href="register.php">Registruotis</a>
              <a class="btn btn-outline-success my-2 my-sm-0" href="logOut.php">Log out</a>

          </form>
      </div>
  </nav>

  <main class="container">
      <div class="row">
          <div id="your_win">

          </div>
          <div class="dice"><p id="kauliukas_1" class="dice_1"></p></div>
          <div class="dice"><p id="kauliukas_2" class="dice_2"></p></div>
          <div class="dice"><p id="kauliukas_3" class="dice_3"></p></div>
      </div>
      <div class="row">
          <div class="col button">
              <button id="start" type="button" class="btn btn-success">Pradėtį žaidimą  </button>
              <button id="goo" type="button" class="btn btn-success" disabled>Ridenti Kauliukus</button>
          </div>
      </div>

  </main>


  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>