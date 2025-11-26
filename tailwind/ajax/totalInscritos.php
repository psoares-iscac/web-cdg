<?php 

require('connection.php');
$idEvento = $_POST['id'];

$sql = 'SELECT COUNT(id) AS NUM FROM inscricoes WHERE eventoId = :id';
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':id', $idEvento);
$stmt->execute();

if($stmt){
    $total = $stmt->fetchObject()->NUM;
}

echo $total;

$stmt = null;
exit;
