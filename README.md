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
3) ir na página http://localhost/phpmyadmin e criar um banco de dados com o nome trab_org_info

#### Inicializando a aplicação Laravel
1) Abrir o terminal em alguma pasta e digitar os comandos:
2) git clone https://github.com/mateusmatias/trab-org-info.git
3) cd trab-org-info
4) npm install
5) composer install
6) php artisan migrate  (cria as tabelas necessárias no banco de dados)
7) php artisan db:seed  (popula as tabelas)
8) php artisan serve    (coloca o servidor online)
