<?php

class Auteur {

    private string $nom;
    private string $prenom;
    private array $livres;



public function __construct(string $nom, string $prenom) {

           $this->nom = $nom;
           $this->prenom = $prenom;
           $this->livres = [];


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
    
    /**
     * Get the value of livres
     */ 
    public function getLivres()
    {
        return $this->livres;
    }
    
    /**
     * Set the value of livres
     *
     * @return  self
     */ 
    public function setLivres($livres)
    {
        $this->livres = $livres;
        
        return $this;
    }


    public function  addLivre(Livre $livre) {
        return $this->livres[] = $livre ."<br>";
    }
    
    public function  afficherBibliographie()  {
        $result = "<h1>Livres de $this</h1>";

        foreach($this->livres as $livre){

           $result.= $livre."<br>";
        }

        return $result;


    }
    

    
    
    
    
    
    public function __toString() {
    
        return $this->prenom." ".$this->nom; 
    
    }
}