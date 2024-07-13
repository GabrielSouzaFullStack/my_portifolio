<?php

    $Name = addslashes($_POST['Name']);
    $Email = addslashes($_POST['Email']);
    $Phone = $_POST['Phone'];

    $destino_form_lead = "dev.souzaofc@gmail.com";
    $assunto_form_lead = "Formulário de Contato - Dev.Souza";

    $corpo_email = "Nome: ".$Name."\n"."Email: ".$Email."\n"."Telefone: ".$Phone;
    $headers = "From: dev.souzaofc@gmail.com"."\n"."Reply-To: ".$Email."\r"."X=Maile:PHP/".phpversion();

    if(mail($destino_form_lead,$assunto_form_lead,$corpo_email,$headers)){
        echo ("E-mail enviado com sucesso!");
    }else{
        echo("Ops!Ocorreu um erro. \n E-mail não enviado!");
    }
    
?>