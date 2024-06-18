<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=htmlspecialchars($_POST['name']);
    $email=htmlspecialchars($_POST['email']);
    $message=htmlspecialchars($_POST['message']);

    $to="codenest.cf@gmail.com";
    $subject="Nouveau message";

    $body  ="Nom: $name\n";
    $body .="Email: $email\n";
    $body .="Message: \n$message\n";

    $headers="From: $email";

    if(mail($to,$subject,$body,$headers)){
        echo "votre message a été envoyé avec succès!\nVous aurez une réponse le plustot possible";
    }else{
        echo "Echec d'envoi du message";
    }

}