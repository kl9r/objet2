<?php

// on bloque l'héritage de "Magicien" avec final
final class Magicien extends Personnage
{
    public function __construct(string $name)
    {
        $this->nom = $name;
    }

    public function __destruct()
    {
        echo "Objet détruit";
    }

}
