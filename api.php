<?php

$richiesta = $_POST["data"];
$strJsonFileContents = file_get_contents("$richiesta.json");
// $strJsonFileContents = file_get_contents("pokedex.json");
$array = json_decode($strJsonFileContents, true);
// echo '<pre>'.var_export($array['pokemon'][0]['name'], true).'</pre>';
// echo '<pre>'.var_export($array, true).'</pre>';

echo json_encode($array);

?>