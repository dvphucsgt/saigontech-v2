rebuild:
	docker-compose build --no-cache
build:
	docker-compose build
up:
	docker-compose up -d --remove-orphans
	docker-compose ps
down:
	docker-compose down
clean:
	docker-compose down
	docker system prune -fa
connect:
	docker-compose exec wordpress bash
test:
	docker-compose exec wordpress pytest tests