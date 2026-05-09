<?php
$eredmeny = "";
$kuldott_nev = "";
$kuldott_msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['kuld'])) {
    $email = trim($_POST['e']);
    $msg = trim($_POST['m']);

    $nev = isset($_SESSION['login']) ? $_SESSION['login'] : "Vendég";

    if (strpos($email, '@') !== false && !empty($msg)) {
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=forgalomkorlatozas', 'root', '',
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

            $sql = "INSERT INTO kapcsolat (nev, email, uzenet, datum) VALUES (?,?,?,NOW())";
            $sth = $dbh->prepare($sql);
            $sth->execute(array($nev, $email, $msg));

            $eredmeny = "sikeres";
            $kuldott_nev = $nev;
            $kuldott_msg = $msg;
        } catch (PDOException $e) {
            $eredmeny = "Adatbázis hiba: " . $e->getMessage();
        }
    } else {
        $eredmeny = "Kérjük, helyesen töltse ki a mezőket!";
    }
}
?>