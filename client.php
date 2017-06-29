<?php
$client = new Yar_Client("http://localhost/yar/server.php");
$result = $client->hello("parameter");

$user =  $client->user("parameter");

var_dump($result);
var_dump($user);






