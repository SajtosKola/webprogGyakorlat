<?php
include_once __DIR__ . '/../includes/db_connect.php';
$stmt = $connect->prepare('DELETE from megnevezes where id = :id');
$stmt->execute(array(':id' => $_GET["id"]));

header("Location: crud_main");
exit;
?>