<?php
require(__DIR__ . '/Token.php');
$method = $_GET["r"];
//var_dump($method);
$token = new Token();
$result = $token->$method();
$json = json_encode($result);
echo $json;
