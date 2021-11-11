### Projeto Biblioteca 👋
- 🤝 Projeto que simula um estoque básico de uma bibioteca.


#### Instalação
- Por favor baixe o projeto através do terminal e adicione as configurações do banco de dados em seu arquivo .env
- Após adicionar as conexões do banco de dados rode o comandao abaixo para instalar as tabelas.
```
php artisan migrate
```
A partir desse momento o banco de dados já estará disponível.

- Após instalação das tabelas você só precisará startar o servidor usando o comando abaixo.
```
php artisan serve
```
- Não esquecer de instalar o Front-End usando o comando abaixo.
```
npm install && npm run dev
```
- Estou deixando um arquivo .SQL caso não consiga rodar o comando migrate.

#### Para acessar
```
user: admin@admin.com
pwd: admin1234
```

##### Observações
- O projeto está sem validação.
- Aconselho começar cadastrando os Autores e Editoras antes mesmo de tentar cadastrar os livros.
- Infelizmente não consegui fazer a API em tempo hábil, mas estarei finalizando e colocando aqui também.
