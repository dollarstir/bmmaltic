<?php

// Developed by: Frederick Ennin(CEO of Dollarsoft)
//Email : kpin463@gmail.com
require 'loader/autoloader.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'send':
            extract($_POST);
            $mail = new Mail();

            $mail->sendmail('tuceehub.org', 'Message From  BMM Maltic Website', $message, ['kpin463@gmail.com'], $email, $name);
            break;

        case 'request':
            extract($_POST);
            $mail = new Mail();

            $mail->sendmail('bmmaltic.com', 'Request From  BMM Maltic Website', $subject.'. Contact : '.$phone, ['kpin463@gmail.com'], 'tuceehub', $name);
            break;
        case 'newsletter':
            extract($_POST);
            $mail = new Mail();

            $mail->sendmail('tuceehub.org', 'Newsletter From  BMM Maltic Website', $email, ['kpin463@gmail.com'], $email, $name);
            break;
    }
}
