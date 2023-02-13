SHELL := /bin/bash

tests:
	symfony console doctrine:database:drop --force --env=test || true
	symfony console doctrine:database:create --env=test
	symfony console doctrine:schema:update --force --env=test
	symfony console hautelook:fixtures:load -n --env=test
	php bin/phpunit --coverage-html test-coverage $@
.PHONY: tests