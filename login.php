<?php

header("Content-type:application/json");
session_start();

try {
    $conn = new PDO("mysql:host=localhost;dbname=kauliukai;charset=utf8", "jarosasan", "jarosasan29");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['username']) && ($_POST['username'] != "")) {
        $statement = $conn->prepare("SELECT * FROM users WHERE username = :username");
        $statement->bindParam(':username', $_POST['username']);
        $statement->execute();
        $user_data = $statement->fetch(PDO::FETCH_ASSOC);
        if ($_POST['password'] == $user_data['password']) {
            $_SESSION['username'] = $_POST['username'];

            setcookie("sausainis_username", $user_data['username'], time() + 60 * 60 * 24);

            $statement = $conn->prepare("UPDATE users SET lastId = :lastId, lastLogin = :lastLogin WHERE username = :name");
            $statement->bindParam(':lastId', $_SERVER['REMOTE_ADDR']);
            $statement->bindParam(':lastLogin', date('Y-m-d H:i:s'));
            $statement->bindParam(':name', $_SESSION['username']);
            $statement->execute();



            header("Location: index.php");
        } else {
            $response['messages'] += "Bad password!";
        }
    }else{
        $response['messages'] += "Please add your username!";
    }
    $conn = null;
} catch(PDOException $e) {
    echo $e->getMessage();
}


if (isset($_POST['logout'])){
    session_destroy();
    $_SESSION = null;

    header("Location: index.php");
}
//echo json_encode($response);