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
        class Persona{
            public $nome;
            public $cognome;

            public function __construct($nome, $cognome){
                $this->nome = $nome;
                $this->cognome = $cognome;
            }
            function saluta() {
                echo "Ciao sono $this->nome $this->cognome. <br>";
            }
        }

        class Insegnante extends Persona{
            public $materia;

            public function __construct($nome, $cognome, $materia){
                $this->nome=$nome;
                $this-> cognome = $cognome;
                $this->materia = $materia;
            }
        }
        $insegnante1= new Insegnante("Anna","Rossi","Storia");
        $insegnante1->saluta()
    ?>
    </div>
</body>
</html>