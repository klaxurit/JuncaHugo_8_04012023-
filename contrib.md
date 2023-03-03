# Contributing to Symfony 5.4 Todo List Project 🎉

This file describes the steps to contribute to the Symfony 5.4 Todo List project on Github.

## Workflow 🤔

1. Create an [**issue**](https://github.com/klaxurit/JuncaHugo_8_04012023-/issues), dont forget to use the appropriate label.
    - Use the dedicated fields to give more description about your issue (title, description).
    - Click on assign yourself in the Assignees field on the right of window to assign the issue as yours.
    - Click on the project field to attribute this issue to the Todo List project, so you can use the [**project**](https://github.com/users/klaxurit/projects/3) board to tell others developers you or working on it.
    - When your issue is created move it in the In progress section on the [**project**](https://github.com/users/klaxurit/projects/3) board.
2. Create a branch from the master branch of the repository.
    - Name the branch using this convention:
        - To resolve a bug: fix/<issue-id><issue-title>
        - To make a new feature: feature/<issue-id><issue-title>
        - To make an improvement of existing feature: improvement/<issue-id><issue-title>
    - After branch created you can start to code, but there is some coding standards to follow.
3. Follow standards coding convention
    - This project follow the [**PSR-4**](https://www.php-fig.org/psr/psr-4/) as code formater.
    - Code must be indented with 4 spaces tab size.
    - Comments and documentation must be in English
    - Install the [**PHP-CS-FIXER**](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer), this tool can be run using `tools/php-cs-fixer/vendor/bin/php-cs-fixer fix src` command.
    - This project is Symfony project so you have to follow framework [**bests-practices**](https://symfony.com/doc/5.4/best_practices.html).
4. This project have functionnal and unit tests that all pass, to ensure the stability and maintanabilty of the project, please be sure to run test with `make tests` to check if all is working good before committing and pushing. Use [**code-climate**](https://codeclimate.com/) and be sure to keep the maintainability rate to A rank.
5. When your feature/bugfix/improvement is done you have to make a [**Pull-request**](https://github.com/klaxurit/JuncaHugo_8_04012023-/pulls).
    - Select the main branch as `base` and your branch as `compare` then click on 'Create pull request' button.
    - Add title and description to explain what you have done on your branch.
    - Link your issue to the pull request and add @klaxurit as reviewers.
    - As the pull request is created SymfonyInsight will analyse your code automatically, check if you have any errors, duplicaiton, code smells and correct it if needed.

## Acknowledgements 💖

We thank you for your contribution to the Symfony Todo project. Every contribution, big or small, helps to improve the quality of the project for users.


## Autheur

👤 **JUNCA Hugo**

* Website: JUNCA Hugo
* Twitter: [@axurit19](https://twitter.com/axurit19)
* Github: [@klaxurit](https://github.com/klaxurit)
* LinkedIn: [@juncahugo](https://linkedin.com/in/juncahugo)

***

🚀 Happy contributing! 🚀
