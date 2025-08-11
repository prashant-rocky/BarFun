<?php
session_start();

    $email_to = "info@barfun.club"; // change with your email
    $name     = $_POST['name'];  
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $date    = $_POST['date'];
    $person    = $_POST['person'];
    $time    = $_POST['time'];
    $subject   = $_POST['subject'];
    $message    = $_POST['message'];
    
    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if(mail($email_to, $subject, $message, $headers)){
        header('location: /');
        echo "success";       
    } 
    else{
        header('location: /');
        echo "failed";     
    }  
?>
