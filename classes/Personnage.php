<?php

// avec abstract on interdit d'instancier un autre "Personnage"
abstract class personnage
{
    protected $nom;
    protected $vie = 100;
    protected $attaque;
    protected $taille;
    protected $masse;
    protected $race;

    public function marcher() : string
    {
        return "Je marche !";
    }

    public function recupererPointDeVie() : int
    {
        return $this->vie;
    }





}
