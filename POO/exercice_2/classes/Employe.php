<?php
include ("Employe.classe.php");
$e = new Employe();
$e->setNom("Karot");
$e->setPrenom("Julien");
$e->setDateEmb("27.04.2008");
$e->setPoste("Laveur de vaisselles");
$e->setSalaire("20");
$e->setService("Commercial");

echo ($e);
echo "<br>";
$e->anciennete("Julien", "Karot", "27.04.2008");

