<?php
//Data Source Name(接続情報)
// dbnameの所は各自任意の名前でも付けて
// DB立ち上げてね。立ち上げたら、ここのdbnameに定めたDBの名前を入力してね。SQLファイルは同階層のappフォルダーにあるから、ちゃんとクリエイトテーブルしてください。まずクリエイトテーブルして
// 下に外部キー付与するためのAlterテーブルってあるからそれを次にして。PHPMyAdminとか使ったら楽かも
define('DSN', 'mysql:host=localhost;dbname=hew2020_91149;charset=utf8mb4;');
// ここは自分のローカル環境でよろ
define('DB_USER', 'root');
// 自分のパスワードとかいれてね？
// パスワード指定してないならからのままでOK
define('DB_PASS', '0112');
