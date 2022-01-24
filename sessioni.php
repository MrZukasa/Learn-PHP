<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessioni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        
        <?php

            echo '<figure class="text-center"><blockquote class="blockquote"><p>Creo una Sessione</p></blockquote><figcaption class="blockquote-footer">Controllare il codice</figcaption></figure>';

            $responso = NULL;

            if (isset($_GET['start'])){            
                session_start();                          //avviare una sessione
                $_SESSION["user_id"]=23;
                $responso = "User ID: ".$_SESSION["user_id"];
                header("refresh: 3; url=sessioni.php");
            }

            if (isset($_GET['unset'])){            
                unset ($_SESSION["user_id"]);                 //togliere una singola variabile
                $responso = "User ID cancellato";
                header("refresh: 3; url=sessioni.php");
            }

            if (isset($_GET['stop'])){                
                session_destroy();                        //chiudere una sessione
                $responso = "Sessione terminata";
                header("refresh: 3; url=sessioni.php");                
            }

        ?>
        
        <br>
        <br>
        <button class="btn btn-primary" onclick="location.href='sessioni.php?start=true'">Avvia Sessione</button>
        <br>
        <br>
        <button class="btn btn-dark" onclick="location.href='sessioni.php?unset=true'">Cancella User ID</button>
        <br>
        <br>
        <button class="btn btn-danger" onclick="location.href='sessioni.php?stop=true'">Cancella Sessione</button>        
        <br>
        <br>
        <label class="control-label"></label><?php echo $responso; ?></label>
        
    </div>
</body>
</html>