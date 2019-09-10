<?php
require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Assunto de teste", "<p>Esse é um e-mail de <b>teste</b>:</p>",
    "emilio.borges2012@yahoo.com.br", "emilio", "emilio.borges2012@gmail.com", "Borges");

var_dump($novoEmail);