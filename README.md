# forum-universitario

Esse é o trabalho prático para a disciplina de Banco de Dados do curso de Ciência da Computação da Universidade 
Estadual do Ceará (UECE), semestre 2019.1. O objetivo é projetar o Banco de Dados utilizando o modelo E-R e que 
utilize uma arquitetura de software para uma aplicação de fórum voltada para o ambiente de universidades.

## Features

- Oferece uma base limpa da estrutura MVC para implementar uma aplicação PHP moderna
- Mostra o básico da arquitetura Model-View-Controller
- Utiliza PDO
- Promove o uso de bibliotecas externas via Composer
- Promove o desenvolvimento com o máximo de relatórios de erros
- Utiliza apenas código PHP nativo


## Getting started

Você irá precisar de:

- PHP 5.3.0+ 
- MySQL
- mod_rewrite ativado

## Desenvolvimento

Para fazer alterações no projeto:

```
git clone https://github.com/Bruno-Duarte/Banco-de-Dados.git /var/www/html
```

## Instalação (No Ubuntu)


```
composer create-project Banco-de-Dados/forum-universitario /var/www/html
```

1. Instale o mod_rewrite, para isso, siga o tutorial:
[How to install mod_rewrite in Ubuntu](http://www.dev-metal.com/enable-mod_rewrite-ubuntu-12-04-lts/)

2. Execute os comandos SQL que estão na pasta *application/_install*.

3. Altere o arquivo .htaccess de
```
RewriteBase /Banco-de-Dados/forum-universitario/
```
para onde você colocou esse projeto, em relação à pasta raiz web (normalmente /var/www). Assim, quando você coloca esse 
projeto na pasta raiz web, como diretamente em /var/www/site, então ficará como está comentado: 
```
RewriteBase /
```
Se você tiver colocado o projeto em uma subpasta, então coloque o nome da subpasta aqui:
```
RewriteBase /sub-pasta/
```

4. Edite o *application/config/config.php*, altere as linhas abaixo
```php
define('DB_TYPE', 'mysql');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'php-mvc');
define('DB_USER', 'root');
define('DB_PASS', '1234');
```
para as credenciais do seu banco de dados. Se você não tem um banco de dados vazio, crie um. Só mude o tipo 'mysql' se você
sabe o que você está fazendo.

