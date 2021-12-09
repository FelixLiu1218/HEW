<?php

  // 商品テーブルの引き下ろし機能集。

  // DB接続
  // require_once('../app/config.php');
   // なんか今更この形変えるタイミングないから、config.phpに鞍替えしません。
  $dsn = 'mysql:host=localhost;dbname=hew2020_91149;charset=utf8mb4';
  $db_user = 'root';
  // ここパスワード変えてください。
  $db_password = '0112';
  try {
    //DB接続オブジェクト
    //PDO…PHP Data Object
    $pdo = new PDO($dsn, $db_user, $db_password);
    //let logo = getElementById('id');

    //PDOの設定変更
    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
    // すべてのアイテム取得
    $sql1 = "SELECT * FROM items";
    $sth = $pdo -> query($sql1);
    $record1 = $sth -> rowCount();

    $sql_5 = "SELECT items.product_id,product_img,product_name,price,count,info_id FROM items JOIN item_img ON items.product_id = item_img.product_id JOIN item_category ON items.product_id = item_category.product_id";
    //指定したレコードの中身をすべて取り出して配列化している。
    $stmt = $pdo->query( $sql_5 );
    $tables1 = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // ベッドのアイテム取得
    $sql2 = "SELECT item_category.* from items JOIN item_category ON items.product_id = item_category.product_id where info_id=1";
    $sth = $pdo -> query($sql2);
    $record2 = $sth -> rowCount();
    //指定したレコードの中身をすべて取り出して配列化している。
    $sql2_5 = "SELECT items.product_id,product_img,product_name,price,count,info_id FROM items JOIN item_img ON items.product_id = item_img.product_id JOIN item_category ON items.product_id = item_category.product_id where info_id= 1";
    $stmt = $pdo->query( $sql2_5 );
    $tables2 = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // イスのアイテム取得
    $sql3 = "SELECT item_category.* from items JOIN item_category ON items.product_id = item_category.product_id where info_id=2";
    $sth = $pdo -> query($sql3);
    $record3 = $sth -> rowCount();
    //指定したレコードの中身をすべて取り出して配列化している。
    $sql3_5 = "SELECT items.product_id,product_img,product_name,price,count,info_id FROM items JOIN item_img ON items.product_id = item_img.product_id JOIN item_category ON items.product_id = item_category.product_id where info_id= 2";
    $stmt = $pdo->query( $sql3_5 );
    $tables3 = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // 収納のアイテム取得
    $sql4 = "SELECT item_category.* from items JOIN item_category ON items.product_id = item_category.product_id where info_id=3";
    $sth = $pdo -> query($sql4);
    $record4 = $sth -> rowCount();
    //指定したレコードの中身をすべて取り出して配列化している。
    $sql4_5 = "SELECT items.product_id,product_img,product_name,price,count,info_id FROM items JOIN item_img ON items.product_id = item_img.product_id JOIN item_category ON items.product_id = item_category.product_id where info_id= 3";
    $stmt = $pdo->query( $sql4_5 );
    $tables4 = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // デスクのアイテム取得
    $sql5 = "SELECT item_category.* from items JOIN item_category ON items.product_id = item_category.product_id where info_id=4";
    $sth = $pdo -> query($sql5);
    $record5 = $sth -> rowCount();
    //指定したレコードの中身をすべて取り出して配列化している。
    $sql5_5 = "SELECT items.product_id,product_img,product_name,price,count,info_id FROM items JOIN item_img ON items.product_id = item_img.product_id JOIN item_category ON items.product_id = item_category.product_id where info_id= 4";
    $stmt = $pdo->query( $sql5_5 );
    $tables5 = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // キッチンのアイテム取得
    $sql6 = "SELECT item_category.* from items JOIN item_category ON items.product_id = item_category.product_id where info_id=5";
    $sth = $pdo -> query($sql6);
    $record6 = $sth -> rowCount();
    //指定したレコードの中身をすべて取り出して配列化している。
    $sql6_5 = "SELECT items.product_id,product_img,product_name,price,count,info_id FROM items JOIN item_img ON items.product_id = item_img.product_id JOIN item_category ON items.product_id = item_category.product_id where info_id= 5";
    $stmt = $pdo->query( $sql6_5 );
    $tables6 = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // その他のアイテム取得
    $sql7= "SELECT item_category.* from items JOIN item_category ON items.product_id = item_category.product_id where info_id=6";
    $sth = $pdo -> query($sql7);
    $record7 = $sth -> rowCount();
    //指定したレコードの中身をすべて取り出して配列化している。
    $sql7_5 = "SELECT items.product_id,product_img,product_name,price,count,info_id FROM items JOIN item_img ON items.product_id = item_img.product_id JOIN item_category ON items.product_id = item_category.product_id where info_id= 6";
    $stmt = $pdo->query( $sql7_5 );
    $tables7 = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // ソファーのアイテム取得
    $sql8 = "SELECT item_category.* from items JOIN item_category ON items.product_id = item_category.product_id where info_id=7";
    $sth = $pdo -> query($sql8);
    $record8 = $sth -> rowCount();
    //指定したレコードの中身をすべて取り出して配列化している。
    $sql8_5 = "SELECT items.product_id,product_img,product_name,price,count,info_id FROM items JOIN item_img ON items.product_id = item_img.product_id JOIN item_category ON items.product_id = item_category.product_id where info_id= 7";
    $stmt = $pdo->query( $sql8_5 );
    $tables8 = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // SELECT items.product_id,item_img.product_img,items.product_name,price,count, item_category.info_id,category_info.categoryname FROM items JOIN item_img ON items.product_id = item_img.product_id JOIN item_category ON items.product_id = item_category.product_id INNER JOIN category_info ON category_info.info_id = item_category.product_id
    // 没、難しい、カテゴリ―番号までは出力できるがcategory_infoからカテゴリー名も引っ張てきたいが無理だった。


  }catch(PDOException $error){
    //エラー時の処理を書く
    //本来は、上記ログ出力し、下記のようになる。
    header('Location: /IT42-117/erro_pages/error1.php');
    exit;
  }
?>
