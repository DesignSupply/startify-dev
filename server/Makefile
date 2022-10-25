create:
	docker-compose build --no-cache --force-rm
	docker-compose up -d
	docker-compose exec app composer create-project --prefer-dist laravel/laravel laravel
	docker-compose exec app chmod -R 777 laravel/storage laravel/bootstrap/cache
	docker-compose exec app cp laravel/.env.example laravel/.env

setup:	
	docker-compose exec app php laravel/artisan key:generate
	docker-compose exec app php laravel/artisan storage:link

build:
	docker-compose down
	docker-compose build --no-cache --force-rm
	docker-compose up -d

up:
	docker-compose up -d

stop:
	docker-compose stop

down:
	docker-compose down

destroy:
	docker-compose down --rmi all --volumes --remove-orphans

install:
	docker-compose exec app composer install

update:
	docker-compose exec app composer update

migrate:
	docker-compose exec app php laravel/artisan migrate

fresh:
	docker-compose exec app php laravel/artisan migrate:fresh --seed

seed:
	docker-compose exec app php laravel/artisan db:seed

optimize:
	docker-compose exec app php laravel/artisan optimize
	docker-compose exec app php laravel/artisan route:cache

tinker:
	docker-compose exec app php laravel/artisan tinker

db:
	docker-compose exec db bash -c 'mysql -u admin -psecret'