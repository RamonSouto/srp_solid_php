<?php

declare(strict_types=1);

namespace Ramon\SrpPratica;

class Mail
{
    public function send(string $email, string $mensagem): void
    {
        echo "----------------------------------------------------------------" . PHP_EOL;
        echo "E-mail enviado com sucesso para ($email)!" . PHP_EOL;
        echo "----------------------------------------------------------------" . PHP_EOL;
    }
}