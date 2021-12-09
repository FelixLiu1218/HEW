<?php

session_start();


$login = 'login.php';
$logout = 'logout.php';
$simulation = 'path_sim.php';

if(isset($_GET['err'])){
  $err = $_GET['err'];
}elseif(!isset($_GET['err'])){
  $err='';
}
if(isset($_GET['err2'])){
  $err2 = $_GET['err2'];
}elseif(!isset($_GET['err2'])){
  $err2='';
}

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
  <link rel="stylesheet" href="../css/login.css">
  <title>新規会員登録</title>
</head>
<body>
  <div class="wrapper">
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
    <!--ログインフォーム-->
    <section class="login">
      <form name="login" method="post" action="../control/signup_validate_ca.php">
        <h2 class="loginname">新規会員登録</h2>
        <div class="login_margin">
          <h3 class="roginfont">メールアドレス<span class="to">必須</span></h3>
          <input class="email" type="mail_address"
                name="mail_address"
                required="required"
                placeholder="架空のメールアドレスを入力"
                class="placeholder_text"/>
        </div>
        <div class="login_margin">
          <h3 class="roginfont">パスワード<span class="to">必須</span></h3>
          <input  class="password" type="password"
                name="password"
                required="required"
                placeholder="例：abcd1234"
                class="placeholder_text"/>
          <p>※英数字8文字以上で入力してください。</p>
        </div>
        <div class="login_margin">
          <h3 class="roginfont">ユーザネーム<span class="to">必須</span></h3>
          <input
                type="text"
                name="name"
                required="required"
                placeholder="好みの名前を入力"
                class="placeholder_text"/>
                <p>※１２文字以内で入力してください。</p><br>
          <h5><span  style="color:red;font-weight:bold;"><?php echo $err; ?></span></h5>
          <h5><span  style="color:red;font-weight:bold;"><?php echo $err2; ?></span></h5><br>
        </div>
        <input type="hidden" name="created_at" value="<?php echo date("Y/m/d H:i:s"); ?>">
        <input type="hidden" name="point" value="3000">
        <div class="login_margin">
          <h3 class="roginfont">生年月日<span  style="color:blue;font-weight:bold;">（入力済み）</span></h3>
          <input
                type="text"
                name="born"
                required="required"
                placeholder="birthday"
                class="placeholder_text"
                value="20010202"/>
        </div>
        <div class="login_margin">
          <h3 class="roginfont">郵便番号<span  style="color:blue;font-weight:bold;">（入力済み）</span></h3>
          <input
                type="text"
                name="address_num"
                required="required"
                placeholder="postcode"
                class="placeholder_text"
                value="1600023"/>
        </div>
        <div class="login_margin">
          <h3 class="roginfont">住所<span  style="color:blue;font-weight:bold;">（入力済み）</span></h3>
          <input
                type="text"
                name="address"
                required="required"
                placeholder="address"
                class="placeholder_text"
                value="東京都新宿区西新宿1-7-3"/>
        </div>
        <div class="login_margin">
          <h3 class="roginfont">電話番号<span  style="color:blue;font-weight:bold;">（入力済み）</span></h3>
          <input
                type="text"
                name="tel"
                required="required"
                placeholder="telnumber"
                class="placeholder_text"
                value="0333441010"/>
        </div>
        <div class="login_margin">
          <button class="btn" type="submit">会員登録をする</button>
        </div>
      </form>
    </section>
    <!--フッター-->
    <footer class="footer">
      <small>(C) 2021 Definitely</small>
    </footer>
  </div>
</body>
</html>
