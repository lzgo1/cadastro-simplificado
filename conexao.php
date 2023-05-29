<?php

$servername = "localhost"; 
$database = "sisdecadastro";  
$username = "root";
$password = "";  

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
      echo"Falha de conexão: " ;
}
?>