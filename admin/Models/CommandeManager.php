<?php

require_once '../../App/Database.php';

class CommandeManager{

    private array $commandes;

    /* POUR UTILISATION DE LA CLASSE COMMANDE */

    public function addCommande($commande): void
    {
        $this->commandes[] = $commande;
    }

    public function getCommandes(): array
    {
        return $this->commandes;
    }

    public function getCommandeById($id): void
    {

    }

    public static function getCommandesOfDatabase()
    {
        $stmt = "SELECT * FROM commandes ORDER BY id DESC";
        $db = new Database();
        return $db->query($stmt)->fetchAll();
    }

}