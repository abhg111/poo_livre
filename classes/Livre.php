<?php

class Livre {

    private string $titre;
    private string $nombreDePages;
    private DateTime $annéeDeParution;
    private string $prix;
    private Auteur $auteur;



public function __construct(string $titre, string $nombreDePages, string $annéeDeParution, string $prix, Auteur $auteur) {

           $this->titre = $titre;
           $this->nombreDePages = $nombreDePages;
           $this->annéeDeParution = new DateTime ($annéeDeParution);
           $this->prix = $prix;
           $this->auteur = $auteur;
           $this->auteur->addLivre($this);


}



    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of nombreDePages
     */ 
    public function getNombreDePages()
    {
        return $this->nombreDePages;
    }

    /**
     * Set the value of nombreDePages
     *
     * @return  self
     */ 
    public function setNombreDePages($nombreDePages)
    {
        $this->nombreDePages = $nombreDePages;

        return $this;
    }

    /**
     * Get the value of annéeDeParution
     */ 
    public function getAnnéeDeParution()
    {
        return $this->annéeDeParution;
    }

    /**
     * Set the value of annéeDeParution
     *
     * @return  self
     */ 
    public function setAnnéeDeParution($annéeDeParution)
    {
        $this->annéeDeParution = $annéeDeParution;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }


    
    /**
     * Get the value of auteur
     */ 
    public function getAuteur(): Auteur
    {
        return $this->auteur;
    }
    
    /**
     * Set the value of auteur
     *
     * @return  self
     */ 
    public function setAuteur(Auteur $auteur)
    {
        $this->auteur = $auteur;
        
        return $this;
    }

    
    
    
    public function __toString() {
        
        return $this->titre." (".$this->annéeDeParution->format("Y").")". " : ".$this->nombreDePages. " / ".$this->prix. "€ ";  
     }



}