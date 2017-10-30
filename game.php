<?php
header("Content-type:application/json");
session_start();

try {
    $conn = new PDO("mysql:host=localhost;dbname=kauliukai;charset=utf8", "jarosasan", "jarosasan29");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_POST['win'])){
        $statement = $conn->prepare("INSERT INTO games (name,result, ip) VALUE (:name, :win, :ip)");
        $statement->bindParam(":name", $_SESSION['username']);
        $statement->bindParam(":win", $_POST['win']);
        $statement->bindParam(":ip", $_SERVER['REMOTE_ADDR']);

        $statement->execute();

    }elseif(isset($_GET['stat'])){
        $statement = $conn->prepare("SELECT * FROM games WHERE name = :name");
        $statement->bindParam(":name", $_SESSION['username']);
        $statement->execute();
        $response['game'] = $statement->fetchAll(PDO::FETCH_ASSOC);
    }else{
        $statement = $conn->prepare("SELECT * FROM games");
        $statement->execute();
        $response['game'] = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    $conn = null;
    } catch(PDOException $e) {
    $response['message'] = $e->getMessage();
}
//        header("Location: index.php");

echo json_encode($response);




