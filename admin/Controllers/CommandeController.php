<?php  

require_once '../Models/CommandeManager.php';

class CommandeController
{
    private $commandeManager;

    public function __construct()
    {
        $this->commandeManager = new CommandeManager();
    }

    public function displayCommandes()
    {
        $commandes = $this->commandeManager->getCommandesOfDatabase();

        return $commandes;
    }
}