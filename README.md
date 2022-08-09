# Avaliação Técnica
## Fluxo de Caixa

Processo seletivo para Desenvolvedor(a) Fullstack PHP/Laravel Remoto
SignoWeb

```
1. Tela de visualização de enquetes 
 1.1. Cadastro(Administrador)
 1.2 Login(Administrador)
2. Enquetes 
 2.1. Visualizar Enquete
  2.1.1. Cadastrar Enquete
  2.1.2. Editar Enquete
  2.1.3. Detalhar Enquete
 2.2 Visualizar Enquete(Cliente)
    2.2.1 Realizar Voto

3. Comportamento adaptado para Android & iOS

```  

---

## Requirements

- PHP >= ^8.0
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension

## Installation

- Clone the repo and `cd` into it
- Run `composer install`
- Rename or copy `.env.example` file to `.env`
- Set your database credentials in your `.env` file
- Run `php artisan migrate:fresh --seed`
- Run `php artisan serve`


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
