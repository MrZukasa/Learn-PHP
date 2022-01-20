<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funzioni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <?php

        //funzione normale
        echo '<figure class="text-center"><blockquote class="blockquote"><p>Funzione saluta()</p></blockquote><figcaption class="blockquote-footer">Scrive solo "Ciao!"</figcaption></figure>';
        function saluta(){
            echo "Ciao!";
        }
        saluta();

        echo "<br>";

        //funzione anonima

        echo '<figure class="text-center"><blockquote class="blockquote"><p>Funzione anonima</p></blockquote><figcaption class="blockquote-footer">richiamata con un assegnazione</figcaption></figure>';        
        $anonima = function(){
            echo "Anonima!";
        };
        $anonima();

        //parametri o meglio argomenti e definizione del type degli argomenti
        //uso del return

        echo '<figure class="text-center"><blockquote class="blockquote"><p>Argomenti, type e return</p></blockquote><figcaption class="blockquote-footer">Controllare il codice</figcaption></figure>';
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
</body>
</html>