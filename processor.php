<?php
// Developed by: Frederick Ennin(CEO of Dollarsoft)
//Email : kpin463@gmail.com 
require 'loader/autoloader.php';

if(isset($_GET['action'])){
    $action = $_GET['action'];

    switch($action){
        case "send":
            extract($_POST);
            $mail = new Mail();

            $mail->sendmail('localhost', "Message From  BMM Maltic Website", $message, array('kpin463@gmail.com'), $email, $name);
            break;

        case "request":
            extract($_POST);
            $mail = new Mail();

            $mail->sendmail('localhost', "Request From  BMM Maltic Website", $subject.'. Contact : '.$phone, array('kpin463@gmail.com'), $email, $name);
            break;
        case 'newsletter':
            extract($_POST);
            $mail = new Mail();

            $mail->sendmail('localhost', "Newsletter From  BMM Maltic Website", $email, array('kpin463@gmail.com'), $email, $name);
            break;
    }
}