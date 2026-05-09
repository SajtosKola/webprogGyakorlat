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
	'kepgaleria' => array('fajl' => 'kepgaleria', 'szoveg' => 'Képek', 'menun' => array(1,1)),
	'feltolt' => array('fajl' => 'feltolt', 'szoveg' => 'Feltöltés', 'menun' => array(0,1)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
	'uzenetek' => array('fajl' => 'uzenetek', 'szoveg' => 'Üzenetek', 'menun' => array(1,1)),
    'crud_main' => array('fajl' => 'crud_main', 'szoveg' => 'CRUD Menü', 'menun' => array(1,1)),
    'uj_megnevezes' => array('fajl' => 'uj_megnevezes', 'szoveg' => '', 'menun' => array(0,0)),
    'edit' => array('fajl' => 'edit_megnevezes', 'szoveg' => '', 'menun' => array(0,0)),
    'delete' => array('fajl' => 'delete', 'szoveg' => '', 'menun' => array(0,0)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');

$MAPPA = './kepek/';
$TIPUSOK = array ('.jpg', '.jpeg', '.png', '.gif');
$MEDIATIPUSOK = array('image/jpeg', 'image/png', 'image/gif', 'image/jpg');
$DATUMFORMA = "Y.m.d. H:i";
$MAXMERET = 1920*1080;
?>
