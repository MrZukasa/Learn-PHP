<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestione File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <?php

        echo '<figure class="text-center"><blockquote class="blockquote"><p>Apertura, lettura scrittura ed append di un file di testo</p></blockquote><figcaption class="blockquote-footer">Controllare il codice</figcaption></figure>';

        $file = "note.txt";
        $testo = " Ciao sono una frase dinamica.";

        if(file_exists($file)){

        $ref = fopen($file, "r");                           //apertura file in lettura

        $content = fread($ref,filesize($file));             //legge il file dato il riferimento ed il numero di caratteri
        echo $content;                                      //stampa a video il contenuto

        fclose($ref);                                       //chiude la referenza al file

        //*leggere il file senza aprirlo
        echo '<figure class="text-center"><blockquote class="blockquote"><p>Seconda Lettura</p></blockquote><figcaption class="blockquote-footer">Controllare il codice</figcaption></figure>';

        $content=file_get_contents($file);                  //legge il file senza aprirlo
        echo $content;

        //*scrivere nel file
        echo '<figure class="text-center"><blockquote class="blockquote"><p>Scrittura nel File</p></blockquote><figcaption class="blockquote-footer">Controllare il codice</figcaption></figure>';

        $ref = fopen($file,"a");
        fwrite($ref,$testo);
        fclose($ref);

        $ref = fopen($file,"r");
        $content = fread($ref,filesize($file));
        echo $content;
        fclose($ref);

        //*scrivere nel file senza aprirlo
        echo '<figure class="text-center"><blockquote class="blockquote"><p>Seconda Scrittura nel File</p></blockquote><figcaption class="blockquote-footer">Controllare il codice</figcaption></figure>';

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
    </div>
</body>
</html>
