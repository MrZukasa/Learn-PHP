<?php

$to = "qwerty@gmail.com";
$subject = "oggetto del messaggio";
$from = "mittente@gmail.com";

$headers ='MIME-Version 1.0'."\r\n";
$heders .= 'Content-type: text/html; charset=UTF-8'."\r\n";

$headers .= 'Form: '.$from. "\r\n";

$message = '<html><body>';
$message .='<h1 style="color: blue;">Titolo della email</h1>';
$message .='</body></html>';

if(mail($to, $subject, $message,$headers)){
    echo "la mail è stata inviata";
}else{
    echo "errore durante l'invio";
}

?>