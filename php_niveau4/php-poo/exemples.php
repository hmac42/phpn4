<?php



class Voiture{                          //comme bonne pratique on doit capitaliser des noms des classes 
    public $couleur = "rouge";
    public $carburant = "diesel";                                    //public sert a rendre l'attribut accesssible même en dehors de la classe Voiture
    private $vitesse = 0;               //avec private l'attribut est accessible seulement a l'interieur de la classe Voiture
    public function afficherCouleur(){
        return $this->couleur;          //la fonction est ce qu'on appele une methode, $this permet a ce que soit accessible avec n'importe qule variable 
        }                                //qu'on souhaite
    public function changerColeur($cor){
        return $this->couleur=$cor;
    }
} 
    $berline = new Voiture();       //instanciation de la classe Voiture
    /*echo $berline->carburant."<br>";
    echo $berline-> afficherCouleur()."<br>";   
    //$cor = "jaune";
    echo $berline->changerColeur("jaune");*/

    $suv = new Voiture();
    echo $suv->changerColeur("blue");
   
   
   ?>

        