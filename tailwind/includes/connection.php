<?php 
$user = 'web1';
$pass = 'web1';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=web1', $user, $pass);
} catch (PDOException $e) {
    // attempt to retry the connection after some timeout for example
    #echo 'erro';
}
?>