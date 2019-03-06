<?php

class personnage
{
    public $nom;
    public $vie = 100;
    public $attaque;
    public $taille;
    public $masse;
    public $race;

    public function marcher() : string
    {
        return "Je marche !";
    }

    public function recupererPointDeVie() : int
    {
        return $this->vie;
    }





}
