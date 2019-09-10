<?php
require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email("2", "smtp.mail.yahoo.com", "emilio.borges2012@yahoo.com.br", "f6d4m1c4", "ssl", '465', "emilio.borges2012@yahoo.com.br", "emilio");
$novoEmail->sendMail("Assunto de teste", "<p>Esse é um e-mail de <b>teste</b>:</p>",
    "emilio.borges2012@yahoo.com.br", "emilio", "emilio.borges2012@gmail.com", "Borges");

var_dump($novoEmail);