<?php
session_start();
require_once('../Model/deal_model.php');
require_once('../app/function.php');
// カートの中身と価格情報

//合計の初期値は0←これしてないとバグる。
$total = 0;

$products = isset($_SESSION['products'])? $_SESSION['products']:[];

// 商品の小計と合計の計算
foreach($products as $name => $product){
  //各商品の小計を取得
  $subtotal = (int)$product['price']*(int)$product['count'];
  //各商品の小計を$totalに足す
  $total += $subtotal;
}

// セッションユーザに登録されている所持ポイント
$point = $_SESSION['point'];

// ログイン用変数
$login = 'login.php';
$logout = 'logout.php';
$simulation = 'path_sim.php';


 // 非ログインの場合
 if (!isset($_SESSION['mail_address'])) {
  header("Location: /IT42-117/view/path_ca.php");
  exit;
}



 ?>




<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="robots" content="none,noindex,nofollow">
  <link rel="shortcut icon" href="../images/logo.ico">
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/common.css">
  <link rel="stylesheet" href="../css/deal.css">
  <title>ご注文手続き</title>
</head>


<body>
  <div class="wrapper">
    <!--マイページ コンテンツ-->
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
    <!-- フォーム形式になるようにお願いします -->
    <!--

    cart.phpからチュモン手続きのリクエストが来たら、そのままカートの中身をセッションなりPOSTなりして、商品情報を出力するようになするから、商品が飾られる項目と、住所の入力フォームをダミーでもいいから入れといてくれるとありがたい。
    画像の出力場所は、HTMLでいいから何か画像出力させてみて確かめて。


    決済方法の項目もダミーで入れていただければ...

    クレジット決済、ポイント決済、電子決済、コンビニ決済、代引きなど

    headerの修復もよろしくお願いします。-->


    <!-- 手続き -->
    <main>
      <!-- ユーザ情報編集欄 -->
        <h1>ご購入者情報</h1>
      <div class="contents_flex">
       <div class="contents_1">

        <div class="customer_aria">
        <?php foreach($cust as $customer){ ?>

        <form class="" action="deal_conf.php" method="POST">

        <div class="p_info">
        <div class="user">
        <div>
        <h2>登録ユーザ</h2>
            <h3>お名前</h3>
            <input type="hidden" name="name" required value="<?php echo $customer['name']; ?>">
            <p>
              <?php echo $customer['name']; ?>
            </p>
          </div>

          <div class="mail">
            <h3>メールアドレス</h3>
            <input type="hidden" name="email" required value="<?php echo $customer['mail_address']; ?>">
            <p>
              <?php echo $customer['mail_address']; ?>
            </p>
          </div>
          </div>

          <div class="leave_auto">
            <h2>お届け先</h2>
            <div>
              <h3>電話番号<span class="to">必須</span></h3>
            <input type="text" name="tel" required value="<?php echo h($customer['tel']); ?>">
            <p>※ハイフン抜きの数字を入力してください。</p>
            </div>
            <h3>郵便番号<span class="to">必須</span></h3>
            <input type="text" name="postcode" required value="<?php echo h($customer['address_num']); ?>">
            <p>※ハイフン抜きの数字を入力してください。</p>
            <h3>住所<span class="to">必須</span></h3>
            <input type="text" name="address" required value="<?php echo h($customer['address']); ?>">
          </div>
        </div>
          <?php } ?>
      </div>
          <!-- カートの中身確認 -->
          <h1>カートの内容</h1>
          <div class="product_aria">
          <div class=cart_text">
          <h2 class="cart">現在のカートの中身</h2>
          <h3 class="cart_edit"><a href="cart.php" class="edit">カートの中身を編集</a></h3>
          </div>
          <?php foreach($products as $name => $product): ?>
          <div class="cart_flex">
          <div class="imgs">
          <a href="#"><img src="../interior_img/all_img/<?php echo $product['img'];?>" alt="商品" width="180"
              height="180"></a>
          </div> <!--imgs-->

          <div class="p_names">
          <h3>
            <?php echo $name; ?>
          </h3>
          <h4>商品ID
            <?php echo $product['product_id']; ?>番
          </h4>

          <div class="price">
          <div class="price_flex">
          <div class="price_text_1">
          <p><small>単価：</small></p>
          <p class="cart_text3_p">¥
            <?php echo number_format($product['price']); ?>
          </p>
          </div> <!--price_text_1-->

          <div class="price_text_2">
          <p><small>小計：</small></p>
          <p class="cart_text4_p"><strong>¥
              <?php echo number_format($product['price']*$product['count']); ?>
            </strong></p>
          <p>数量
            <?php echo $product['count']; ?>
          </p>
        </div> <!--price_text_2-->
        </div> <!--price_flex-->
        </div> <!--price-->
        </div> <!--p_names-->
        </div> <!--cart_flex-->
          <!-- カートのセッション配列の情報を引っ張り出すのはここまで -->
          <?php endforeach; ?>
         </div> <!--product_aria-->
      </div>
          <!-- 決済ゾーン -->
        <div class="settlement_aria">

        <div class="settle_method">

        <h2 class="method">決済方法</h2>
          <label><input type="radio" name="deal_buy" required value="代引き決済">代引き決済</label>
          <label><input type="radio" name="deal_buy" required value="クレジット利用">クレジット決済</label>
          <label><input type="radio" name="deal_buy" required value="電子決済">電子決済</label>
          <label><input type="radio" name="deal_buy" required value="コンビニ決済">コンビニ決済</label>
        <div class="points">
          <div style="float: left"><h2 class="points">所持ポイント</h2></div>
          <div style="text-align: right"><p class="points"><?php echo number_format($point); ?>Pt</p></div>
        </div>

        <div class="use_p">
          <div style="float: left"><p class="use_p">利用ポイント</p></div>
          <div style="text-align: right"><input type="text" name="avilable_point" required value="0" class="use_p"></div>
        </div>

        <div class="shipping">
          <div style="float: left"><h2 class="total"><h3 class="shipping">送料合計</h3></div>
          <div style="text-align: right"><p class="shipping">¥0</p></div>
        </div>

        <div>
          <div style="float: left"><h2 class="total">合計金額</h2></div>
          <div style="text-align: right"><h3 class="total">¥<?php echo number_format($total); ?></h3></div>
        </div>
          <!-- 送信ボタン -->
          <button type="submit" class="btn_btn-blue">決済に進む</button>
          </form>
          </div>
        </div>



      </div>
    </main>

    <!--フッター-->
    <footer class="footer">
      <small>(C) 2021 Definitely</small>
    </footer>
  </div>
</body>

</html>
