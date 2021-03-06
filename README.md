<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a><h1 align="center">Pasar Pangan</h1></p>

<p align="center">Pasar Pangan is a simple project that is created to fulfill the initial coding test with a given requirement.</p>
<p align="center"><a href="https://github.com/dibaliqaja/pasar-pangan/releases" target="_blank"><img src="https://img.shields.io/badge/version-v0.0.1-red?style=for-the-badge&logo=none" alt="system version" /></a>&nbsp;<a href="https://github.com/dibaliqaja/pasar-pangan" target="_blank"><img src="https://img.shields.io/badge/Laravel-%5E8.54-fb503b?style=for-the-badge&logo=laravel" alt="laravel version" /></a>&nbsp;<img src="https://img.shields.io/badge/license-MIT-red?style=for-the-badge&logo=none" alt="license" /></p>

## Features
* [x] Cek Ongkir
* [x] Pasar Pangan Perulangan

## Installation
1. Clone GitHub repo for this project locally
```bash
$ git clone https://github.com/dibaliqaja/pasar-pangan.git
```
2. Change directory in project which already clone
```bash
$ cd pasar-pangan
```
3. Install Composer dependencies
```bash
$ composer install
```
4. Create a copy of your .env file
```bash
$ cp .env.example .env
```
5. Generate an app encryption key
```bash
$ php artisan key:generate
```
6. Create an empty database for our application

7. In the .env file, add database information to allow Laravel to connect to the database
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE={database-name}
DB_USERNAME={username-database}
DB_PASSWORD={password-database}

RAJAONGKIR_API_KEY={key-api-rajaongkir}
RAJAONGKIR_PACKAGE=starter
```
8. Migrate the database
```bash
$ php artisan migrate
```
9. Seed the database
```bash
$ php artisan db:seed
```
10. Running project
```bash
$ php artisan serve
```

## Screenshoots
<p align="center">
    <img src="https://imgur.com/sC6YjXH.png"> <br/>
    <img src="https://imgur.com/BVYnbVS.png">
</p>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).