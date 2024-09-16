<?php 

$conexao = mysqli_connect('localhost', 'username', 'password'); 
if (!$conexao) { 
die('Could not connect: ' . mysqli_error()); 
//echo erro; 
} 
echo 'Connected successfully'; 

?>