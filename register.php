<?php
$errors = [];

if(isset($_POST['username']) && $_POST['username'] != "" && $_POST['pass'] != "" && $_POST['pass'] == $_POST['conf_pass']) {
    try {
        $conn = new PDO("mysql:host=localhost;dbname=kauliukai;charset=utf8", "jarosasan", "jarosasan29");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $conn->prepare("SELECT username FROM users");
        $statement->execute();
        $users_data = $statement->fetchAll(PDO::FETCH_ASSOC);


        if($users_data == $_POST['username']){
            $errors[] = "User exsist!";
        }else {
            $statement = $conn->prepare("INSERT INTO users (username, password, lastId) VALUES (:username, :password, :id )");
            $statement->bindParam(':username', $_POST['username']);
            $statement->bindParam(':password', $_POST['pass']);
            $statement->bindParam(':id', $_SERVER['REMOTE_ADDR']);
            $statement->execute();

            header("Location: index.php");
        }

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}

function showErrors($errors){

}
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
    <link href="style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col text-center form">
            <form method="POST">
                <h2>Register</h2
                <div id="alert"></div>
                <div class="input-group regInput">
                    <input id="username" class="form-control form-control-sm" type="text"  name="username" placeholder="Username">
                </div>
                <div class="input-group regInput">
                    <input id="pass"  class="form-control form-control-sm" type="password" name="pass" placeholder="Password">
                </div>
                <div class="input-group regInput">
                    <input id="conf_pass"  class="form-control form-control-sm" type="password" name="conf_pass" placeholder="Confirm password">
                </div>
                <div class="input-group regInput">
                    <input id="add" class="btn btn-warning btn-sm" type="submit" value="Add">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>