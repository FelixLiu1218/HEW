<?php
// 注文手続き用

// DB接続
  // require_once('../app/config.php');
   // なんか今更この形変えるタイミングないから、config.phpに鞍替えしません。
  $dsn = 'mysql:host=localhost;dbname=hew2020_91149;charset=utf8mb4';
  $db_user = 'root';
  // ここパスワード変えてください。
  $db_password = '0112';


// 本当に馬鹿なsqlの膨大な羅列だけど許して。。。。
// Ajaxの処理で読み込ませる分。
// いつもの脳筋コーディングです。。。。

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
        // ベッドカテゴリー
        // ベッドその１
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 5";
        $stmt = $pdo->query($sql);
        $cart = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart as $cart_in1){
            $product_id1 = $cart_in1['product_id'];
            $name1 = $cart_in1['product_name'];
            $count1 = $cart_in1['count'];
            $price1 = $cart_in1['price'];
            $img1 = $cart_in1['product_img'];
           }
        // ベッドその２
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 2";
        $stmt = $pdo->query($sql);
        $cart2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart2 as $cart_in2){
            $product_id2 = $cart_in2['product_id'];
            $name2 = $cart_in2['product_name'];
            $count2 = $cart_in2['count'];
            $price2 = $cart_in2['price'];
            $img2 = $cart_in2['product_img'];
           }
        // ベッドその3
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 3";
        $stmt = $pdo->query($sql);
        $cart3 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart3 as $cart_in){
            $product_id3 = $cart_in['product_id'];
            $name3 = $cart_in['product_name'];
            $count3 = $cart_in['count'];
            $price3 = $cart_in['price'];
            $img3 = $cart_in['product_img'];
           }
        // ベッドその4
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 1";
        $stmt = $pdo->query($sql);
        $cart4 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart4 as $cart_in){
            $product_id4 = $cart_in['product_id'];
            $name4 = $cart_in['product_name'];
            $count4 = $cart_in['count'];
            $price4 = $cart_in['price'];
            $img4 = $cart_in['product_img'];
           }
        // ベッドその5
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 4";
        $stmt = $pdo->query($sql);
        $cart5 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart5 as $cart_in){
            $product_id5 = $cart_in['product_id'];
            $name5 = $cart_in['product_name'];
            $count5 = $cart_in['count'];
            $price5 = $cart_in['price'];
            $img5 = $cart_in['product_img'];
           }
        // ベッドその6
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 6";
        $stmt = $pdo->query($sql);
        $cart6 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart6 as $cart_in){
            $product_id6 = $cart_in['product_id'];
            $name6 = $cart_in['product_name'];
            $count6 = $cart_in['count'];
            $price6 = $cart_in['price'];
            $img6 = $cart_in['product_img'];
           }
        //    print_r($products);
        // 椅子シリーズ
        // 椅子１
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 9";
        $stmt = $pdo->query($sql);
        $cart7 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart7 as $cart_in){
            $product_id7 = $cart_in['product_id'];
            $name7 = $cart_in['product_name'];
            $count7 = $cart_in['count'];
            $price7 = $cart_in['price'];
            $img7 = $cart_in['product_img'];
           }
        // 椅子２
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 11";
        $stmt = $pdo->query($sql);
        $cart8 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart8 as $cart_in){
            $product_id8 = $cart_in['product_id'];
            $name8 = $cart_in['product_name'];
            $count8 = $cart_in['count'];
            $price8 = $cart_in['price'];
            $img8 = $cart_in['product_img'];
           }
        // 椅子３
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 10";
        $stmt = $pdo->query($sql);
        $cart9 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart9 as $cart_in){
            $product_id9 = $cart_in['product_id'];
            $name9 = $cart_in['product_name'];
            $count9 = $cart_in['count'];
            $price9 = $cart_in['price'];
            $img9 = $cart_in['product_img'];
           }
        // テーブルシリーズ
        // テーブル１
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 18";
        $stmt = $pdo->query($sql);
        $cart10 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart10 as $cart_in){
            $product_id10 = $cart_in['product_id'];
            $name10 = $cart_in['product_name'];
            $count10 = $cart_in['count'];
            $price10 = $cart_in['price'];
            $img10 = $cart_in['product_img'];
           }
        // テーブル２
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 19";
        $stmt = $pdo->query($sql);
        $cart11 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart11 as $cart_in){
            $product_id11 = $cart_in['product_id'];
            $name11 = $cart_in['product_name'];
            $count11 = $cart_in['count'];
            $price11 = $cart_in['price'];
            $img11 = $cart_in['product_img'];
           }
        // テーブル３
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 20";
        $stmt = $pdo->query($sql);
        $cart12 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart12 as $cart_in){
            $product_id12 = $cart_in['product_id'];
            $name12 = $cart_in['product_name'];
            $count12 = $cart_in['count'];
            $price12 = $cart_in['price'];
            $img12 = $cart_in['product_img'];
           }
        // テーブル４
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 21";
        $stmt = $pdo->query($sql);
        $cart13 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart13 as $cart_in){
            $product_id13 = $cart_in['product_id'];
            $name13 = $cart_in['product_name'];
            $count13 = $cart_in['count'];
            $price13 = $cart_in['price'];
            $img13 = $cart_in['product_img'];
           }
        // テーブル５
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 22";
        $stmt = $pdo->query($sql);
        $cart14 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart14 as $cart_in){
            $product_id14 = $cart_in['product_id'];
            $name14 = $cart_in['product_name'];
            $count14 = $cart_in['count'];
            $price14 = $cart_in['price'];
            $img14 = $cart_in['product_img'];
           }
        // テーブル６
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 23";
        $stmt = $pdo->query($sql);
        $cart15 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart15 as $cart_in){
            $product_id15 = $cart_in['product_id'];
            $name15 = $cart_in['product_name'];
            $count15 = $cart_in['count'];
            $price15 = $cart_in['price'];
            $img15 = $cart_in['product_img'];
           }
        // 収納シリーズ
        // 収納１
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 25";
        $stmt = $pdo->query($sql);
        $cart16 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart16 as $cart_in){
            $product_id16 = $cart_in['product_id'];
            $name16 = $cart_in['product_name'];
            $count16 = $cart_in['count'];
            $price16 = $cart_in['price'];
            $img16 = $cart_in['product_img'];
           }
        // 収納２
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 24";
        $stmt = $pdo->query($sql);
        $cart17 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart17 as $cart_in){
            $product_id17 = $cart_in['product_id'];
            $name17 = $cart_in['product_name'];
            $count17 = $cart_in['count'];
            $price17 = $cart_in['price'];
            $img17 = $cart_in['product_img'];
           }
        // 収納３
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 26";
        $stmt = $pdo->query($sql);
        $cart18 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart18 as $cart_in){
            $product_id18 = $cart_in['product_id'];
            $name18 = $cart_in['product_name'];
            $count18 = $cart_in['count'];
            $price18 = $cart_in['price'];
            $img18 = $cart_in['product_img'];
           }
        // 収納４
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 12";
        $stmt = $pdo->query($sql);
        $cart19 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart19 as $cart_in){
            $product_id19 = $cart_in['product_id'];
            $name19 = $cart_in['product_name'];
            $count19 = $cart_in['count'];
            $price19 = $cart_in['price'];
            $img19 = $cart_in['product_img'];
           }
        // 収納５
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 15";
        $stmt = $pdo->query($sql);
        $cart20 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart20 as $cart_in){
            $product_id20 = $cart_in['product_id'];
            $name20 = $cart_in['product_name'];
            $count20 = $cart_in['count'];
            $price20 = $cart_in['price'];
            $img20 = $cart_in['product_img'];
           }
        // 収納６
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 16";
        $stmt = $pdo->query($sql);
        $cart21 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart21 as $cart_in){
            $product_id21 = $cart_in['product_id'];
            $name21 = $cart_in['product_name'];
            $count21 = $cart_in['count'];
            $price21 = $cart_in['price'];
            $img21 = $cart_in['product_img'];
           }
        // 収納７
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 14";
        $stmt = $pdo->query($sql);
        $cart22 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart22 as $cart_in){
            $product_id22 = $cart_in['product_id'];
            $name22 = $cart_in['product_name'];
            $count22 = $cart_in['count'];
            $price22 = $cart_in['price'];
            $img22 = $cart_in['product_img'];
           }
        // 収納８
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 17";
        $stmt = $pdo->query($sql);
        $cart23 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart23 as $cart_in){
            $product_id23 = $cart_in['product_id'];
            $name23 = $cart_in['product_name'];
            $count23 = $cart_in['count'];
            $price23 = $cart_in['price'];
            $img23 = $cart_in['product_img'];
           }
        // 収納９
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 13";
        $stmt = $pdo->query($sql);
        $cart24 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart24 as $cart_in){
            $product_id24 = $cart_in['product_id'];
            $name24 = $cart_in['product_name'];
            $count24 = $cart_in['count'];
            $price24 = $cart_in['price'];
            $img24 = $cart_in['product_img'];
           }
        // ソファーシリーズ
        // ソファー１
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 41";
        $stmt = $pdo->query($sql);
        $cart25 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart25 as $cart_in){
            $product_id25 = $cart_in['product_id'];
            $name25 = $cart_in['product_name'];
            $count25 = $cart_in['count'];
            $price25 = $cart_in['price'];
            $img25 = $cart_in['product_img'];
           }
        // ソファー２
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 37";
        $stmt = $pdo->query($sql);
        $cart26 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart26 as $cart_in){
            $product_id26 = $cart_in['product_id'];
            $name26 = $cart_in['product_name'];
            $count26 = $cart_in['count'];
            $price26 = $cart_in['price'];
            $img26 = $cart_in['product_img'];
           }
        // ソファー３
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 45";
        $stmt = $pdo->query($sql);
        $cart27 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart27 as $cart_in){
            $product_id27 = $cart_in['product_id'];
            $name27 = $cart_in['product_name'];
            $count27 = $cart_in['count'];
            $price27 = $cart_in['price'];
            $img27 = $cart_in['product_img'];
           }
        // ソファー４
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 36";
        $stmt = $pdo->query($sql);
        $cart28 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart28 as $cart_in){
            $product_id28 = $cart_in['product_id'];
            $name28 = $cart_in['product_name'];
            $count28 = $cart_in['count'];
            $price28 = $cart_in['price'];
            $img28 = $cart_in['product_img'];
           }
        // ソファー５
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 38";
        $stmt = $pdo->query($sql);
        $cart29 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart29 as $cart_in){
            $product_id29 = $cart_in['product_id'];
            $name29 = $cart_in['product_name'];
            $count29 = $cart_in['count'];
            $price29 = $cart_in['price'];
            $img29 = $cart_in['product_img'];
           }
        // ソファー６
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 43";
        $stmt = $pdo->query($sql);
        $cart30 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart30 as $cart_in){
            $product_id30 = $cart_in['product_id'];
            $name30 = $cart_in['product_name'];
            $count30 = $cart_in['count'];
            $price30 = $cart_in['price'];
            $img30 = $cart_in['product_img'];
           }
        // ソファー７
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 40";
        $stmt = $pdo->query($sql);
        $cart31 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart31 as $cart_in){
            $product_id31 = $cart_in['product_id'];
            $name31 = $cart_in['product_name'];
            $count31 = $cart_in['count'];
            $price31 = $cart_in['price'];
            $img31 = $cart_in['product_img'];
           }
        // ソファー８
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 42";
        $stmt = $pdo->query($sql);
        $cart32 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart32 as $cart_in){
            $product_id32 = $cart_in['product_id'];
            $name32 = $cart_in['product_name'];
            $count32 = $cart_in['count'];
            $price32 = $cart_in['price'];
            $img32 = $cart_in['product_img'];
           }
        // ソファー９
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 44";
        $stmt = $pdo->query($sql);
        $cart33 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart33 as $cart_in){
            $product_id33 = $cart_in['product_id'];
            $name33 = $cart_in['product_name'];
            $count33 = $cart_in['count'];
            $price33 = $cart_in['price'];
            $img33 = $cart_in['product_img'];
           }
        // その他シリーズ
        // その他１
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 29";
        $stmt = $pdo->query($sql);
        $cart34 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart34 as $cart_in){
            $product_id34 = $cart_in['product_id'];
            $name34 = $cart_in['product_name'];
            $count34 = $cart_in['count'];
            $price34 = $cart_in['price'];
            $img34 = $cart_in['product_img'];
           }
        // その他２
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 27";
        $stmt = $pdo->query($sql);
        $cart35 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart35 as $cart_in){
            $product_id35 = $cart_in['product_id'];
            $name35 = $cart_in['product_name'];
            $count35 = $cart_in['count'];
            $price35 = $cart_in['price'];
            $img35 = $cart_in['product_img'];
           }
        // その他３
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 28";
        $stmt = $pdo->query($sql);
        $cart36 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart36 as $cart_in){
            $product_id36 = $cart_in['product_id'];
            $name36 = $cart_in['product_name'];
            $count36 = $cart_in['count'];
            $price36 = $cart_in['price'];
            $img36 = $cart_in['product_img'];
           }
        // その他４
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 31";
        $stmt = $pdo->query($sql);
        $cart37 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart37 as $cart_in){
            $product_id37 = $cart_in['product_id'];
            $name37 = $cart_in['product_name'];
            $count37 = $cart_in['count'];
            $price37 = $cart_in['price'];
            $img37 = $cart_in['product_img'];
           }
        // その他５
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 30";
        $stmt = $pdo->query($sql);
        $cart38 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart38 as $cart_in){
            $product_id38 = $cart_in['product_id'];
            $name38 = $cart_in['product_name'];
            $count38 = $cart_in['count'];
            $price38 = $cart_in['price'];
            $img38 = $cart_in['product_img'];
           }
        // その他６
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 34";
        $stmt = $pdo->query($sql);
        $cart39 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart39 as $cart_in){
            $product_id39 = $cart_in['product_id'];
            $name39 = $cart_in['product_name'];
            $count39 = $cart_in['count'];
            $price39 = $cart_in['price'];
            $img39 = $cart_in['product_img'];
           }
        // その他７
        $sql = "SELECT items.product_id,product_img,product_name,price,count FROM items JOIN item_img ON items.product_id = item_img.product_id  where items.product_id = 35";
        $stmt = $pdo->query($sql);
        $cart40 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($cart40 as $cart_in){
            $product_id40 = $cart_in['product_id'];
            $name40 = $cart_in['product_name'];
            $count40 = $cart_in['count'];
            $price40 = $cart_in['price'];
            $img40 = $cart_in['product_img'];
           }
    }catch(PDOException $error){
        //エラー時の処理を書く
        //本来は、上記ログ出力し、下記のようになる。
        header('Location: /IT42-117/erro_pages/error1.php');
        exit;
    }
