<?php

declare(strict_types=1);

require_once "vendor/autoload.php";

use Ramon\SrpPratica\CadastrarUsuario;
use Ramon\SrpPratica\ControladorDeEmail;

$cadastrarUsuario = new CadastrarUsuario(1,"Ramon","rdssi@hotmail.com");
$controladorDeEmail = new ControladorDeEmail();

if($controladorDeEmail->validarEmail($cadastrarUsuario->email)){
    echo "E-mail valido para o usuario ($cadastrarUsuario->nome)" . PHP_EOL;

    $controladorDeEmail->enviarEmail($cadastrarUsuario->email,"Seja bem vindo!");
} else {
    echo "E-mail inválido para o usuário ($cadastrarUsuario->nome) :-(" . PHP_EOL;
}