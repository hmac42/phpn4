<?php



class Voiture{                          
    public $couleur ;
    public $carburant ;                                    
    private $vitesse = 0; 
    
    public function __construct($co,$car){          //__construct est le constructeur
        $this->couleur = $co;
        $this->carburant = $car;
        
    }

    public function afficherCouleur(){
        return $this->couleur;          
        }  

    public function changerColeur($cor){
        return $this->couleur=$cor;
    }
} 
    $berline = new Voiture("beige", "electric");      
    echo $berline->carburant."<br>";
    echo $berline-> afficherCouleur()."<br>";   
    //$cor = "jaune";
    echo $berline->changerColeur("jaune")."<br>";

    /*$suv = new Voiture();
    echo $suv->changerColeur("blue")."<br>";*/
   
   
   ?>