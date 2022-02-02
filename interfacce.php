<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfacce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <?php

        echo '<figure class="text-center"><blockquote class="blockquote"><p>Differenze tra classi astratte e interfacce</p></blockquote><figcaption class="blockquote-footer">Controllare il codice</figcaption></figure>';
        
        //un'interfaccia è una classe senza proprietà e tutti i suoi metodi sono astratti        

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

        class Insegnante extends Persona implements entita{                                 //implementiamo quest'interfaccia che si addice a tutte le classi
            public $materia;                                                                //aggiunta dell'estensione della classe
            public function __construct($nome, $cognome,$materia){
                $this -> nome = $nome;
                $this -> cognome = $cognome;
                $this -> materia = $materia;
            }
            function saluta(){                                                               //funzione di override
                echo "Ciao sono $this->nome $this->cognome, ed insegno $this->materia. <br>";
            }
            public function cade_a_terra(){
                echo "toonf! <br>";
            }
        }

        class telefono{
            function identificati(){
                echo "Sono un telefono ";
            }
        }

        class iphone extends telefono implements entita{
            public $tipo;
            public function __construct($tipo){
                $this->tipo = $tipo;
            }

            function tipologia(){
                echo " e sono di tipo $this->tipo <br>";
            }

            public function cade_a_terra(){
                echo "craac! <br>";
            }
        }

        interface entita{
            public function cade_a_terra();
        }

        $insegnante1 = new Insegnante("Anna","Rossi","Storia");        
        $insegnante1->saluta();
        $insegnante1->cade_a_terra();

        $telefono = new iphone("Iphone");
        $telefono -> identificati();
        $telefono -> tipologia();
        $telefono ->cade_a_terra();

        ?>
    </div>
    
</body>
</html>