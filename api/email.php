<?php

if(isset($_POST['email']) && !empty($_POST['email'])){


    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $subject = addslashes($_POST['subject_input']);
    $message = addslashes($_POST['message']);

    $to = "frota@hotmail.com";
    $subject = "Contato Portfolio";
    $body = "Nome:".$name."\r\n".
            "Email: ".$email."\r\n".
            "Mensagem: ".$message;
    $header = "From: jof_frota@hotmail.com"."\r\n".
                "Reply-to: ".$email."\r\n".
                "X-Mailer:PHP/".phpversion();
    if(mail($to,$subject,$body,$header)){

        echo("Email sent successfully!");

    } else {

        echo("Email not sent.");
    }

}
?>