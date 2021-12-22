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

        // __________________________________ array _____________________________________________________

        $citta1 = ['Milano','Firenze','Roma'];
        $citta = array('Milano','Firenze','Roma');

        var_dump($citta);

        echo "".$citta[2]

    ?>

</body>
</html>