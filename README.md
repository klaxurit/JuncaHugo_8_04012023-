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

## Prerequisites

- PHP >= 8.1
- Composer

## Packages installed via Composer

- hautelook/alice-bundle
- liip/test-fixtures-bundle
- phpunit/phpunit
- rector/rector

## Installation

1. Clone the git repository :
``git clone https://github.com/klaxurit/JuncaHugo_8_04012023-.git``

2. Install dependencies using Composer :
``composer install``

3. Copy .env to .env.local and modify the SQL parameters and do the same with the .env.test to setup a new database for tests.

6. Create the database and perform migrations using Doctrine commands :
- ``php bin/console doctrine:database:create``
- ``php bin/console doctrine:migrations:migrate``

## Execution

Run the local Symfony server to launch the application :

``php bin/console server:run``

To load data fixtures, enter this command in your terminal :

``php bin/console hautelook:fixtures:load``

The fixtures contain :

- An administrator account. id: Administrateur / password: password
- A user account. id: Utilisateur / password: password
- An anonymous account. id: Anonymous / password: password
- Three randomly generated additional users
- Eleven tasks with assignated users
- Six tasks without assignated users


## Author

👤 **JUNCA Hugo**

* Website: JUNCA Hugo
* Twitter: [@axurit19](https://twitter.com/axurit19)
* Github: [@klaxurit](https://github.com/klaxurit)
* LinkedIn: [@juncahugo](https://linkedin.com/in/juncahugo)

***

