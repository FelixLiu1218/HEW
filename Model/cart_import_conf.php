<?php
// 注文手続き用

// DB接続
  // require_once('../app/config.php');
   // なんか今更この形変えるタイミングないから、config.phpに鞍替えしません。
  $dsn = 'mysql:host=localhost;dbname=hew2020_91149;charset=utf8mb4';
  $db_user = 'root';
  // ここパスワード変えてください。
  $db_password = '0112';

// 受け取ったグローバル値を変数に代入

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
        // 検索一致情報抽出
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = $name";
        $stmt = $pdo->query($sql);
        $cart = $stmt->fetchAll(PDO::FETCH_ASSOC);



        //    print_r($products);


    }catch(PDOException $error){
        //エラー時の処理を書く
        //本来は、上記ログ出力し、下記のようになる。
        header('Location: /IT42-117/erro_pages/error1.php');
        exit;
    }
