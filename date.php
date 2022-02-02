<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <?php

    echo "<br>";
    echo '<figure class="text-center"><blockquote class="blockquote"><p>Codice per le istruzioni relative alle date</p></blockquote><figcaption class="blockquote-footer">Chiaramente il codice lato client, dato che è PHP</figcaption></figure>';
    $data = date("d-m-Y",1872454213);  //formato timestamp
    // echo $data;
    $time = date('h:i:sa',1872454213); //ore : minuti: secondi : se am o pm
    // echo "<br>".$time;

    $today = date('d-m-Y H:i:sa',time()); //
    // echo "<br>".$today;

    $make = mktime(15,49,00,02,12,2021);   //crea il timestamp della data che vuoi 
    // echo "<br>".$make;

    $stringa = strtotime("today");          //crea la stringa di timestamp della data che vuoi in maniera più furba
    // echo "<br>".$stringa;

    $summ = date('d-m-Y', strtotime("now"."+3 days"));              // somme di date
    // echo "<br>".$summ;

    function saluta() {
        echo "Ciao da date <br>";
    }

    ?>
    </div>
</body>
</html>