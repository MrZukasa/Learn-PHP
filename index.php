<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial PHP 2021</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 200px;
            padding:40px;
        }            
        input{
            margin: 10px 0;
        }        
    </style>
</head>

    <?php
        $nome='Nome';
    ?>

<body>
    <h1>Form Esempio</h1>
    <form method="POST" action="esempio.php">
        <label for="nome"><?php echo $nome; ?></label>
        <input type="text" name="nome" placeholder="Inserisci Nome">
        <label for="cognome">Cognome</label>
        <input type="text" name="cognome" placeholder="Inserisci Cognome">
        <input type="submit" value="Invia dati">
        <input type="button" onClick="document.location.href='funzioni.php'" value="Funzioni">
    </form>   

    <?php
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
        
        echo "<h4>Array associativo</h4>";
        var_dump($persona);

        echo "<h4> lo mando a schermo con il foreach </h4>";
        foreach ($persona as $chiave => $valore){
            echo $chiave ." =>".$valore."<br>";
        };

        echo "<h4>Array multidimensionale</h4>";

        $classi =[
            ["Luca", "Marco","Anna"],
            ["Leonardo", "Mattia","Paola"]
        ];

        echo "<h4>Stampa con foreach annidati</h4>";
        foreach ($classi as $classe => $alunni){
            echo "La classe numero: ".($classe+1)." contiene: <br>";
            foreach ($alunni as $alunno => $chiamato){
                echo "L'alunno: ".$chiamato."<br>";
            }
        };

        echo "<h4>Stampa con for annidati</h4>";
        for ($i=0; $i < count($classi); $i++) { 
            for ($j=0; $j < count($classi[$i]); $j++) { 
                echo "Nella classe: ".($i+1)." c'è l'alunno: ".$classi[$i][$j]."<br>";
            }
        }

        echo "<h3>Ordinamento Array Normali</h3>";
        echo "<h4>Non ordinato</h4>";
        print_r($citta);
        echo "<h4>Ordinato</h4>";
        sort($citta);
        print_r($citta);
        echo "<h4>Ordinato al contrario</h4>";
        rsort($citta);
        print_r($citta);

        echo "<h3>Ordinamento Array Associativi</h3>";
        echo "<h4>Ordinamento per Chiave</h4>";
        ksort($persona);
        print_r($persona);
        echo "<h4>Ordinamento per Chiave inverso</h4>";
        krsort($persona);
        print_r($persona);

        echo "<h4>Ordinamento per Valore</h4>";
        asort($persona);
        print_r($persona);
        echo "<h4>Ordinamento per Valore inverso</h4>";
        arsort($persona);
        print_r($persona);

        echo "<hr>";


    ?>

</body>
</html>