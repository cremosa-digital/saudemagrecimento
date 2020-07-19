<?php
    ini_set('display_errors', 1);

    error_reporting(E_ALL);

    $to = "marciocamarajr@gmail.com";
    //$to = "info@saudemagrecimento.com.br";
    $subject = 'E-mail usuário site';
    $message = "Nome do usuário: " . $_POST['nome'] . "\n E-mail do usuário: " . $_POST['email'];
    $headers = "De:" . $_POST['nome'] . "<" . $_POST['email'] . ">";

    mail($to, $subject, $message, $headers);

    echo "OK";
?>