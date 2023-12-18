<?php


    $userName = $_POST['name'];
    $userSurname = $_POST['surname'];
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];


    require_once 'dtb_connect.php';


    if (empty($userName) || empty($userSurname) || empty($userEmail) || empty($userPassword))  {

        $message = "Please fill in all the information";
        echo "<script type='text/javascript'>alert('$message'); window.location='./cosm_signup.php';</script>";
        exit();
    };


    if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL )) {
        header("Location: ./cosm_signup.php");
        exit();
    };


    $hashedPasswordSignup = password_hash($userPassword, PASSWORD_DEFAULT);
    
    $sql = $connection->prepare("INSERT INTO `users`( `userName`, `userSurname`, `userEmail`, `userPassword`) VALUES (?,?,?,?)");
    $sql->bind_param("ssss", $userName, $userSurname, $userEmail, $hashedPasswordSignup );
    $sql->execute();

    $sql->close();
    $connection->close();
              
    header("Location: ./cosm_login.php");
    exit();

    ?>

