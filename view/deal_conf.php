<?php
session_start();

 // 非ログインの場合
 if (!isset($_SESSION['mail_address'])) {
  header("Location: /IT42-117/view/path_ca.php");
  exit;
}

require_once('../Model/deal_model.php');

$login = 'login.php';
$logout = 'logout.php';
$simulation = 'path_sim.php';

// deal.phpから値の受け取り
$name = isset($_POST['name'])? htmlspecialchars($_POST['name'],ENT_QUOTES,'utf-8'):'';
$email = isset($_POST['email'])? htmlspecialchars($_POST['email'],ENT_QUOTES,'utf-8'):'';
$tel = isset($_POST['tel'])? htmlspecialchars($_POST['tel'],ENT_QUOTES,'utf-8'):'';
$postcode = isset($_POST['postcode'])? htmlspecialchars($_POST['postcode'],ENT_QUOTES,'utf-8'):'';
$address = isset($_POST['address'])? htmlspecialchars($_POST['address'],ENT_QUOTES,'utf-8'):'';
$avilable_point = isset($_POST['avilable_point'])? htmlspecialchars($_POST['avilable_point'],ENT_QUOTES,'utf-8'):'';
$deal_buy = isset($_POST['deal_buy'])? htmlspecialchars($_POST['deal_buy'],ENT_QUOTES,'utf-8'):'';

// 合計金額計算
$total = 0;
$products = isset($_SESSION['products'])? $_SESSION['products']:[];

// 商品の小計と合計の計算
foreach($products as $name => $product){
  //各商品の小計を取得
  $subtotal = (int)$product['price']*(int)$product['count'];
  //各商品の小計を$totalに足す
  $total += $subtotal;
}
// ユーザが所有するポイント
$point = $_SESSION['point'];

if(($point >= 0) && ($point >= $avilable_point)){
$point -= $avilable_point;
}elseif($point < $avilable_point){
  $false=$point;
}else{
 $point;
}

// ポイント還元(このページの表示用)
$point_bonus = $total/100;

// 日時取得
date_default_timezone_set('Asia/Tokyo');

 ?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="robots" content="none,noindex,nofollow">
  <link rel="shortcut icon" href="../images/logo.ico">
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/common.css">
  <link rel="stylesheet" href="../css/deal_conf.css">
  <title>ご注文手続き</title>
</head>
<body>
  <div class="wrapper">
    <!--マイページ コンテンツ-->
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
    <!-- フォーム形式になるようにお願いします -->
    <!--

    cart.phpからチュモン手続きのリクエストが来たら、そのままカートの中身をセッションなりPOSTなりして、商品情報を出力するようになするから、商品が飾られる項目と、住所の入力フォームをダミーでもいいから入れといてくれるとありがたい。
    画像の出力場所は、HTMLでいいから何か画像出力させてみて確かめて。


    決済方法の項目もダミーで入れていただければ...

    クレジット決済、ポイント決済、電子決済、コンビニ決済、代引きなど

    headerの修復もよろしくお願いします。-->


    <!-- 手続き -->
    <main>
            <div class="all">
                <?php foreach($cust as $customer){ ?>
               <form action="../Model/deal_model2.php" method="POST">
               <div class="info_area">
                 <div class="info_flex1">
                  <div>
                    <h2>お名前</h2>
                    <p><?php echo $customer['name']; ?></p>
                  </div>

                  <div>
                    <h2 class="mail">メールアドレス</h2>
                    <p><?php echo $email; ?></p>
                  </div>
                  <?php } ?>
                  <div>
                    <h2 class="number">電話番号</h2>
                    <input type="hidden" name="tel" value="<?php echo $tel; ?>">
                    <p class="number"><?php echo $tel; ?></p>
                  </div>
                  </div> <!-- info_flex1 -->
                  
                  <div class="info_flex2">
                  <div>
                    <h2>お届け先情報</h2>
                    <h3 class="ad_num">郵便番号</h3>
                    <input type="hidden" name="postcode" value="<?php echo $postcode; ?>">
                    <p><?php echo $postcode; ?></p>
                    <h3 class="address">住所</h3>
                    <input type="hidden" name="address" value="<?php echo $address; ?>">
                    <p><?php echo $address; ?></p>
                  </div>
                </div> <!-- info_flex2 -->
                </div> <!-- info_area -->

                <div class="buy_date">
                <!-- 購入時刻インサート用 これはboughtテーブルより、NOTNULL制約によりインサートしないといけないカラムのデータ-->
                <input type="hidden" name="created_ad" value="<?php echo date("Y/m/d H:i:s"); ?>">
                <input type="hidden" name="deal_buy" value="<?php echo $deal_buy; ?>">

                <!-- 選択した決済方法 -->
                <div class="method">
                <div style="float: left"><h2 class="method">決済方法</h2></div>
                <div style="text-align: right"><p class="method"><?php echo $deal_buy; ?></p></div>
                </div>

                <!-- 利用したポイント -->
                <div>
                <div style="float: left"><h2 class="use_p">利用ポイント</h2></div>
                <div style="text-align: right"><p class="use_p"><?php echo $avilable_point."Pt"; ?></p></div>
                </div>

                <div>
                <div style="float: left"><h2 class="use_p"><h2 class="remain_p">残りの所持ポイント</h2></div>
                <div style="text-align: right"><p class="remain_p"><?php echo $point."Pt"; ?></p></div>
                </div>

                <div>
                <!-- 購入金額等の情報 -->
                <div style="float: left"><h2 class="use_p"><h2 class="total">合計金額（適応利用ポイント含む）</h2></div>
                <div style="text-align: right"><p class="total">￥<?php if($total >= $avilable_point){ echo number_format($total-$avilable_point);}else{ echo "ポイントを適応出来ません。";} ?></p></div>
                <p class="return">ポイント還元：<?php if($total >= $avilable_point) {echo $point_bonus."Pt";} else{echo "還元できる合計値がありません。";} ?></p>
                </div>

                <!-- 利用ポイントの送信 -->
                <input type="hidden" name="avilable_point" value="<?php echo $avilable_point; ?>">
                <!-- 減った所有ポイントの送信 -->
                <input type="hidden" name="point" value="<?php echo $point; ?>">
                </div> <!-- buy_date -->

                <h2 class="confirmation">この内容で送信してよろしいですか？</h2>
                <div class="deal_sum_btn">
                <?php if(($total >= $avilable_point) && (!isset($false))){ echo "<button type='submit' class='sum_btn'>購入する</button>";}else{ echo "<button type='button' class='sum_btn'>購入不可</button>";} ?>
                <!-- <button type="submit" class="sum_btn">購入する</button> -->
                <button type="button" class="sum_btn2" onclick="location.href='./deal.php'">修正する</button>
                </div>
                </form>
              </div>
</main>

<footer class="footer">
    <small>(C) 2021 Definitely</small>
  </footer>

  </div>
</body>
</html>
