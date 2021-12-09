<?php

// 商品検索

// DB接続
  // require_once('../app/config.php');
   // なんか今更この形変えるタイミングないから、config.phpに鞍替えしません。
  $dsn = 'mysql:host=localhost;dbname=hew2020_91149;charset=utf8mb4';
  $db_user = 'root';
  // ここパスワード変えてください。
  $db_password = '0112';

// 受け取ったグローバル値を変数に代入

    // DBランキング形式で表示させる。基準はカウントで
    try{
        //DB接続オブジェクト
        //PDO…PHP Data Object
        $pdo = new PDO($dsn, $db_user, $db_password);
        //let logo = getElementById('id');

        //PDOの設定変更
        $pdo->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );
        // 検索
        $sql = "SELECT * FROM items JOIN item_img ON items.product_id = item_img.product_id JOIN item_category ON items.product_id = item_category.product_id WHERE  search_name LIKE '%".$_POST["search"]."%'";
        $stmt = $pdo->query($sql);
        $tables = $stmt->fetchAll(PDO::FETCH_ASSOC);
         // ヒットした商品件数
         $sql1 = "SELECT * FROM items WHERE search_name LIKE '%".$_POST["search"]."%'";
         $sth = $pdo->query($sql1);
         $record = $sth->rowCount();

    }catch(PDOException $error){
        //エラー時の処理を書く
        //本来は、上記ログ出力し、下記のようになる。
        header('Location: /IT42-117/erro_pages/error1.php');
        exit;
    }
