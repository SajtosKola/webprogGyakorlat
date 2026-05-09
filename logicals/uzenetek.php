<?php
$beerk_uzenetek = array();
$db_hiba = "";
if (isset($_SESSION['login'])) {
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=forgalomkorlatozas', 'root', '',
            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $sql = "SELECT nev, email, uzenet, datum FROM kapcsolat ORDER BY datum DESC";
        $sth = $dbh->query($sql);
        $beerk_uzenetek = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        $db_hiba = "Hiba: " . $e->getMessage();
    }
}
?>