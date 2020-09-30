<?php

class Ville{                          //comme bonne pratique on doit capitaliser des noms des classes 
    public $nom= "";          //public sert a rendre l'attribut accesssible même en dehors de la classe Voiture
    public $departement="";

    public function getinfo(){
        return "La ville de ".$this->nom." est dans le departement : ".$this->departement."<br>";
        
}
}
    $ville1 = new Ville();      //instanciation de la classe Voiture
    $ville1-> nom = "Nantes";
    $ville1-> departement = "Loire Atlantique";
    echo $ville1->getinfo();
    
    $ville2 = new Ville();
    $ville2-> nom = "Lyon";
    $ville2-> departement = "Rhône";
    echo $ville2->getinfo();
    
   
   
   
   ?>

        