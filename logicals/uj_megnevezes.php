<?php
include_once __DIR__ . '/../includes/db_connect.php';
if ($_SERVER['REQUEST_METHOD']=="POST") {
    if($_POST['nev']!=""){
        $stmt = $connect->prepare('INSERT into megnevezes (nev) VALUES (:nev)');
        $stmt->execute(array(':nev' => $_POST['nev']));
    }
    header("Location: ./crud_main");
    exit;
}
?>