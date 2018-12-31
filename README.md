<p align="center"><img src="https://raw.githubusercontent.com/NotWes/Growconomy/master/public/img/logo.png"></p>
<br>

## About Growconomy
Growconomy is an online price checker for [Growtopia](https://www.growtopiagame.com/). Our goal is to supply you with the most accurate prices. You can help us with that!

A live site of this repository can be found here: [Live Test Site](https://beta.growconomy.net/)

## Requirements
- PHP 7.1+
- MySQL Server
- [Composer](https://getcomposer.org/)
- [Apache 2.4](https://httpd.apache.org/) or latest [Nginx](https://www.nginx.com/) version
 
## Instalation
1. Clone the Repository:

    ```sh
    $ git clone https://github.com/NotWes/Growconomy.git
    ```
    
2. Install dependencies with composer:

    ```sh
    $ composer install
    ```
    
3. Copy `.env.example` to `.env` in the root folder:

    ```sh
    $ cp .env.example .env
    ```

4. Generate the application key:
    
    ```sh
    $ php artisan key:generate
    ```

5. Enter you database credentials in `.env`
6. Run database migrations:
    
    ```sh
    $ php artisan migrate
    ```