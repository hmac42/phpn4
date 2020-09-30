
<?php

class Form{
   private $code;
   private $codeinit;
   private $codetext;
   private $codesubmit;
   
   public function __construct($action, $titre, $method="post"){
       $this->codeinit = "<form action=\"".$action."\" method=\"".$method."\"><fieldset><legend><span>".$titre."</span></legend><br>";
    }

    public function setText($name, $libelle){
        $this->codetext .= $libelle."<input type='text' name=\"".$name."\"  ><br>";
    }

    public function setSubmit($name="envoi", $value="Envoyer"){
        $this->codesubmit = "<input name= \"".$name."\" value=\"".$value."\" type='submit'.><br>";
    }

   public function getform(){
        $this->code="";
        $this->code .= $this->codeinit.$this->codetext.$this->codesubmit;
        $this->code .= "</fieldset></form>";
        echo $this->code;
    }
}


?>