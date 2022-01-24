<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-mail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">        
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
            } else {
                echo "errore durante l'invio";
            }
        ?>        
    </div>
</body>
</html>