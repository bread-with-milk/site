<?php

 if (isset($_POST['enviar'])) {
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $asunto= 'Opinion de pagina web';

        $header= 'From: noreply@example.com'."\r\n";
        $header.= 'Reply-To: '.$email."\r\n";
        $header.= 'X-Mailer: PHP/'. phpversion();
        $mail= mail($email,$asunto,$message,$header);
        
        if($mail){
            echo "<h4 style='color: red; font-size:60px'>!Mail Enviado exitosamente!</h4>";

        }

    }

 }
