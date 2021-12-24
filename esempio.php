<?php

    const ADDRESS="Viale Genova";                               // costante variabile globale

    $nome=$_POST['nome'];
    $cognome=$_POST['cognome'];
    echo "Buongiorno ".$nome." ".$cognome;

    function saluta() {
        $GLOBALS['nome'] = 'Nuovo';                             // dichiarazione variabile globale
        echo $GLOBALS['nome'];
        define('INDIRIZZO','Piazza Roma');                      // costante dentro la funzione
    }
    
    saluta();

?>