<?php

session_start();                          //avviare una sessione
$_SESSION["user_id"]=23;

echo $_SESSION["user_id"];

unset ($_SESSION["user_id"]);

echo $_SESSION["user_id"];

session_destroy();                        //chiudere una sessione

?>