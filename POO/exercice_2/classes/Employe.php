<?php
include ("Employe.classe.php");
$e = new Employe();
$e->setNom("Fleur");
$e->setPrenom("Vivian");
$e->setDateEmb("27.04.2008");
$e->setPoste("Laveur de vaisselles");
$e->setSalaire("20");
$e->setService("Commercial");

echo ($e);