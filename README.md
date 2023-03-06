
# Crud Laravel 9.x com PHP 8.0 e Docker


### Passo a passo
Clone Repositório
```sh
git clone git@github.com:paulodm145/candidatos-vagas.git my-project
```
```sh
cd my-project/
```

Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME="Nome do APP"
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acesse o container app com o bash
```sh
docker-compose exec app bash
```


Instale as dependências do projeto
```sh
composer install
```


Gere a key do projeto Laravel
```sh
php artisan key:generate
```

Acesse o projeto
[http://localhost:8989](http://localhost:8989)  

### Observações  
- O projeto está configurado para rodar na porta 8989, caso queira alterar, basta alterar no arquivo docker-compose.yml
- O projeto está configurado para rodar com o banco de dados MySQL, caso queira alterar, basta alterar no arquivo docker-compose.yml
- O Arquivo Insonia_2023-03-05.json contém as rotas da API e pode ser importado no Insomnia para testes;
- Como forma de autenticação foi implantado o Laravel Passport, para gerar as chaves de acesso, basta executar o comando abaixo:
```sh
php artisan passport:install
```
- Documentação do Laravel Passport: [https://laravel.com/docs/9.x/passport](https://laravel.com/docs/9.x/passport)

### Tecnologias utilizadas
- PHP 8.0
- Laravel 9.x
- Docker
- MySQL
