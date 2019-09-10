<?php
require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email("2", "provedor smtp", "emailenvio@email.com.br", "123546", "ssl", '465', "emaidestino@email.com.br", "nome");
$novoEmail->sendMail("Assunto de teste", "<p>Esse é um e-mail de <b>teste</b>:</p>",
    "emilio.borges2012@yahoo.com.br", "emilio", "emilio.borges2012@gmail.com", "Borges");

var_dump($novoEmail);