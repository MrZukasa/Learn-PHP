<?php

$file = "note.txt";
$testo = " Ciao sono una frase dinamica.";

if(file_exists($file)){

    $ref = fopen($file, "r");                           //apertura file in lettura

    $content = fread($ref,filesize($file));             //legge il file dato il riferimento ed il numero di caratteri
    echo $content;                                      //stampa a video il contenuto

    fclose($ref);                                       //chiude la referenza al file

    //*leggere il file senza aprirlo
    echo "<br><br><center><p>________________________________ Seconda Lettura ________________________________</center></p><br><br>";

    $content=file_get_contents($file);                  //legge il file senza aprirlo
    echo $content;

    //*scrivere nel file
    echo "<br><br><center><p>________________________________ Scrittura nel file ________________________________</center></p><br><br>";

    $ref = fopen($file,"a");
    fwrite($ref,$testo);
    fclose($ref);


    $ref = fopen($file,"r");
    $content = fread($ref,filesize($file));
    echo $content;
    fclose($ref);

    //*scrivere nel file senza aprirlo
    echo "<br><br><center><p>________________________________ Seconda scrittura nel file ________________________________</center></p><br><br>";

    $testo2 = " Seconda frase dinamica.";
    file_put_contents($file,$testo2.PHP_EOL, FILE_APPEND);
    $content = file_get_contents($file);
    echo $content;

    rename($file,"nome_nuovo.txt");
    echo "<br>File rinominato in 'nome_nuovo.txt'";
    rename("nome_nuovo.txt",$file);

    //unlink($file);                                //cancella il file

} else {
    echo "File non esistente";
}

?>