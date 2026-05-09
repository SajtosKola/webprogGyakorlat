<?php
if (isset($_POST['torles']) && isset($_SESSION['login'])) {
    $torol_fajl = $_POST['fajl_nev'];
    $utvonal = $MAPPA . $torol_fajl;
    if (file_exists($utvonal) && strpos($torol_fajl, '..') === false) {
        if (unlink($utvonal)) {
            $torles_uzenet = "Sikeres törlés: " . $torol_fajl;
        } else {
            $torles_uzenet = "Hiba: Nem sikerült törölni a fájlt.";
        }
    }
}

$kepek = array();
$olvaso = opendir($MAPPA);
while (($fajl = readdir($olvaso)) !== false) {
    if (is_file($MAPPA.$fajl)) {
        $vege = strtolower(substr($fajl, strlen($fajl)-4));
        if (in_array($vege, $TIPUSOK)) {
            $kepek[$fajl] = filemtime($MAPPA.$fajl);
        }
    }
}
closedir($olvaso);
arsort($kepek);
?>