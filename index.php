<?php

// pour les sites internationaux
date_default_timezone_set('Europe/Paris');

require_once "./fonctions/classAutoLoader.php";
spl_autoload_register('classAutoLoader');

$merlin = new Magicien("Macron");

Logs::logWrite("coucou");

var_dump($merlin);
