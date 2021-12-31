<?php


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