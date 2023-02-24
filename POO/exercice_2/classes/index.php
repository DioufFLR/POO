<?php
require_once('Employe.php');
require_once ('Magasin.php');

$e = new Employe("Karot", "Julien", "23.10.2019", "Surfeur", 13, "Commercial");
$e2 = new Employe("Diallo", "Seydina", "25.03.2015", "Plongeur", 15, "Nettoyage");
$e3 = new Employe("Malek", "Sandrine", "25.07.2017", "Comptable", 35, "Comptabilité");
$e4 = new Employe("Teurkie", "Zakaria", "13.08.2000", "Soudeur", 25, "Entretient");
$e5 = new Employe("Ben Mansour", "Amine", "08.09.2020", "Animateur", 16, "Animation");
$e6 = new Employe("Mekalfia", "Farid", "08.09.2023", "Boss", 60, "Direction");

echo ($e);
echo ($e2);
echo ($e3);
echo ($e4);
echo ($e5);
echo ($e6);

echo "<br>";

$e->prime();
$e2->prime();
$e3->prime();
$e4->prime();
$e5->prime();
$e6->prime();

$mag = new Magasin("Julien", "Karot", "Casto", "11 rue de la courge", "95300", "Sarcelles");

echo ($mag);