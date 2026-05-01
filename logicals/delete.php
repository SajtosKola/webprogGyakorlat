<?php
include_once __DIR__ . '/../includes/db_connect.php';

$id = $_POST['id'] ?? 0;

if ($id > 0) {
    $stmt = $connect->prepare('DELETE from megnevezes where id = :id');
    $stmt->execute(array(':id' => $id));
}
// Azonnali visszairányítás a fő listára
header("Location: ./crud_main");
exit;
?>