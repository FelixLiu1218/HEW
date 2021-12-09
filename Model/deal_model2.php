<?php


// 注文手続き用
// 注文内容に応じたリクエストをDBにアップデートORインサート

session_start();
$user = $_SESSION['User_id'];
// Usersテーブル情報
$tel = isset($_POST['tel'])? htmlspecialchars($_POST['tel'],ENT_QUOTES,'utf-8'):'';
$postcode = isset($_POST['postcode'])? htmlspecialchars($_POST['postcode'],ENT_QUOTES,'utf-8'):'';
$address = isset($_POST['address'])? htmlspecialchars($_POST['address'],ENT_QUOTES,'utf-8'):'';
$point = isset($_POST['point'])? htmlspecialchars($_POST['point'],ENT_QUOTES,'utf-8'):'';

// boughtテーブル情報
// 購入日
$created_ad = isset($_POST['created_ad'])? htmlspecialchars($_POST['created_ad'],ENT_QUOTES,'utf-8'):'';
// 決済方法
$deal_buy = isset($_POST['deal_buy'])? htmlspecialchars($_POST['deal_buy'],ENT_QUOTES,'utf-8'):'';
// 利用ポイント
$avilable_point = isset($_POST['avilable_point'])? htmlspecialchars($_POST['avilable_point'],ENT_QUOTES,'utf-8'):'';

// セッションからカートの中身を購入商品として引っ張ってくる


$products = isset($_SESSION['products'])? $_SESSION['products']:[];
// dealテーブル用セッション代入変数
// foreach($products as $name => $product){
// $product['product_id'];
// $product['count'];
// $product['price'];
// }


// カートの合計金額をセッションから取って計算しなおす。
// boughtテーブルゆき
$total_pr = 0;
foreach($products as $key => $product){
    $subtotal = (int)$product['price']*(int)$product['count'];
    $total_pr += $subtotal;
    $total_pr = $total_pr-$avilable_point;
}


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
        $pdo = new PDO($dsn, $db_user, $db_password,

        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );

         // Usersテーブルへの住所、郵便番号等の登録アップデート
         $sql = "UPDATE users SET tel=:tel, address_num=:address_num, address=:address, point=:point WHERE User_id =:User_id";
         $ps = $pdo->prepare($sql);
         $ps->bindValue(':User_id',$user);
         $ps->bindValue(':tel',$tel);
         $ps->bindValue(':address_num',$postcode);
         $ps->bindValue(':address',$address);
         $ps->bindValue(':point',$point);
         $ps->execute();


         //  購入テーブルへインサート
         $stmt1 = $pdo->prepare("INSERT INTO bought(User_id,created_ad,total_pr,avilable_point,deal_buy) VALUES(:User_id,:created_ad,:total_pr,:avilable_point,:deal_buy)");
         $stmt1->bindParam(':User_id',$user);
         $stmt1->bindParam(':created_ad',$created_ad);
         $stmt1->bindParam(':total_pr',$total_pr);
         $stmt1->bindParam(':avilable_point',$avilable_point);
         $stmt1->bindParam(':deal_buy',$deal_buy);
         $stmt1->execute();
        //購入テーブルのid取得

        // // 購入明細インサートカート
        // //  カートをまたてこ直しからはじめないと、データが入れられない
        // foreach($products as $key => $product){

         $id = $pdo->lastInsertId();
         foreach($products as $name => $product){
         $stmt2 = $pdo->prepare("INSERT INTO deal(id,product_id,bought_count,by_price) VALUES(:id,:product_id,:bought_count,:by_price)");
         $stmt2->bindParam(':id',$id);
         $stmt2->bindParam(':product_id',$product['product_id']);
         $stmt2->bindParam(':bought_count',$product['count']);
         $stmt2->bindParam(':by_price',$product['price']);
        //  echo print_r($products);
         $stmt2->execute();
        }
        // }

        // ポイント還元
        $point_bonus = $total_pr/100;

        $point = $point+$point_bonus;

         // Usersテーブルへの住所、郵便番号等の登録アップデート
         $sql2 = "UPDATE users SET point=:point WHERE User_id=:User_id";
         $ps = $pdo->prepare($sql2);
         $ps->bindValue(':User_id',$user);
         $ps->bindValue(':point',$point);
         $ps->execute();

         // セッションポイントに上書き
         $_SESSION['point'] = $point;

    }catch(PDOException $e){
        //エラー時の処理を書く
        //本来は、上記ログ出力し、下記のようになる。
        print "DBに接続できませんでした。" . $e->getMessage();
        exit;
        // header('Location: http://localhost/HEW2/PHP8/erro_pages/error1.php');
        // exit;
    }

    header('Location: /IT42-117/view/deal_end.php');
    exit;
