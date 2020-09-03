<?php
use \Firebase\JWT\JWT;
include'vendor/autoload.php';

$key= "123";

$payload = [

	"name" => "Nazmul Huda",
	"profession" => "Software Developer",
	"age" => "25",
	"gender"=> "Male" ];


echo $encoded = JWT::encode($payload,$key);

$decoded = JWT::decode($encoded,$key,array('HS256'));
echo "<pre>";
 print_r($decoded);



?>
