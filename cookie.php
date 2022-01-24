<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>    
    <div class="container">
    <?php

        echo '<figure class="text-center"><blockquote class="blockquote"><p>Creazione di un cookie e check della presenza</p></blockquote><figcaption class="blockquote-footer">Controllare il codice</figcaption></figure>';
        
        $responso = NULL;    

        if(isset($_COOKIE["username"])){
            echo "Username: ".$_COOKIE["username"];
        } else {
            echo "nessun cookie disponibile";
        }
        
        if (isset($_GET['aggiungi'])){
            setcookie("username","Luca Rossi",time()+60*60*24*30);
            $responso = "Cookie Aggiunto";
            header("refresh: 3; url=cookie.php");
        } 
        
        if (isset($_GET["cancella"])){
            setcookie("username","", time()-3600);      //rimuovere un cookie mettendo la data di expire al passato
            $responso = "Cookie Cancellato";
            header("refresh: 3; url=cookie.php");
        } 

    ?>

        <br>
        <br>
        <button class="btn btn-primary" onclick="location.href='cookie.php?aggiungi=true'">Aggiungi Cookie</button>
        <br>
        <br>
        <button class="btn btn-danger" onclick="location.href='cookie.php?cancella=true'">Cancella Cookie</button>
        <br>
        <br>
        <label class="control-label"></label><?php echo $responso; ?></label>
    </div>   
</body>
</html>
