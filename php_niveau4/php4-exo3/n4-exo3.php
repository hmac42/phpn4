<?php

class Personne{
    private $nom;
    private $prenom;
    private $adresse;

    public function __construct($nom, $prenom,$adresse){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
    }
    
    public function __destruct()
    {
        echo "<script type=\"text/javascript\">alert('La personne nommée $this->prenom $this->nom \\n est supprimée de vos contacts')</script>";
    }

    public function getPersonne(){
        return "<ul>Client  : </ul>
        <li>Nom : ".$this->nom."</li>
        <li>Prenom : ".$this->prenom."</li>
        <li>Adresse :".$this->adresse."</li>";
    }

    public function changerAdresse($nAdresse){
        return $this->adresse = $nAdresse;
    }

}

$client = new Personne (" Geelsen", " Jan"," 145 Rue du Maine Nantes");
echo $client->getPersonne();

$client->changerAdresse("23 Avenue Foch Lyon");
echo $client->getPersonne();
$explicit_destruct = false ;

if ($explicit_destruct)
{
	//Suppression explicite du client avec unset, donc appel implicite au destructeur
	unset($client);
	echo '$client unset, appel au destructeur pour libérer la mémoire occupée par $client<br>';
}

if (isset($client)) 
{
	echo '$client existe encore, il va être nettoyé par le garbage collector en faisant appel à son destructeur<br>' ;
}



?>