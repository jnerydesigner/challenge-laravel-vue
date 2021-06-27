## About this Project

1 - Clone o Projeto challenge-laravel-vue

```
git clone https://github.com/jnerydesigner/challenge-laravel-vue.git
```

2 - Instale as dependências do Vue Js

```
npm install
```

3 - Clone o repositório do Laradock para fazer o desenvolvimento com Docker, lebrando que é na pasta do projeto.

```
git clone https://github.com/laradock/laradock.git
```

4 - Altere as configurações conforme a aplicação pede

NGINX

```
NGINX_HOST_HTTP_PORT=8800
NGINX_HOST_HTTPS_PORT=543
NGINX_HOST_LOG_PATH=./logs/nginx/
NGINX_SITES_PATH=./nginx/sites/
NGINX_PHP_UPSTREAM_CONTAINER=php-fpm
NGINX_PHP_UPSTREAM_PORT=9000
NGINX_SSL_PATH=./nginx/ssl/
```

MYSQL

```
MYSQL_VERSION=latest
MYSQL_DATABASE=default
MYSQL_USER=docker
MYSQL_PASSWORD=docker
MYSQL_PORT=8306
MYSQL_ROOT_PASSWORD=root
MYSQL_ENTRYPOINT_INITDB=./mysql/docker-entrypoint-initdb.d
```

PHP MY ADMIN

```
PMA_USER=default
PMA_PASSWORD=secret
PMA_ROOT_PASSWORD=secret
PMA_PORT=9080
PMA_MAX_EXECUTION_TIME=600
PMA_MEMORY_LIMIT=256M
PMA_UPLOAD_LIMIT=2G
```

5 - Rode o comando para deixar o ambiente em docker funcionando, use o sudo se estiver no mac ou linux

```
Windows
docker-compose up -d nginx mysql phpmyadmin

Mac ou Linux
sudo docker-compose up -d nginx mysql phpmyadmin
```

6 - Entre no workspace com o comando abaixo

```
sudo docker-compose exec --user=laradock workspace bash

```

7 - Antes de rodar as migrations, crie o banco de dados

```
laravel_challenge
```

8 - Rode as Migrations

```
php artisan migrate

```
