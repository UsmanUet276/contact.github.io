<?php

if(isset($_POST['submit']) && $_POST['email']!=""){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $to = "ubf16371@gmail.com";
    $body = "";
    
    $body .= "From: ".$name. "\r\n";
    $body .= "Phone".$phone. "\r\n";
    $body .= "Message: ".$message. "\r\n";
    
    mail($to , $subject , $body);
}
?>
