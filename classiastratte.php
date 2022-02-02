<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classi Astratte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <?php

    echo '<figure class="text-center"><blockquote class="blockquote"><p>Classi astratte ed Extended</p></blockquote><figcaption class="blockquote-footer">Controllare il codice</figcaption></figure>';

        abstract class Persona{                                            //dichiarazione classe astratta
            public $nome;
            public $cognome;

            public function __construct($nome, $cognome){
                $this->nome = $nome;
                $this->cognome = $cognome;
            }
            abstract function saluta($nome, $cognome);                      //dichiariamo la funzione senza un body all'interno, quindi senza istruzioni all'interno (metodo astratto)
        }

        class Insegnante extends Persona{                                   //la classe figlia avra il metodo astratto con un parametro default
            public $materia;

            public function __construct($nome, $cognome, $materia){
                $this->nome=$nome;
                $this-> cognome = $cognome;
                $this->materia = $materia;
            }
            function saluta($nome, $cognome, $materia="Storia"){
                echo "Buongiorno sono $nome $cognome, insegno $materia <br>";
            }
        }
        $insegnante1= new Insegnante("Anna","Rossi","Storia");
        $insegnante1->saluta($insegnante1->nome,$insegnante1->cognome,$insegnante1->materia);
    ?>
    </div>
</body>
</html>