<?php 

$string = file_get_contents("http://" . $_SERVER["HTTP_HOST"] . "/LulworthCoveDramaClub/controller/setup/db.json");
$json = json_decode($string, true);

$host = $json['host'];
$username = $json['username'];
$password = $json['password'];
$database = $json['db'];

$connection = new mysqli($host,$username,$password,$database);
if ($connection->connect_error)
    die(header("location: ../production/setup.php?step=0"));
?>