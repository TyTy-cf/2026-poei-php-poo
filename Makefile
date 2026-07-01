init:
	@$(MAKE) up-build
	@echo "Waiting for the database to be ready..."
	@sleep 5
	@$(MAKE) db

db:
	@echo "DELETE DB... and importing initial database structure and data..."
	@docker compose exec -T mariadb mariadb -uroot -proot < ./bdd_pokemons.sql
	@docker compose exec -T mariadb mariadb -uroot -proot < ./bdd_centraleish.sql
	@echo "Database import completed."

up:
	@docker compose up -d

up-build:
	@docker compose up -d --build

down:
	@docker compose down

php:
	@docker compose exec php bash

php-server:
	@docker compose exec php php -S 0.0.0.0:8000
