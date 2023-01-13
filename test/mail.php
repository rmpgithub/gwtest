<?php


    $errors = array();
    //$imie = iconv('UTF-8', 'ISO-8859-2', @$_POST['firstname']);
    //$nazwisko = iconv('UTF-8', 'ISO-8859-2', @$_POST['lastname']);
    //$email = iconv('ISO-8859-2', 'UTF-8', @$_POST['email']);
    //$temat = iconv('UTF-8', 'ISO-8859-2', @$_POST['title']);
    //$tresc = iconv('UTF-8', 'ISO-8859-2', @$_POST['text']);
    
    $name =  @$_POST['name'];
    $phone =  @$_POST['phone'];
    $email =  @$_POST['email'];
    $temat =  @$_POST['title'];
    $tresc =  @$_POST['text'];

    $message = 'Wiadomość formularza: <br> imie i nazwisko: ' . $name . '<br> email: ' . $email . '<br> telefon: ' . $phone . '<br> temat wiadomości: ' . $temat . '<br> treść wiadomości: ' . $tresc . '<br>';

   
    $msg = $message;

    require 'PHPMailer-master/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->CharSet = 'UTF-8';
    $mail->setFrom('www@agrotargiwschod.pl', 'www');
    $mail->addAddress('biuro@agrotargiwschod.pl', 'biuro');
    $mail->Subject = 'AgroTargi dane z formularza';
    $mail->msgHTML($msg);
    if (!$mail->send()) {
        $msg .= "Mailer Error: " . $mail->ErrorInfo;
    } else {
        $msg .= "Wiadomość została wysłana";
        header('Location: http://agrotargiwschod.pl');
    }



