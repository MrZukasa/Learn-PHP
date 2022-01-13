<?php

// $nome=$_GET["nome"];
// $cognome=$_GET["cognome"];
$nome=$_POST["nome"];
$cognome=$_POST["cognome"];

// prova di invio variabile superglobale $_SERVER
echo($_SERVER['HTTP_HOST'])."<br>";
echo($_SERVER['HTTP_USER_AGENT'])."<br>";
echo($_SERVER['REMOTE_ADDR'])."<br>";
echo($_SERVER['SERVER_PROTOCOL'])."<br>";
echo($_SERVER['REQUEST_METHOD'])."<br>";
echo($_SERVER['QUERY_STRING'])."<br>";

echo "<b>Nome: </b>".$nome." <b>Cognome: </b>". $cognome;

?>