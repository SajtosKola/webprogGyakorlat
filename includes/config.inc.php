<?php
$ablakcim = array(
    'cim' => 'Forgalomkorlátozások',
);

$fejlec = array(
    'kepforras' => 'logo.png',
    'kepalt' => 'logo',
	'cim' => 'Forgalomkorlátozások',
	'motto' => ''
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Forgalomkorlátozások'
);

$oldalak = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'Főoldal', 'menun' => array(1,1)),
	'kepek' => array('fajl' => 'kepek', 'szoveg' => 'Képek', 'menun' => array(1,1)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
	'uzenetek' => array('fajl' => 'uzenetek', 'szoveg' => 'Üzenetek', 'menun' => array(1,1)),
    // ... a többi oldal
    'crud_main' => array('fajl' => 'crud_main', 'szoveg' => 'CRUD Menü', 'menun' => array(1,1)),
    'uj_megnevezes' => array('fajl' => 'uj_megnevezes', 'szoveg' => '', 'menun' => array(0,0)),
    'edit' => array('fajl' => 'edit_megnevezes', 'szoveg' => '', 'menun' => array(0,0)),
    // A fájl neve legyen delete_megnevezes
    'delete' => array('fajl' => 'delete_megnevezes', 'szoveg' => '', 'menun' => array(0,0)),
    // ... további oldalak
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?>