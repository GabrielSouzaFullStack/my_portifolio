<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'path/to/PHPMailer/src/Exception.php';
    require 'path/to/PHPMailer/src/PHPMailer.php';
    require 'path/to/PHPMailer/src/SMTP.php';

    if(isset($_POST['ENVIAR']) && !empty($_POST['ENVIAR'])){

        $name = addslashes($_POST['Name']);
        $email = addslashes($_POST['Email']);
        $phone = $_POST['Phone'];
        $message = addslashes($_POST['Message']);

        $destino_form_lead = "dev.souzaofc@gmail.com";
        $assunto_form_lead = "Formulário de Contato - Dev.Souza";

        $corpo_email = "Nome: ".$name."\n"."Email: ".$email."\n"."Telefone: ".$phone."\n". "Messagem: ". $message;
        $headers = "From: dev.souzaofc@gmail.com"."\r\n"."Reply-To: ".$email."\r\n"."X=Maile:PHP/".phpversion();

        if(mail($destino_form_lead,$assunto_form_lead,$corpo_email,$headers)){
            echo ("E-mail enviado com sucesso!");
        }else{
            echo("Ops!Ocorreu um erro. \n E-mail não enviado!");
        }
    }
    
?>