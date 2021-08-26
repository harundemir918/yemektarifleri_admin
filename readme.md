# yemektarifleri_admin

This starter template is based on riteshsingh1's template and perfect for starting a new laravel project.

Original template: https://github.com/riteshsingh1/laravel-starter

## Steps to install

1. clone this repository:
```
git clone https://github.com/harundemir918/yemektarifleri_admin.git
```
2. copy .env.example to .env
```
cp .env.example .env
```
3. install dependencies
```
composer install
```
4. genereate encryption key
```
php artisan key:generate
```
5. create database and update in .env

6. run migrations
```
php artisan migrate
```
7. generate keys for passport
```
php artisan passport:install
```
8. for file uploads
```
php artisan storage:link
```
9. run in browser
```
php artisan serve
```
