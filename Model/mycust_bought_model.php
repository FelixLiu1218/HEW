<?php
// 注文手続き用
// お客様情報引き出し
$user = $_SESSION['User_id'];

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

        // 注文内容とユーザ一致情報抽出
        $sql = "SELECT deal.id,bought.User_id,items.product_name,item_img.product_img,bought_count,bought.total_pr,bought.deal_buy,bought.created_ad,bought.avilable_point FROM deal JOIN bought ON bought.id = deal.id JOIN items ON items.product_id = deal.product_id JOIN item_img ON item_img.product_id = deal.product_id WHERE User_id = $user";
        $stmt = $pdo->query($sql);
        $history = $stmt->fetchAll(PDO::FETCH_ASSOC);

    }catch(PDOException $error){
        //エラー時の処理を書く
        //本来は、上記ログ出力し、下記のようになる。
        header('Location: /IT42-117/erro_pages/error1.php');
        exit;
    }
