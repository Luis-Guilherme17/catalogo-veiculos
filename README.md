# Catálogo de Veículos (Revenda de Carros)
//Esse é o link pro vídeo da revisão e funcionamento do projeto:
(Clique na imagem para ser redirecionado)


[![CRUD](https://img.youtube.com/vi/68K50GDlzO0/0.jpg)](https://www.youtube.com/watch?v=68K50GDlzO0)   

Projeto de CRUD desenvolvido em PHP + Bootstrap + JavaScript + MySQL.

## Funcionalidades (CRUD)

- **Create**: cadastrar um novo carro (`create.php`)
- **Read**: listar todos os carros cadastrados (`index.php`)
- **Update**: editar os dados de um carro (`edit.php`)
- **Delete**: excluir um carro (`delete.php`)

## Campos cadastrados

- Marca
- Modelo
- Ano
- Quilometragem
- Preço
- Opcionais

## Estrutura de arquivos

```
catalogo-veiculos/
├── database.sql          # cria o banco e a tabela "carros"
├── config.php             # conexão com o banco (PDO)
├── index.php               # lista os carros
├── create.php              # formulário de cadastro
├── edit.php                # formulário de edição
├── delete.php               # exclui um carro
└── assets/js/validacao.js   # validação simples do formulário
```

## Como rodar

1. Instale um ambiente local com PHP e MySQL (ex: XAMPP, WAMP ou Laragon).
2. Coloque a pasta `catalogo-veiculos` dentro de `htdocs` (XAMPP) ou `www` (WAMP).
3. Abra o phpMyAdmin e importe o arquivo `database.sql` (isso cria o banco `catalogo_veiculos` e a tabela `carros` já com alguns dados de exemplo).
4. Se o seu MySQL tiver usuário/senha diferentes do padrão, ajuste em `config.php`.
5. Acesse `http://localhost/catalogo-veiculos/index.php` no navegador.

## Tecnologias usadas

- **PHP** (PDO para acesso ao banco)
- **MySQL** (armazenamento dos dados)
- **Bootstrap 5** (estilização das páginas, via CDN)
- **JavaScript** (validação simples do formulário antes do envio)
