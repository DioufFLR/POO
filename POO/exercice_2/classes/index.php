<?php
require_once('Employe.php');

$e = new Employe("Karot", "Julien", "23.10.2019", "Surfeur", 13, "Commercial");
$e2 = new Employe("Diallo", "Seydina", "25.03.2015", "Plongeur", 15, "Nettoyage");
$e3 = new Employe("Malek", "Sandrine", "25.07.2017", "Comptable", 35, "Comptabilité");
$e4 = new Employe("Teurkie", "Zakaria", "13.08.2000", "Soudeur", 25, "Entretient");
$e5 = new Employe("Ben mansour", "Amine", "08.09.2020", "Animateur", 16, "Animation");

echo ($e);
echo ($e2);
echo ($e3);
echo ($e4);
echo ($e5);

$e->anciennete();
$e2->anciennete();
$e3->anciennete();
$e4->anciennete();
$e5->anciennete();

$e->prime();