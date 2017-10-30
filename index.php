<?php
session_start();


?>
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
  <nav class="navbar navbar-dark bg-dark ">
      <a id="brand">Dices game</a>
          <form class="form-inline" id="top"  method="POST" action="login.php">
              <?php
                if (!isset($_SESSION['username'])){
                    echo '<input class="form-control mr-sm-2" type="text" placeholder="Name" name="username">
                          <input class="form-control mr-sm-2" type="password" placeholder="Password" name="password">
                           <button class="btn btn-outline-success my-2 my-sm-0" id="login" type="submit">Login</button>
                           <a id="reg" class="btn btn-outline-success my-2 my-sm-0" href="register.php">Registruotis</a>';
                }else{
                   echo'<button class="btn btn-outline-success my-2 my-sm-0" name="logout" id="logout" type="submit">Logout</button>
                        <a  name="stat" id="stat" type="submite" class="btn btn-outline-success my-2 my-sm-0" href="stats.php">Your stats</a>';
                }
              ?>
          </form>
      </div>
  </nav>

  <main class="container" id="all">
      <div class="row">
          <div id="your_win">

          </div>
      </div>
      <div class="row block">
          <div id="dices" class="dices">
              <div class="dice"><p id="kauliukas_1" class="dice_1"></p></div>
              <div class="dice"><p id="kauliukas_2" class="dice_2"></p></div>
              <div class="dice"><p id="kauliukas_3" class="dice_3"></p></div>
          </div>
      </div>
      <div class="row">
          <?php
          if (!isset($_SESSION['username'])){
              echo '<div class="btn-danger"><p>Please Log in! </p></div>';
          }else{
              echo '<div class="col button">
                        <button id="start" type="button" class="btn btn-success">Pradėtį žaidimą  </button>
                         <button id="goo" type="button" class="btn btn-success" disabled>Ridenti Kauliukus</button>
                     </div>
              ';
          }
          ?>
      </div>

  </main>


  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script  src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>