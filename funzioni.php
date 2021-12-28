<?php

//funzione normale

function saluta(){
    echo "Ciao!";
}
saluta();

echo "<br>";

//funzione anonima

$anonima = function(){
    echo "Anonima!";
};
$anonima();

//parametri o meglio argomenti e definizione del type degli argomenti
//uso del return

function somma(int $valore1,int $valore2){
    $somma = $valore1+$valore2;    
    return $somma;
}
echo "<br>".somma(2,2);

function sommadefault(int $valore1,int $valore2 = 30){
    $sommadefault = $valore1+$valore2;
    return $sommadefault;
}
echo "<br>".sommadefault(2);                                                  
//se non si imposta un valore utilizza quello di default;

function returntype(int $valore1,int $valore2 = 30): int {                    
    //tipizzare la funzione
    $returntype = $valore1+$valore2;
    return $returntype;
}
echo "<br>".returntype(4);

?>