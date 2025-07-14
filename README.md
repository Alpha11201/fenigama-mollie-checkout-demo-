# Fenigama Mollie Checkout Demo

Ce dépôt contient un exemple simple de script PHP pour lancer un paiement Mollie.

## Usage

Appeler `create-payment.php` avec ces paramètres GET :

- amount : Montant du paiement (ex: 12.99)
- client : Nom du client (ex: PizzaMaestro)
- commande : Numéro de commande (ex: CMD123)

Exemple :  
`https://your-domain/create-payment.php?amount=12.99&client=PizzaMaestro&commande=CMD123`
