<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proprietà e metodi statici</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <?php

        echo '<figure class="text-center"><blockquote class="blockquote"><p>Proprietà e metodi statici</p></blockquote><figcaption class="blockquote-footer">Controllare il codice</figcaption></figure>';
        
        class Persona{
            static $conteggio =0;
            public $nome;
            public $cognome;

            function __construct($nome,$cognome){
                $this->nome = $nome;
                $this->cognome = $cognome;
                //$this->conteggio =1
                Persona::$conteggio++;                
            }
            static function prova(){
                // echo $this->nome;
            }
        }
        
        echo Persona::$conteggio."<br>";
        $persona1 = new Persona("Luca","Rossi");
        echo Persona::$conteggio."<br>";
        $persona2 = new Persona("Marco","Verdi");
        echo Persona::$conteggio."<br>";

        ?>
    </div>    
</body>
</html>