<?php
$rg = addslashes($_POST['rg']);
$cpf = addslashes($_POST['cpf']);
$cnh = addslashes($_POST['cnh']);
$email = addslashes($_POST['email']);

$para = "joaoanime.com@gmail.com";
$assunto = "cadastro constrube";

$corpo = "RG: ".$rg."\n"."cpf: ".$cpf."\n"."cnh: ".$cnh"."\n"."email: ".$email;

$cabeça = "from: joaoanime.com@gmail.com"."\n"."Reply-to: "$email"."\n"."X-Mailer:PHP/".phpversion();

if(mail(,$para,$assunto,$corpo,$cabeca)){
    echo("email-enviado");
}else{
    echo("hove um erro");
}

?>
