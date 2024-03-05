<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "eric.pfeuti2007@gmail.com";
    $assunto = "Coleta de Dados - Eric Pfeuti";

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: teste@eric.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!");
    }

?>