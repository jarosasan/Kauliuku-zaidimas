<?php

header("Content-type:application/json");
session_start();

try {
    $conn = new PDO("mysql:host=localhost;dbname=kauliukai;charset=utf8", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['username']) && ($_POST['username'] != "")) {
        $statement = $conn->prepare("SELECT * FROM users WHERE username = :username");
        $statement->bindParam(':username', $_POST['username']);
        $statement->execute();
        $user_data = $statement->fetch(PDO::FETCH_ASSOC);
        if ($_POST['password'] == $user_data['password']) {
            $_SESSION['username'] = $_POST['username'];

            setcookie("sausainis_username", $user_data['username'], time() + 60 * 60 * 24);
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