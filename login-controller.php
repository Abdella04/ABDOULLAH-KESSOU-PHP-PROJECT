<?php
session_start();
require ('conn.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($password)){
        // header("Location:logi n-view.php");
       
    }else{
        $query = "SELECT * FROM users WHERE email=:email AND password=:password";
        $statement = $pdo->prepare($query);
        $statement->execute([
            ':email' => $email,
            ':password' => $password
        ]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        if($result){
            $_SESSION['email'] = $email;
            header("Location: create-new-employee.php");
        }else{
            echo 'mot de password incorrect';
        }

    }
}