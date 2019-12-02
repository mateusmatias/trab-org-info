Trabalho final da disciplina Organização da Informação UFRJ 2019.2
==================================================================

O trabalho consiste de uma aplicação web sobre o desmatamento na Amazônia Legal. A aplicação disponibiliza um mapa interativo de municípios, o usuário pode escolher uma data para saber qual o desmatamento acumulado previsto para esta data.

### Rodando o projeto

#### Requisitos

- Xampp - https://www.apachefriends.org/pt_br/index.html
- Composer - https://getcomposer.org/
- NPM - https://nodejs.org/en/

1) Abrir o Xampp
2) Iniciar o Apache e o Mysql

#### Inicializando a aplicação Laravel
1) Abrir o terminal em alguma pasta e digitar os comandos:
2) git clone https://github.com/mateusmatias/trab-org-info.git
3) cd trab-org-info
4) cp .env.example .env *(Linux)* **ou** copy .env.example .env *(Windows)*     (cria arquivo de config de ambiente)
5) npm install              (instala dependências)
6) composer install         (instala dependências)
7) ir na página http://localhost/phpmyadmin e criar um banco de dados com o nome trab_org_info
8) Para popular o banco de dados há duas opções:

    8.1) (Recomendado) Ir na página http://localhost/phpmyadmin/db_import.php?db=trab_org_info e importar o arquivo *trab_org_info.sql*  que está dentro da pasta *trab-org-info/database/seeds/*
    
    Ou
    
    8.1) php artisan migrate      (cria as tabelas necessárias no banco de dados)
    
    8.2) php artisan db:seed      (popula as tabelas, pode demorar até meia hora)
    
9) php artisan key:generate (gera chave da aplicação)
10) php artisan serve       (coloca o servidor online)
