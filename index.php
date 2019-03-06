<?php

require_once "./fonctions/classAutoLoader.php";
spl_autoload_register('classAutoLoader');

$michel = new Personnage();
echo $michel->marcher();
// var_dump($michel);

$merlin = new Magicien();
var_dump($merlin);
