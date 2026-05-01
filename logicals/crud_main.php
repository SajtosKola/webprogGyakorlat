<?php
include_once __DIR__ . '/../includes/db_connect.php';
$stmt = $connect->prepare('SELECT * FROM megnevezes Order by id');
$stmt->execute();
$lista = $stmt->fetchAll(PDO::FETCH_ASSOC); // Kimentjük egy tömbbe az adatokat!
?>