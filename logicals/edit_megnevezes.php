<?php
include_once __DIR__ . '/../includes/db_connect.php';

$id = $_POST['id'] ?? 0;

// Mentés fázis
if (isset($_POST['nev']) && $_POST['nev'] != "") {
    $stmt = $connect->prepare('UPDATE megnevezes set nev = :nev where id = :id');
    $stmt->execute(array(':nev' => $_POST['nev'], ':id' => $id));
    header("Location: ./crud_main");
    exit;
}

// Betöltés fázis
$stmt = $connect->prepare('SELECT * from megnevezes where id = :id');
$stmt->execute(array(':id' => $id));
$userData = $stmt->fetch(PDO::FETCH_ASSOC);
?>