<?php

    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];


    require_once 'dtb_connect.php';


    if (empty($userEmail) || empty($userPassword))  {

        $message1 = "Please check that your email and password are filled in";
        echo "<script type='text/javascript'>alert('$message1'); window.location='./cosm_login.php';</script>";
        exit();
    };

    if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL )) {
        header("Location: ./cosm_login.php");
        exit();
    };
    

    $sql1 = $connection->prepare("SELECT `userPassword` FROM `users` WHERE `userEmail` = ?");
    $sql1->bind_param("s", $userEmail);
    $sql1->execute();
    $sql1->bind_result($dtbUsersPassword);
    $sql1->fetch();
    $sql1->close();

    $checkPassword = password_verify($userPassword, $dtbUsersPassword);

    $sql2 = $connection->prepare("SELECT `userEmail` FROM `users` WHERE `userEmail` = ?");
    $sql2->bind_param("s", $userEmail);
    $sql2->execute();
    $sql2->bind_result($dtbUsersEmail);
    $sql2->fetch();
    $sql2->close();


    if ($userEmail !== $dtbUsersEmail) {
        $message2 = "Incorrect email adress";
        echo "<script type='text/javascript'>alert('$message2'); window.location='./cosm_login.php';</script>";
        exit();
    }

    else if ($checkPassword === false) {
        $message3 = "Incorrect password";
        echo "<script type='text/javascript'>alert('$message3'); window.location='./cosm_login.php';</script>";
        exit();
    }
    else {
        $sql3 = $connection->prepare("SELECT `userName` FROM `users` WHERE `userEmail` = ?");
        $sql3->bind_param("s", $userEmail);
        $sql3->execute();
        $sql3->bind_result($dtbUsersName);
        $sql3->fetch();
        $sql3->close();
        session_start();
        $_SESSION["OnlyName"] = $dtbUsersName;

        header("Location: ./cosm_main.php");
        exit();
        

    }
    
              
    ?>