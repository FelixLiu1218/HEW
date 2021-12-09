<!-- shop.phpから値を受け取るところから -->
<?php

//参考演算子の条件分岐の書き方

// 削除のリクエストをもらった時の処理

// カートの内容を削除する内容の送信があったかissetで判定して、$delete_nameに代入する。
$delete_name = (isset($_POST['delete_name']))? htmlspecialchars($_POST['delete_name'], ENT_QUOTES, 'utf-8') : '';
session_start();

// $delete_nameのなかに$product、正確には$nameに変換した内容が入ってなければ、何も起きない。あったらセッションの削除を実行。
if($delete_name != '') unset($_SESSION['products'][$delete_name]);
//合計の初期値は0←これしてないとバグる。
$total = 0;


// ? $_SESSION['products']:[];この書き方はisset分のif,else的な使い方。かっこいい。。
// 後、この条件分岐の書き方は「三項演算子による条件分岐で調べればわかるよ」
/*何してるかっていうと、セッションに登録してある$_SESSION['products']が、入ってれば$productsに代入$_SESSION['products']を代入。なければ->[](elseの意味)空のまんま*/
$products = isset($_SESSION['products'])? $_SESSION['products']:[];



// 数の更新処理←減らしたり増やしたりの機能
if( isset($_POST['name'])){
  $found = false;
  if( array_key_exists( $_POST['name'], $products ) ){
    $products[$_POST['name']]['count'] = $_POST['count'];
  }else{
    $products[$_POST['name']] = ['count'=>$_POST['count'],'price'=>$_POST['price']];
  }
}
// セッションに上書き
$_SESSION['products'] = $products;

//
$login = 'login.php';
$logout = 'logout.php';
$simulation = 'path_sim.php';

// 配列デバックテストコード

// $_SESSION['product'] = $products;
// echo '<pre>';

// print_r($cart);

//テスト用出力
// foreach( $cart as $id => $product ){
//     echo $id, '<br>';
//     echo $product['count'], '<br>';
//     echo $product['price'], '<br>';
//     echo $product['count'] * $product['price'], '<br>';
// }
// shop.phpからセッション変数に代入したproductsの存在があるか判定して、$productsに代入している。


foreach($products as $name => $product){
  //各商品の小計を取得
  $subtotal = (int)$product['price']*(int)$product['count'];
  //各商品の小計を$totalに足す
  $total += $subtotal;
}
// PHPは楽しいなぁ～


 // 非ログインの場合
 if (!isset($_SESSION['mail_address'])) {
  header("Location: /IT42-117/view/path_ca.php");
  exit;
}

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>カート</title>
  <meta name="robots" content="none,noindex,nofollow">
  <meta name="description" content="ここにサイトの説明文">
  <!-- css -->
  <link rel="shortcut icon" href="../images/logo.ico">
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/common.css">
  <link rel="stylesheet" href="../css/cart.css">

</head>
<body>
<div class="wrapper">
  <div class="container">

     <!-- ヘッダー -->
     <header class="header_top">
        <div class="header_upper">
          <!-- ロゴ -->
          <a href="../index.php"><h1 class="header_logo"><img src="../images/logo.png" alt="ロゴ"></h1></a>
          <!-- ログイン・お気に入り・カート -->
          <div class="top_flex2">
            <nav class="header_nav1">
              <ul>
                <!-- ログイン後、 -->
                <li><a class="nav_link" href="#"><?php if (isset($_SESSION['mail_address'])) { echo "ようこそ".$_SESSION['name']."さん"; } else {echo"ようこそゲストさん";}?></a></li>
                <li>
                  <!-- セッションある場合、ログアウトボタンに切り替え 　ない場合ログインボタンに切り替え-->
                <?php
                // echo htmlspecialchars($_SESSION['mail_address'],ENT_QUOTES);
                  if( isset($_SESSION['mail_address'])){
                    echo '<a class = "nav_link" name="logout" href = "'.$logout.'">ログアウト</a>';
                      }else{
                      echo '<a class = "nav_link" href = "'.$login.'">ログイン</a>';
                  }
              ?></li>
                <?php
                      // echo htmlspecialchars($_SESSION['mail_address'],ENT_QUOTES);
                        if(isset($_SESSION['mail_address'])){
                          echo '<li><a class = "nav_link" name="logout" href = "mypage.php">マイページ</a></li>';
                            }
              ?>
                <li><?php if(isset($_SESSION['mail_address'])){ echo "<a class='nav_link' href='cart.php'>カート</a>" ;}else{
                      echo "<a class='nav_link' href='path_ca.php'>カート</a>" ;}?></li>
              </ul>
            </nav>
            <!-- 資料請求・来場予約 -->
            <nav class="header_nav2">
              <ul>
                <li><a class="nav_info" href="#">資料請求</a></li><li><a class="nav_reserve" href="#">来場予約</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="lower">
          <!-- ナビゲーション -->
          <nav class="header_nav3">
            <ul>
              <li>
                <a class="nav_link" href="../index.php">
                  <span class="nomal">TOP</span>
                  <span class="hover">トップ</span>
                </a>
              </li><li>
                <a class="nav_link" href="../shop_category/interior.php">
                  <span class="nomal">INTERIOR</span>
                  <span class="hover">インテリア</span>
                </a>
              </li><li>
              <?php if (isset($_SESSION['mail_address'])) { echo "<a class='nav_link' href='madori.php'>
                  <span class='nomal'>SIMULATION</span>
                  <span class='hover'>シミュレーション</span>"; }
                  else{ echo "<a class='nav_link' href='$simulation'>
                    <span class='nomal'>SIMULATION</span>
                    <span class='hover'>シミュレーション</span>"; }?>
              </li><li>
                <a class="nav_link" href="otoiawase.php">
                  <span class="nomal">CONTACT</span>
                  <span class="hover">お問い合わせ</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </header>
  </div>

  <!-- メインコンテンツ -->
  <main class="main">
    <div class="container2">
      <h1>カート</h1>
      <div class="cart">
        <!-- カートリスト -->
        <?php foreach($products as $name => $product): ?>
          <div class="cartlist">
            <div class="cart_flex">
              <div class="cart_img">
                <a href="#"><img src="../interior_img/all_img/<?php echo $product['img'];?>" alt="商品" width="180" height="180"></a>
              </div>
              <div class="cart_text">
                <a href="#"><h3><?php echo $name; ?></h3></a>
                <div class="cart_text_flex">
                  <div class="cart_text2">
                    <p><small>個数</small>
                      <form action="cart.php" method="post">
                        <!-- hiddenタイプで現在セッションに登録されている商品名のname属性を送信する。
                        これにより商品数を減らしたいッ商品名を特定できる -->
                        <input type="hidden" name="name" value="<?php echo $name; ?>">
                        <select name="count" value="<?php echo $product['count']; ?>">
                          <option value="<?php echo $product['count']; ?>"><?php echo $product['count']; ?></option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                        </select>
                        <input class="change" type="submit" name="変更" value="変更">
                      </form></p>
                    </div>
                    <div class="cart_text2_flex">
                      <div class="cart_text3">
                        <p><small>単価：</small></p><p class="cart_text3_p">¥<?php echo number_format($product['price']); ?></p>
                      </div>
                      <div class="cart_text4">
                        <p><small>小計：</small></p><p class="cart_text4_p"><strong>¥<?php echo number_format($product['price']*$product['count']); ?></strong></p>
                      </div>
                    </div>
                  </div>
                  <!-- <?php echo print_r($product); ?> -->
                  <!-- 削除ボタン -->
                  <div class="cart_deletebtn">
                    <form action="cart.php" method="post">
                      <input type="hidden" name="delete_name" value="<?php echo $name; ?>">
                      <button type="submit"><span class="cross"></span>削除</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>

        <!-- 合計金額 -->
        <div class="summary">
          <div class="sum_contents">
            <div class="sum_text">
              <div class="sum_flex">
                <p>商品合計</p>
                <p>¥<?php echo number_format($total); ?></p>
              </div>
              <div class="sum_flex">
                <p>送料合計</p>
                <p>¥0</p>
              </div>
              <hr>
              <div class="sum_flex">
                <p class="sum">合計金額</p>
                <p>¥<?php echo number_format($total); ?></p>
              </div>
            </div>
            <div class="cart_sum_btn">
            <?php if(isset($product['price'])){ echo "<a href='deal.php' class='sum_btn'><span class='-text'>ご注文手続き</span></a>"; }
              else{echo"<a href='#' class='sum_btn'><span class='-text'>カートが空です</span></a>";}?>
              <a href="../shop_category/interior.php" class="sum_btn2"><span class="-text">買い物を続ける</span></a>
            </div>
          </div>
        </div>
      </div>
  </main>

  <footer class="footer">
    <small>(C) 2021 Definitely</small>
  </footer>
</div>
</body>
</html>
