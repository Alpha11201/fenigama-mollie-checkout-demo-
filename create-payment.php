<?php
// Récupère les paramètres
$amount = $_GET['amount'] ?? '0.00';
$client = $_GET['client'] ?? 'Unknown';
$commande = $_GET['commande'] ?? 'N/A';

// Exemple simple de réponse
echo "Paiement demandé :\n";
echo "Montant : €$amount\n";
echo "Client : $client\n";
echo "Commande : $commande\n";

// Ici tu mettrais la logique de création de paiement Mollie
?>
