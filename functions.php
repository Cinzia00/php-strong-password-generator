<?php
$password_generator = 'ABCDEFGHIJklmnopqrstuvwxyz0123456789?!%$';
$password_numero_caratteri = $_GET['password'];
$password_generata = str_shuffle($password_generator);
$nuova_password = substr($password_generata, 3, intval($password_numero_caratteri));

var_dump($password_numero_caratteri);
var_dump($password_generata);
var_dump($nuova_password );
?>