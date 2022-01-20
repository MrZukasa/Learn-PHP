<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <?php
        echo '<figure class="text-center"><blockquote class="blockquote"><h3>Array</h3></blockquote></figure>';
        $nome = "Luca";
        $eta = 23;
        $temperatura = "36.07";
        $is_online = true;
        $interessi = ['calcio','basket','cinema'];
        $fidanzata= null;

        class Persona
        {
            public $nome;
            public $cognome;

            public function __construct($nome,$cognome)
            {
                $this->nome = $nome;
                $this->cognome = $cognome;
            }
        }

        $persona1 = new Persona('Mario','Rossi');

        echo "var_dump della variabile nome <br>";
        var_dump($nome);

        // __________________________________ array ________________________________________
    
        echo "<hr>";

        $citta = ['Milano','Firenze','Roma'];
        // $citta = array('Milano','Firenze','Roma');  dichiarazione identica

        var_dump($citta);

        echo "<br> Prima della modifica ".$citta[2];
        $citta[2]="Napoli";
        echo "<br>Dopo la modifica ".$citta[2]."<br>";

        var_dump($citta);
        echo "<hr>";

        echo "<br>Ciclare elementi dell'array";

        for ($i=0; $i < count($citta); $i++) { 
            echo "<br>".($i+1)." ".$citta[$i];
        }

        //array associativo (a chiave)
        $persona = [
            "nome"=>"Luca",
            "cognome"=>"Rossi",
            "eta"=>25            
        ];
        
        echo '<figure class="text-center"><blockquote class="blockquote"><p>Array associativo</p></blockquote></figure>';
        var_dump($persona);

        echo '<figure class="text-center"><blockquote class="blockquote"><p>lo mando a schermo con il foreach</p></blockquote></figure>';
        foreach ($persona as $chiave => $valore){
            echo $chiave ." =>".$valore."<br>";
        };

        echo '<figure class="text-center"><blockquote class="blockquote"><p>Array multidimensionale</p></blockquote></figure>';

        $classi =[
            ["Luca", "Marco","Anna"],
            ["Leonardo", "Mattia","Paola"]
        ];

        echo '<figure class="text-center"><blockquote class="blockquote"><p>Stampa con foreach annidati</p></blockquote></figure>';
        foreach ($classi as $classe => $alunni){
            echo "La classe numero: ".($classe+1)." contiene: <br>";
            foreach ($alunni as $alunno => $chiamato){
                echo "L'alunno: ".$chiamato."<br>";
            }
        };

        echo '<figure class="text-center"><blockquote class="blockquote"><p>Stampa con for annidati</p></blockquote></figure>';
        for ($i=0; $i < count($classi); $i++) { 
            for ($j=0; $j < count($classi[$i]); $j++) { 
                echo "Nella classe: ".($i+1)." c'è l'alunno: ".$classi[$i][$j]."<br>";
            }
        }

        echo '<figure class="text-center"><blockquote class="blockquote"><p>Ordinamento Array Normali</p></blockquote></figure>';
        echo '<figure><blockquote class="blockquote"><p>Non ordinato</p></blockquote></figure>';
        print_r($citta);
        echo '<figure><blockquote class="blockquote"><p>Ordinato</p></blockquote></figure>';
        sort($citta);
        print_r($citta);
        echo '<figure><blockquote class="blockquote"><p>Ordinato al contrario</p></blockquote></figure>';
        rsort($citta);
        print_r($citta);

        echo '<figure class="text-center"><blockquote class="blockquote"><p>Ordinamento Array Associativi</p></blockquote></figure>';
        echo '<figure><blockquote class="blockquote"><p>Ordinamento per Chiave</p></blockquote></figure>';
        ksort($persona);
        print_r($persona);
        echo '<figure><blockquote class="blockquote"><p>Ordinamento per Chiave Inverso</p></blockquote></figure>';
        krsort($persona);
        print_r($persona);

        echo '<figure><blockquote class="blockquote"><p>Ordinamento per Valore</p></blockquote></figure>';
        asort($persona);
        print_r($persona);
        echo '<figure><blockquote class="blockquote"><p>Ordinamento per Valore Inverso</p></blockquote></figure>';
        arsort($persona);
        print_r($persona);
        
        echo "<hr>";

    ?>
    </div>
</body>
</html>
