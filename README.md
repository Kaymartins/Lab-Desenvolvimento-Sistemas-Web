## Como executar o projeto inicial

* É necessário ter o PHP 8.1+ e o Laravel 9 instalados

1. Abra o Terminal na Pasta do Projeto;
2. Instale as dependências necessárias: composer install;
3. Atualize as dependências: composer update;
4. Crie um arquivo .env na pasta raiz e após isso copie o conteudo do .env.example para dentro do arquivo .env;
5. Crie uma key com php artisan key:generate. A key servira para as hashes;
6. Crie um banco de dados sql com o nome de laravel;
7. Rode as migrations com o comando php artisan migrate;
8. Instale o npm com npm install e depois rode npm run dev e npm run build;
9. Rode o comando: php artisan serve para iniciar o servidor;
