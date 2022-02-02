<?php require 'date.php';?>         <!--si può usare include se il file in questione è opzionale altrimenti va bene require, per evitare dublicati usare _once-->

<!DOCTYPE HTML>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial PHP 2022</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

    <?php
        $nome='Nome';
    ?>

<body>
    <figure class="container">
        <blockquote class="blockquote">
            <h3>Form Esempio</h3>
        </blockquote>
        <figcaption class="blockquote-footer">
            Analizza il codice per capire meglio gli esempi
        </figcaption>
    </figure>

    <form method="POST" action="esempio.php" class="container border border-light border-start-0 border-bottom-0 border-2 rounded-2">
        <label for="nome" class="form-label"><?php echo $nome; ?></label>
        <input type="text" name="nome" placeholder="Inserisci Nome" class="form-control">
        <label for="cognome" class="form-label">Cognome</label>
        <input type="text" name="cognome" placeholder="Inserisci Cognome" class="form-control">
        <br>
        <input type="submit" value="Invia dati" class="btn btn-primary">        
        <div class="container">
            <div class="row">
                <div class="col">
                    <br>
                    <div class="btn-group">
                        <input type="button" onClick="document.location.href='array.php'" value="Array" class="btn btn-outline-dark">
                        <input type="button" onClick="document.location.href='funzioni.php'" value="Funzioni" class="btn btn-outline-dark">
                        <input type="button" onClick="document.location.href='date.php'" value="Date + inclusione" class="btn btn-outline-dark">
                        <input type="button" onClick="document.location.href='regularexpression.php'" value="RegExp" class="btn btn-outline-dark">
                        <input type="button" onClick="document.location.href='formhandling.php'" value="Form" class="btn btn-outline-dark">
                        <input type="button" onClick="document.location.href='file.php'" value="File" class="btn btn-outline-dark">        
                        <input type="button" onClick="document.location.href='upload.php'" value="Upload" class="btn btn-outline-dark">
                        <input type="button" onClick="document.location.href='cookie.php'" value="Cookie" class="btn btn-outline-dark">
                        <input type="button" onClick="document.location.href='sessioni.php'" value="Sessioni" class="btn btn-outline-dark">
                        <input type="button" onClick="document.location.href='email.php'" value="eMail" class="btn btn-outline-dark">
                        <input type="button" onClick="document.location.href='json.php'" value="JSON" class="btn btn-outline-dark">
                        <input type="button" onClick="document.location.href='oop.php'" value="OOP" class="btn btn-outline-dark">
                        <input type="button" onClick="document.location.href='inherit.php'" value="Ereditarietà" class="btn btn-outline-dark">
                        <input type="button" onClick="document.location.href='classiastratte.php'" value="Classi Astratte" class="btn btn-outline-dark">
                        <input type="button" onClick="document.location.href='interfacce.php'" value="Interfacce" class="btn btn-outline-dark">
                        <input type="button" onClick="document.location.href='statici.php'" value="Proprietà e metodi statici" class="btn btn-outline-dark">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <?php saluta();?>
    </form>   

</body>
</html>