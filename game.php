<?php
session_start();

if(isset($_POST['username']) && $_POST['password'] != "") {
    try {
        $conn = new PDO("mysql:host=localhost;dbname=kauliukai;charset=utf8", "root", "");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $conn->prepare("SELECT * FROM users WHERE username = :username");
        $statement->bindParam(':username', $_POST['username']);
//        $statement->bindParam(':password', $_POST['password']);
        $statement->execute();
        $user_data = $statement->fetch(PDO::FETCH_ASSOC);

    } catch(PDOException $e) {
        echo $e->getMessage();
    }

    print_r($user_data);
    print_r($_POST);
    print_r($_SESSION);
    if($_POST['password'] == $user_data['password']) {
        $_SESSION['username'] = $_POST['username'];


        setcookie("sausainis_username", $user_data['username'], time()+ 60*60*24);
        header("Location: index.php");
    } else {
        echo "Try again.";
    }
}


?>