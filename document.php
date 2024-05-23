<?php
$rg = addslashes($_POST('rg'));
$cpf = addslashes($_POST('cpf'));
$cnh = addslashes($_POST('cnh'));
$email = addslashes($_POST('email'));

$para = "joaoanime.com@gmail.com";
$assunto = "cadastro constrube";

$corpo = "RG: ".$rg"\n"."cpf".$cpf."\n"."cnh".$cnh"."\n"."CPF :".$email.;

$cabeça = "from: joaoanime.com@gmail.com"."\n"."reply-to"$email"."\n"."X-Maile:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeça)){
    echo("email-enviado")
}
else{
    echo("hove um erro");
}

?>