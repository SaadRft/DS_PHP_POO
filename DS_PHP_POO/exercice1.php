<?php

abstract class Vehicule
{
    protected $demarrer = FALSE;
    protected $eteindre = TRUE;
    protected $vitesse = 0;
    protected $vitesseMax;

    // On oblige les classes filles à définir les méthodes abstracts
    abstract function demarrer();
    abstract function eteindre();
    abstract function decelerer($vitesse);
    abstract function accelerer($vitesse);
    abstract function freinStationnement($vitesse);

    // Méthode magique toString
    public function __toString()
    {
        $chaine = "Ceci est un véhicule <br/>";
        $chaine .= "---------------------- <br/>";
        return $chaine;
    }
}

class Voiture extends Vehicule
{
    protected $nombreVoiture;

    // Getters

    public function getDemarrer()
    {
        return $this->demarrer;
    }

    public function getEteindre()
    {
        return $this->eteindre;
    }

    public function getVitesse()
    {
        return $this->vitesse;
    }

    public function getVitesseMax()
    {
        return $this->vitesseMax;
    }

    // Setters

    public function setDemarrer($demarrer)
    {
        $this -> demarrer = $demarrer;
    }

    public function setEteindre($eteindre)
    {
        $this -> eteindre = $eteindre;
    }

    public function setVitesse($vitesse)
    {
        $this -> vitesse = $vitesse;
    }

    public function setVitesseMax($vitesseMax)
    {
        $this -> vitesseMax = $vitesseMax;
    }


    public function demarrer()
    {
        if (Vehicule::$demarrer = FALSE && Vehicule::$vitesse = 0) {
            echo "Vous devez demarrer !";
        } else {
            Vehicule::$vitesse = Vehicule::$vitesse + 10;
        }
    }

    public function eteindre()
    {
        if (Vehicule::$vitesse = 0) {
            echo "Vous pouvez éteindre la voiture.";
        } else {
            echo "Ralentissez pour éteindre la voiture !";
        }
    }

    public function decelerer($vitesse) {}

    public function accelerer($vitesse)
    {
        if (Vehicule::$demarrer = TRUE && Vehicule::$vitesse > 10) {
            Vehicule::$vitesse = Vehicule::$vitesse * 1.3;
        } else {
            echo "Vous ne pouvez pas passer au dessus de 30% de votre vitesse.";
        }
    }

    public function freinStationnement($vitesse)
    {
        if ($vitesse = 0) {
            echo "Le frein stationnement peut etre mis.";
        } else {
            echo "Le frein stationnement ne peut etre mis.";
        }
    }

    public function getNombreVoiture() {}
}

$veh1 = new Voiture(110);
$veh1->demarrer();
$veh1->accelerer(40);
echo $veh1;
$veh1->accelerer(40);
echo $veh1;
$veh1->accelerer(12);
$veh1->accelerer(40);
echo $veh1;
$veh1->accelerer(40);
$veh1->decelerer(120);
echo $veh1;

$veh2 = new Voiture(180);
echo $veh2;

echo "############################ <br/>";
echo "Nombre de voiture instanciée : " . Voiture::getNombreVoiture() . "<br/>";
