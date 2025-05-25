.PHONY: build up down test logs

build:
	docker-compose build

up:
	docker-compose up -d

down:
	docker-compose down

logs:
	docker-compose logs -f

test:
	docker exec -it php-fpm php /var/www/html/test-db.php
