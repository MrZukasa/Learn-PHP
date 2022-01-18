<?php

//$_FILES è un array associativo considerato come una variabile globale

if($_SERVER["REQUEST_METHOD"] == "POST"){                   //verifico che il metodo sia effettivamente POST
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){                      //verifico che l'array esista e che non abbia errori all'interno
        $estensioni_permesse = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");                 //array associativo contenente estensioni e nomi estensione
        $nome_file = $_FILES["photo"]["name"];                      //campo nome dell'array associativo globale
        $tipo_file = $_FILES["photo"]["type"];                      //campo type dell'array associativo globale
        $dimensione_file = $_FILES["photo"]["size"];                //camp size dell'array associativo globale
        
        // verifichiamo estensione
        $estensione = pathinfo($nome_file, PATHINFO_EXTENSION);         //leggo l'estensione del file                        
        if(!array_key_exists($estensione, $estensioni_permesse)) die("Errore: Seleziona un formato valido");            //se l'estensione non è contenuta nell'insieme delle estensioni_permesse allora die

        // verifichiamo la grandezza massima 5mb
        $dimensione_massima = 5*1024*1024;                              //dimensione massima consentita
        if($dimensione_file > $dimensione_massima) die("Errore: La grandezza è superiore al limite di 5mb");            //

        // Verifichiamo il tipo MIME
        if(in_array($tipo_file, $estensioni_permesse)){
            // Controllare se il file esiste già
            if(file_exists("upload/".$nome_file)){
                echo $nome_file ." esiste già.";
            } else {
                move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/".$nome_file);
                echo "il tuo file è stato caricato con successo";
            }
        } else {
            echo "Errore: C'è stato un problema con il caricamento del tuo file, riprova.";
        }
    } else {
        echo "Errore: ".$_FILES["photo"]["error"];
    }
}

?>