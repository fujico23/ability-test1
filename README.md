# アプリケーション名
お問い合わせフォーム
## Laravel環境構築
- docker-compose exec php bash
- composer install
- .env.exampleファイルから.envを作成し、環境変数を変更
- php artisan key:generate
- php artisan migrate
- php artisan db:seed

## 使用技術(実行環境)
- Laravel 8.x
- PHP 7.4.9-fpm
- MySQL 8.0.26
- nginx 1.21.1

## 環境変数
- MYSQL_ROOT_PASSWORD: root
- MYSQL_DATABASE: laravel_db
- MYSQL_USER: laravel_user
- MYSQL_PASSWORD: laravel_pass

## ER図
< - - - 作成したER図の画像 - - - >

## URL
- 開発環境:http://localhost/
- phpMyAdmin:http//localhost:8080/

