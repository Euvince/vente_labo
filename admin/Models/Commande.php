<?php

class Commande {

    private $id; 
    private $nom_complet; 
    private $email; 
    private $adresse; 
    private $numero; 
    private $date; 
    private $montant_total;
    private $statut_commande = 'en_cours';
    private $statut_livraison = 'non_demarree';

    public function __construct(
        int $id, 
        string $nom_complet, 
        string $email, 
        string $adresse, 
        int $numero, 
        DateTime $date, 
        int $montant_total,
        string $statut_commande,
        string $statut_livraison,
    )
    {
        $this->id = $id;
        $this->nom_complet = $nom_complet;
        $this->email = $email;
        $this->adresse = $adresse;
        $this->numero = $numero;
        $this->date = $date;
        $this->montant_total = $montant_total;
        $this->statut_commande = $statut_commande;
        $this->statut_livraison = $statut_livraison;
    }

        /**
         * Get the value of id
         */ 
        public function getId(): int
        {
            return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id): self
        {
            $this->id = $id;

            return $this;
        }

    /**
     * Get the value of nom_complet
     */ 
    public function getNom_complet(): string
    {
        return $this->nom_complet;
    }

    /**
     * Set the value of nom_complet
     *
     * @return  self
     */ 
    public function setNom_complet($nom_complet): self
    {
        $this->nom_complet = $nom_complet;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of montant_total
     */ 
    public function getMontant_total(): int
    {
        return $this->montant_total;
    }

    /**
     * Set the value of montant_total
     *
     * @return  self
     */ 
    public function setMontant_total($montant_total): self
    {
        $this->montant_total = $montant_total;

        return $this;
    }

    /**
     * Get the value of statut_commande
     */ 
    public function getStatut_commande(): string
    {
        return $this->statut_commande;
    }

    /**
     * Set the value of statut_commande
     *
     * @return  self
     */ 
    public function setStatut_commande($statut_commande): self
    {
        $this->statut_commande = $statut_commande;

        return $this;
    }

    /**
     * Get the value of statut_livraison
     */ 
    public function getStatut_livraison(): string
    {
        return $this->statut_livraison;
    }

    /**
     * Set the value of statut_livraison
     *
     * @return  self
     */ 
    public function setStatut_livraison($statut_livraison): self
    {
        $this->statut_livraison = $statut_livraison;

        return $this;
    }
}