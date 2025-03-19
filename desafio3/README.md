# Desafio técnico - Proesc


## Sobre o desafio

Olá, bem vindo(a) ao desafio técnico do Proesc.com! 

- Linguagens: PHP **5.6** (Aqui você vai simular um ambiente legado, então pode executar com o artisan ou utilizando o docker se preferir)
- Framework: Laravel
- Banco de dados: Postgres


### Desafio

Nesse desafio, usuários relataram alguns problemas no uso de uma simples aplicação.
Como estágiário(a) da área de desenvolvimento, você deverá realizar uma análise dos problemas relatados e disponibilizar uma correção para normalizar a aplicação.

1. É encontrado um erro na página inicial ao tentar navegar para página a "Produtos" ou "Categorias". Realize uma correção na navegação.<br>
2. Um usuário relatou dificuldades ao realizar o cadastro de uma nova categoria. Ao preencher os dados e apertar em "Salvar", mostra a mensagem de sucesso no entanto não é feito o cadastro. Realize uma correção nesse procedimento<br>
3. Na página de listagem de Produtos, usuários identificaram que não está sendo exibido o nome da Categoria relacionada. Realize uma correção para exibir o nome correto da categoria vinculada ao produto.<br>

### Como executar 

Para iniciá-lo, siga os passos abaixo:

1 -  Clone o projeto para o seu computador:
```bash
$ git clone git@github.com:Equipe-Proesc/desafio_tecnico_backend.git
```
Se tiver algum problema pra clonar, verifique se a parte de certificados está atualizada:

```bash
$ sudo apt-get update
$ sudo apt-get install apt-transport-https ca-certificates -y 
$ sudo update-ca-certificates 
```

2 - Entre na pasta do projeto
```bash
$ cd desafio3
```
3 - Instale as depêndencias

```bash
$ composer install
```

4 - Crie o arquivo arquivo .env copiando o arquivo [.env.example](./desafio3/.env.example) e configure com as informações do seu banco local


5 - Crie uma nova chave para a aplicação
```bash
$ php artisan key:generate
```

6 - Rode as migrations
```bash
$ php artisan migrate
```
7 - Rode o seeder
```bash
$ php artisan db:seed
```
8 - Inicie o projeto:
```bash
$ php artisan serve
```
