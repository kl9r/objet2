<?php

// on bloque l'héritage de "Magicien" avec final
final class Magicien extends Personnage
{
    const TRUXC = 42;

    public $magie;

    public function __construct(string $name)
    {
        $this->nom = $name;
    }

    public function __call($name, $arguments)
    {
        Logs::logWrite( "La methode" . $name . "n'existe pas");
    }


    public function TRUC()
    {
        return self::TRUC;
    }

    public function __destruct()
    {
        echo "Objet détruit";
    }

}
