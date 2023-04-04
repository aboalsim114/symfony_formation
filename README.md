# symfony_formation

### Ce projet est une application de gestion d'ingrédients qui utilise Symfony 6 et Doctrine.

## Installation

- Clonez ce dépôt de code sur votre machine locale
- Installez les dépendances en utilisant la commande `composer install`
- Configurez la base de données en créant un fichier `.env.local` et en y ajoutant les informations de connexion à votre base de données
- Créez la base de données en utilisant la commande ` php bin/console doctrine:database:create`
- Appliquez les migrations en utilisant la commande ` php bin/console doctrine:migrations:migrate`
- Chargez les données initiales en utilisant la commande `php bin/console doctrine:fixtures:load`

## Utilisation

- Accédez à l'application en utilisant votre navigateur web préféré
- Utilisez les différentes fonctionnalités pour gérer les ingrédients dans la base de données
