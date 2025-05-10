<?php
    if(!isset($_POST["content"])){
        exit();
    }

    $to = "julien@rmbi.ch";
    $subject = "WEBSITE MESSAGE!";
    $message = $_POST["content"];
    if(mail($to, $subject, $message)){
        echo "The message was successfully sent";
        header("location: ../index.html");
    }else{
        echo "An error occurred";
    }
?>
