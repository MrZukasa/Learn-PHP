<?php

$testo = "Oggi è una splendida giornata anche se è prevista neve";

//match semplices
$pattern = "/Og[gk]i/";                             //classe di caratteri con tra quadre il match da ricercare fosse stato [^gk] sarebbe stato negato
if (preg_match($pattern, $testo)){                  //se fosse stato [a-z] sarebbe stato da a a z
    echo "Match trovato";
} else {
    "Match non trovato";
}

$pattern = "/è/";
$matches = preg_match_all($pattern, $testo, $array);
echo "<br>".$matches. " match sono stati trovati";          //sapere quante occorenze ci sono

//Classi predefinite
$nomeimmagine = "logo brand nero.png";
$patterSpazi = "/\s/";                          //rimuove spazi, tab, newline, return carriage
$replacement = "_";
echo "<br>". preg_replace($patterSpazi, $replacement, $nomeimmagine);     //rimpiazza con il carattere

//Quantificatori
$pattern = "/[\s,]+/";                          //metch una o più occorrenze di caratteri con spazio o con virgola
$text = "My favourite color are red, green and blue";
$parts = preg_split($pattern, $text);                                    //splitta un array           

foreach ($parts as $part){
    echo "<br>".$part;
}

//Ancore
$pattern = "/^M/";                                                              //tutto quello che comincia per M maiuscola se mettessi i fuori dal pattern 
$names = array("Marco Rossi", "Luca Verdi", "Mattia Gialli");                   //andrei a dire kase-insensitive ed userei un modificatore di pattern
$matches = preg_grep($pattern,$names);                                          //prende gli elementi degli array che matchano il pattern

foreach ($matches as $match){
    echo "<br>". $match;
}

//Limiti di una parola
$pattern = "/\bcar\w*/";                                        //cerca una parola che comincia con car ed ha un numero infinito di caratteri maiuscoli o minuscoli
$replacement = "<b>$0</b>";                                     //il target che trova
$text = "Words beginning with car: cart, carrot, cartoon. Words ending with car: scar, oscar, supercar.";
echo "<br>". preg_replace($pattern, $replacement, $text);