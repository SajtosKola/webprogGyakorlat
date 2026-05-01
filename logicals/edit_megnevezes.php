<?php
include_once __DIR__ . '/../includes/db_connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if($_POST['nev']!=""){
        $stmt = $connect->prepare('UPDATE megnevezes set nev = :nev where id = :id');
        $stmt->execute(array(':nev' => $_POST['nev'],':id' => $_POST['id']));
    }
    header("Location: crud_main"); // Vissza a listára
    exit;
}
$stmt = $connect->prepare('SELECT * from megnevezes where id = :id');
$stmt->execute(array(':id' => $_GET["id"]));
$userData = $stmt->fetch(PDO::FETCH_ASSOC);
?>