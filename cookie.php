<?php

setcookie("username","Luca Rossi",time()+60*60*24*30);
if(isset($_COOKIE["username"])){
    echo $_COOKIE["username"];
} else {
    echo "nessun cookie disponibile";
}

setcookie("username","", time()-3600);      //rimuovere un cookie mettendo la data di expire al passato 

?>