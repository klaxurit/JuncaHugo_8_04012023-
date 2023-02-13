# JuncaHugo_8_04012023-

[![Maintainability](https://api.codeclimate.com/v1/badges/7ebbf01521e4032f6135/maintainability)](https://codeclimate.com/github/klaxurit/JuncaHugo_8_04012023-/maintainability)
<h1 align="center">Welcome to Todo List App 👋</h1>
<p>
  <img alt="Version" src="https://img.shields.io/badge/version-Symfony 5.4-blue.svg?cacheSeconds=2592000" />
  <a href="#" target="_blank">
    <img alt="License: MIT" src="https://img.shields.io/badge/License-MIT-yellow.svg" />
  </a>
  <a href="https://twitter.com/axurit19" target="_blank">
    <img alt="Twitter: axurit19" src="https://img.shields.io/twitter/follow/axurit19.svg?style=social" />
  </a>
</p>

> A Todo List App.

## Prérequis

- PHP >= 8.1
- Composer

## Paquet installé via composer

- symfony/maker-bundle
- orm
- orm-fixtures
- security
- wildurand/hateoas-bundle
- symfony/validator
- doctrinne/annotations
- lexik/jwt-authentication-bundle
- nelmio/api-doc-bundle
- twig asset

## Installation

1. Clonez le dépôt git :
``git clone https://github.com/klaxurit/JuncaHugo_8_04012023-.git``

2. Installez les dépendances en utilisant Composer :
``composer install``

3. Copiez le .env en .env.local et modifier les paramètres sql.

6. Créez la base de données et effectuez les migrations en utilisant les commandes Doctrine :
- ``php bin/console doctrine:database:create``
- ``php bin/console doctrine:migrations:migrate``

## Exécution

Exécutez le serveur local Symfony pour lancer l'application :

``php bin/console server:run``

Pour chargez un jeux de donnée veuillez saisir cette commande dans votre terminal:

``php bin/console hautelook:fixtures:load``

Les fixtures contiennent:

- Un compte administrateur. id: Administrateur / mdp: password
- Un compte utilisateur. id: Utilisateur / mdp: password
- Un compte anonyme. id: Anonymous / mdp: password
- Trois utilisateur généré de manière aléatoire compte supplementaire


## Autheur

👤 **JUNCA Hugo**

* Website: JUNCA Hugo
* Twitter: [@axurit19](https://twitter.com/axurit19)
* Github: [@klaxurit](https://github.com/klaxurit)
* LinkedIn: [@juncahugo](https://linkedin.com/in/juncahugo)

***

