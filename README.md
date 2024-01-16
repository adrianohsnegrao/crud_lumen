# Projeto CRUD Simples com Lumen - Modelo Produto

Este repositório contém um projeto CRUD (Create, Read, Update, Delete) simples utilizando o micro-framework Lumen, focado na manipulação de dados de uma entidade `Produto`.

## Sobre o Projeto

O objetivo deste projeto é demonstrar a utilização básica do Lumen para criar uma API RESTful. O modelo `Produto` representa um item genérico que pode ser adaptado para diferentes usos. Este projeto é ideal para quem está começando com Lumen e deseja entender os conceitos fundamentais de CRUD em APIs REST.

## Funcionalidades

- **Criação de Produto**: Adiciona um novo produto ao banco de dados.
- **Leitura de Produtos**: Lista todos os produtos ou um produto específico.
- **Atualização de Produto**: Atualiza os dados de um produto existente.
- **Exclusão de Produto**: Remove um produto do banco de dados.

## Tecnologias Utilizadas

- **[Lumen](https://lumen.laravel.com/)**: Micro-framework PHP para construção de APIs e microserviços.
- **[MySQL](https://www.mysql.com/)**: Sistema de gerenciamento de banco de dados.

## Requisitos

- PHP >= 7.3
- Composer
- MySQL ou outro sistema de banco de dados compatível

## Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/projeto-crud-lumen.git

2. Navegue até o diretório do projeto:
   ```bash
   cd projeto-crud-lumen

3. instale as dependências:
   ```bash
   composer install

4. Configure o arquivo .env com as credenciais do seu banco de dados.

5. Execute as migrations:
   ```bash
   php artisan migrate
   
## Uso
Para interagir com a API, você pode utilizar ferramentas como Postman ou cURL. Abaixo estão exemplos de como realizar cada operação CRUD:

- Criação (POST): /produtos
- Leitura (GET): /produtos ou /produtos/{id}
- Atualização (PUT/PATCH): /produtos/{id}
- Exclusão (DELETE): /produtos/{id}


