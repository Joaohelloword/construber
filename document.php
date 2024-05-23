<?php
$rg = addslashes($_POST('rg'));
$cpf = addslashes($_POST('cpf'));
$cnh = addslashes($_POST('cnh'))

$para = "joaoanime.com@gmail.com";
$assunto = "cadastro constrube";

$corpo = "RG: ".$rg"\n"."cpf".$cpf."\n"."cnh".$cnh";
?>