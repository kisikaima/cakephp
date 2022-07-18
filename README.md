## 環境構築手順

- dockerコンテナは以下を参照
https://keita-blog.com/programming/docker-cakephp


```
1. 以下コマンドでコンテナを立ち上げる
$ docker-compose up

2. phpfpmのコンテナに入る
$ docker-compose exec phpfpm sh

3. composerをインストール
$ cd test
$ curl -s https://getcomposer.org/installer | php
$ php composer.phar install
```