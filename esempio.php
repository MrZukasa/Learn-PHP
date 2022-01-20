<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esempi vari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <?php

    const ADDRESS="Viale Genova";                               // costante variabile globale

    $nome=$_POST['nome'];
    $cognome=$_POST['cognome'];
    echo "Buongiorno ".$nome." ".$cognome;

    function saluta() {
        $GLOBALS['cognome'] = 'Nuovo Cognome';                  // dichiarazione variabile globale
        echo $GLOBALS['cognome'];
        define('INDIRIZZO','Piazza Roma');                      // costante dentro la funzione
    }

    echo '<figure class="text-center"><blockquote class="blockquote"><p>Funzione</p></blockquote><figcaption class="blockquote-footer">Controllare il codice</figcaption></figure>';
    saluta();

    echo '<figure class="text-center"><blockquote class="blockquote"><p>If else statement</p></blockquote><figcaption class="blockquote-footer">Controllare il codice</figcaption></figure>';   

    if ($nome == "Luca"){                                       // esempio di if
        echo "Ciao Luca";
    } elseif ($nome =="Marco") {
        echo "Ciao Marco";        
    } else {
        echo "Ciao Sconosciuto";
    }

    $is_online = true;
    if (!$is_online){
        echo "<br>Offline";
    } else {
        echo "<br>Online";
    }

    $numero = 21;
    switch ($numero){
        case 1:
            echo "<br>Numero è 1";
            break;
        case 2:
            echo "<br>Numero è 2";
            break;
        case 21:
            echo "<br>Numero è 21";
            break;
        default:
            echo "<br>Non so cosa scrivere";
    }

    echo '<figure class="text-center"><blockquote class="blockquote"><p>Loop e Cicli vari</p></blockquote><figcaption class="blockquote-footer">Controllare il codice</figcaption></figure>';

    echo '<figure class="text-center"><blockquote class="blockquote"><p>For</p></blockquote><figcaption class="blockquote-footer">Controllare il codice</figcaption></figure>';
    for ($i=0; $i < 10;$i++){
        echo "<br>".$i;
    }

    $asociativo = [
        "nome" => "Luca",
        "cognome" => "Rossi",
        "eta" => 25
    ];

    echo '<figure class="text-center"><blockquote class="blockquote"><p>Foreach</p></blockquote><figcaption class="blockquote-footer">Controllare il codice</figcaption></figure>';
    foreach ($asociativo as $chiave =>$valore){
        echo "<br>".$chiave." ".$valore;
    }

    echo '<figure class="text-center"><blockquote class="blockquote"><p>While</p></blockquote><figcaption class="blockquote-footer">Controllare il codice</figcaption></figure>';
    $i=0;
    while ($i < 10){
        echo "<br>".$i;
        $i++;
    }

    $i=0;
    echo '<figure class="text-center"><blockquote class="blockquote"><p>Do While</p></blockquote><figcaption class="blockquote-footer">Controllare il codice</figcaption></figure>';
    do{
        echo "<br>".$i;
        $i++;
    }while ($i < 10);

    echo '<figure class="text-center"><blockquote class="blockquote"><p>Continue</p></blockquote><figcaption class="blockquote-footer">Controllare il codice</figcaption></figure>';
    for ($i=0; $i < 10 ; $i++) { 
        if ($i == 3){
            continue;
        }
        echo "<br>".$i;
    }

    ?>
    </div>
</body>
</html>