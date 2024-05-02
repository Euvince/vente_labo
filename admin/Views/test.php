<?php

include('../Controllers/CommandeController.php');

$commandes = new CommandeController();

echo '<pre>';
var_dump($commandes->displayCommandes());
echo '</pre>';