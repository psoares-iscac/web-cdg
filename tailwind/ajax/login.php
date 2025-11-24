<?php 
session_start();
$email = $_POST['email'];
$pass = $_POST['password'];


/***** ***/

$_SESSION['nome'] = 'paulo soares';
$_SESSION['ligado'] = true;


header('Location:../index.php');
exit;




