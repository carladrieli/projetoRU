# Projeto RU

---
## Requisitos
* Composer
* PHP 5.5 +
* MySQL


---
## Instruções de uso

1. Instalar o composer

2. Clonar o repositório do git `git clone https://github.com/carladrieli/projetoRU.git`

3. Ir na pasta que contém o código do projeto e executar `composer install`

4. Duplicar o arquivo `.env.example` e renomeá-lo para `.env`

5. Gerar uma nova chave para aplicação `php artisan key:generate`

6. Configurar o acesso ao banco no arquivo .env - Ver abaixo

7. Realizar a migração do banco de dados - `php artisan migrate`

8. Colocar dados no banco(seeds) - `php artisan db:seed`

9. Visualizar o projeto `php artisan serve`


---
### Configuração do banco
```
DB_HOST=localhost       # Servidor do Banco
DB_DATABASE=homestead   # Nome do Banco
DB_USERNAME=homestead   # Usuário do Banco
DB_PASSWORD=secret      # Senha do Banco
```
