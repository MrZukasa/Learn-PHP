<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ereditarietà</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">

    <?php

        class Persona{
            public $nome;
            public $cognome;

            public function __construct($nome, $cognome){
                $this -> nome = $nome;
                $this -> cognome = $cognome;
            }
            public function saluta(){                                                       //se fosse stata protected avrei dovuto chiamarla da dentro una funzione
                echo "Ciao sono $this->nome $this->cognome. <br>";                          //e poi a sua volta avrei dovuto chiamare $this->nomefunzione()
            }                                                                               //se fosse stata private non potevo chiamarla da nessun'alta parte se non nella classe
        }

        class Insegnante extends Persona{
            public $materia;                                                                //aggiunta dell'estensione della classe
            public function __construct($nome, $cognome,$materia){
                $this -> nome = $nome;
                $this -> cognome = $cognome;
                $this -> materia = $materia;
            }
            function saluta(){              //funzione di override
                echo "Ciao sono $this->nome $this->cognome, ed insegno $this->materia. <br>";
            }
        }

        $insegnante1 = new Insegnante("Anna","Rossi","Storia");
        $insegnante1->saluta();
        var_dump($insegnante1);

    ?>

    </div>    
</body>
</html>