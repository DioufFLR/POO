<?php
require_once('Employe.php');
require_once ('Magasin.php');

// Employés
$e = new Employe("Karot", "Julien", "23.10.2019", "Surfeur", 13, "Commercial", "Magasin 1");
$e2 = new Employe("Diallo", "Seydina", "25.03.2015", "DG", 85, "Direction", "Magasin 2");
$e3 = new Employe("Malek", "Sandrine", "25.07.2017", "Comptable", 35, "Comptabilité", "Magasin 3");
$e4 = new Employe("Teurkie", "Zakaria", "13.08.2000", "Soudeur", 3, "Entretient", "Magasin 4");
$e5 = new Employe("Ben Mansour", "Amine", "08.09.2020", "Animateur", 16, "Animation", "Magasin 5");

// Magasins
$mag = new Magasin("Karot", "Julien", "23.10.2019", "Surfeur", 13, "Commercial", "Magasin 1", "23 rue du fou", 86000, "Poitiers", 0 );
$mag2 = new Magasin("Diallo", "Seydina", "25.03.2015", "DG", 85, "Direction", "Magasin 2", "1 rue de la verdure", 67000, "Strasbourg", 1);
$mag3 = new Magasin("Malek", "Sandrine", "25.07.2017", "Comptable", 35, "Comptabilité", "Magasin 3", "1 rue de la verdure", 44000, "Nantes", 1);
$mag4 = new Magasin("Teurkie", "Zakaria", "13.08.2000", "Soudeur", 3, "Entretient", "Magasin 4", "1 rue de la verdure", 75010, "Paris", 0);
$mag5 = new Magasin("Ben Mansour", "Amine", "08.09.2020", "Animateur", 16, "Animation", "Magasin 5", "1 rue de la verdure", 60000, "Beauvais", 1);

echo ($e);
$mag->prime();
echo ($e2);
$mag2->prime();
echo ($e3);
$mag3->prime();
echo ($e4);
$mag4->prime();
echo ($e5);
$mag5->prime();







