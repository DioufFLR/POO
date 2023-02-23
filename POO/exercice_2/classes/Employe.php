<?php
include ("Employe.classe.php");
$e = new Employe("Karot", "Julien", "23.10.2019", "Surfeur", 13, "Commercial");

$e2 = new Employe("Diallo", "Seydina", "25.03.2015", "Plongeur", 15, "Nettoyage");

echo ($e);
echo ($e2);
echo "<br>";

$e->anciennete("Julien", "Karot");

