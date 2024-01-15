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
<iframe frameborder="0" style="width:100%;height:473px;" src="https://viewer.diagrams.net/?tags=%7B%7D&highlight=0000ff&edit=_blank&layers=1&nav=1&title=#R7Z1tc6o4FMc%2FjW87AqL2ZbUPu7O9s3fau7O7r%2B6kECG7kbghVu2n3wQSUYMWWtoqnplOhxzCISS%2FJH9zIna88XR5x9Es%2FsZCTDtuN1x2vOuO6%2FqOK%2F8rwyo3eN4gN0SchLnJKQyP5AVrY1db5yTE6VZGwRgVZLZtDFiS4EBs2RDnbLGdbcLo9l1nKMKW4TFA1Lb%2BSUIR59ahOyjsv2ASxebOTv8yPzNFJrN%2BkjRGIVtsmLybjjfmjIn8aLocY6rqztRLft3tnrPrgnGciCoX6IZ4RnSun03WmUCBSHX5xMo8tCzqTB0K9KRMo1QgLnTbeF1pyK4kCebS4GRpStEsJVn23BITGt6jFZsL48ikRhOyxOFD3jQqr2yle%2BlMJZXziXT%2BqAujTiNKokQeB%2FJB1R1HHKeyLPcoFTpH%2Bi8WQawTMQriOcd3aCYNPWn4h0RR5sxV5ZrzZ3xLhCBJpC9Q97tFU0IVoldcllzgrFa612guWza7Z1YoNueBchQLIfFzfe9K%2FpMVrv6pDOlFxJi8F5qR9CJg0%2BxEkGZZbyf5LeTh1k18d7R7m7yiXVUXdiPrdn%2FGXODlhkk3%2Bh1mUyy4vE%2FXnO1qAHUP7GsQFgXOrskSb6DsDoe6G%2BkuFK1dF5TJAw1aOXSeBd1h2B5UDxnFjJMXhRjVSGwCmKUXZEpRIrseCndMI5YNNRlIhNIxo0xRmrAEW6CqTCFnsx%2BIR1how4wR2ZKqbP5I%2FsmaGXcv%2FI4vyzqWaadIyz%2BVnYsxS1LBZYdQPrDkcoEVmyPBZtopxRPjn%2BsqVsdPTAiJyflR7Fam2Mwb3WrUmnzvgbZnQfv9t73YyqcSBNEHWQ8oyVpopOciVEBWQmIpG2sedkHZHROZrLkJzaaTmIQhTs6MH68yPxvAeDV50c6Kpq3tDVH5QAkSclSaJ2FqQbguZyUufYvLPxLy3xz%2Fev3FdJoZOs87SmcokGDd51f2d%2FD1Ad8a%2BC73Dn%2FOoFGcK7lrluc%2BiINK4qB7Zr2jtjjof6I4GFSH9nMGXxwS4w%2BUQTGonJUyGNqf7aXrgPHVT5nlyMUBEAtiwHUvQQyAGGhCDFx%2Bohgwq9SgBo6UnsvK9LRIDTiOReWE8FT8TNAUgxpoC7FtVgMmbAhyAOTA%2B%2BSA41bUA04jgqBGwAsEwVeET6sD9MocfpCX%2BpLActfwgGoHtUAJtAbVmlLgHehW89cwu3bga55iDvtWTormujD3zAd5M5EPS%2BgeltHoNzGRQ3AKdq6UcuxXBnn%2F1pVSbhvRn3Z4CvauHBtBZxmicuwYFexeaT3AB4Sp3%2BwaVRV3DRMNIStYo2pGIpRsYPkwiWDWw45nJQCWqLbxOcuglWsHrSBc1SpY26wF1nEJ0AKgBd6nBUr2r3ycFoBw1XHjUyPe2SYtYAer8BQRCmKgNbS2WgzY8SoQAyAG3iIGynavfJwaqBHzAjXwFeNrdX7apAbsmNYMpemC8RAEQWuAbbUgKP9%2BViQnfAy7WE4J6Nq7WDzzWUZP6D2n4oTuOE3M6BCigl0spQPzsDLIX7CLxfiAXSxHTNBZRqk8O0oFu1haD3CbtakHkStYrGpGInzmLhYPIlfHjc96XDkvfWBHrtSndVUrRy4PgFeQA8q7vVQFcgDkwFvkQNWNLG4TcqDGQhfIga8YXqvj88oEfgiX%2BnJg11uzo2nv6PZagw5oDtSaOuDt4FZy1%2FC7hkEHgA5oJgJm3higZYFvd5cPez%2BbD7LguGnyG5MFp7RK0LdlAUXwfraTILb%2B76942%2BOfM7i09cLJv7BtYCMtshxAc6tpLl30P32a7aAYfAHhLHA2caV24WwHyyKchLJSgecj4llhSwJEr3S1TOUjZ1X%2FEaB3h20E3Q6%2FoTDkON2%2FyxZIb8nIXfZ6uNMH2v4q2dOc0FA1MxDdbqK9sq3iJ0%2F0sMLCMg4jbLYqyvokYvWAKRKEJTfFmc0mcBQxsZhSTYoUN1fqx39l8ubhBXP2g31Dyaqj16N3z%2F2e8d8eOPGSiL9UP73wdepvUzHy%2BHqpu3CWMEvuewFOTXk76%2B%2F3qvY5SPQmYqXv2jZGnrXrM9664wGOv6sl%2FqLL%2BM5OlxnssJsXXl9VcGs58txtR73hjiORBRosR693AJksfuM5z178ULZ38z8%3D"></iframe>

## URL
- 開発環境:http://localhost/
- phpMyAdmin:http//localhost:8080/

