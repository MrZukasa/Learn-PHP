<?php

    const ADDRESS="Viale Genova";                               // costante variabile globale

    $nome=$_POST['nome'];
    $cognome=$_POST['cognome'];
    echo "Buongiorno ".$nome." ".$cognome;

    function saluta() {
        $GLOBALS['cognome'] = 'Nuovo Cognome';                             // dichiarazione variabile globale
        echo $GLOBALS['cognome'];
        define('INDIRIZZO','Piazza Roma');                      // costante dentro la funzione
    }
    
    echo "<h3>Funzione</h3>";
    saluta();

    echo "<h3>If else sttement</h3>";    

    if ($nome == "Luca"){                                        // esempio di if
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

    echo "<h3>Loop</h3>";

    echo "<h4>For</h4>";
    for ($i=0; $i < 10;$i++){
        echo "<br>".$i;
    }

    $asociativo = [
        "nome" => "Luca",
        "cognome" => "Rossi",
        "eta" => 25
    ];
    
    echo "<h4>Foreach</h4>";
    foreach ($asociativo as $chiave =>$valore){
        echo "<br>".$chiave." ".$valore;
    }

    echo "<h4>While</h4>";
    $i=0;
    while ($i < 10){
        echo "<br>".$i;
        $i++;
    }

    $i=0;
    echo "<h4>do while</h4>";
    do{
        echo "<br>".$i;
        $i++;
    }while ($i < 10);

    echo "<h4>Continue</h4>";
    for ($i=0; $i < 10 ; $i++) { 
        if ($i == 3){
            continue;
        }
        echo "<br>".$i;
    }

?>