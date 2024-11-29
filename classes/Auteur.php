<?php

class Auteur {

    private string $nom;
    private string $prenom;
    private array $livres;



public function __construct(string $nom, string $prenom) {

           $this->nom = $nom;
           $this->prenom = $prenom;


}



    /**
     * Get the value of nom
     */ 
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }


    public function  afficherBibliographie() {
        return $this." Livres De ".$this->getPreNom(). " ". $this->getNom(). "<br>";
  
  
  
     }
  




    public function __toString() {
   
        return $this->nom." ".$this->prenom." "; 
  
     }


}