<?php

session_start();


$login = 'login.php';
$logout = 'logout.php';
$simulation = 'path_sim.php';



if (isset($_SESSION['mail_address'])) {
  $point = $_SESSION['point'];
   }
  else{
    $point = 0;
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
  <link rel="stylesheet" href="../css/mypage.css">
  <title>マイページ</title>
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
      <!--マイページ コンテンツ-->
      <main class="main">
      <!-- 左側 -->
      <div class="main_left">
        <h3>マイページ</h3>
        <ul>
          <li>
            <a href="mypage.php">マイページTOP</a>
          </li>
        </ul>
        <h3>購入履歴</h3>
        <ul>
          <li>
            <a href="mycust_bought.php">購入履歴</a>
          </li>
        </ul>
        <h3>登録情報</h3>
        <ul>
          <li>
            <a href="mycust_info.php">お客様情報の変更</a>
          </li>
          <li>
            <a href="mycust_pass.php">パスワードの変更</a>
          </li>
        </ul>
        <h3>ショッピングカート</h3>
        <ul>
          <li>
            <a href="cart.php">カートの中を見る</a>
          </li>
        </ul>
        <h3>ログアウト</h3>
        <ul>
          <li>
            <a href="login_out_page.php">ログアウト</a>
          </li>
        </ul>
        <h3>退会</h3>
        <ul>
          <li>
            <a href="mycust_leave.php">退会手続き</a>
          </li>
        </ul>
      </div>

      <!-- 右側 -->
      <div class="main_right">
        <div class="auto">
          <h1>ようこそ、<?php if (isset($_SESSION['mail_address'])) { echo $_SESSION['name']; } else {echo"ゲスト";}?>さん</h1>
          <!-- ポイント -->
          <div class="point">
            <span class="point_text">ご利用可能なポイント</span>
            <span class="point_num"><?php echo $point; ?>
              <span class="pt">Pt</span>
            </span>
          </div>
          <!-- 項目 -->
          <div class="project">
            <ul>
              <li>
                <a href="mycust_bought.php">
                  <img src="../images/box.png" alt="段ボール箱">
                  <p>購入履歴</p>
                </a>
              </li>
              <li>
                <a href="mycust_info.php">
                  <img src="../images/card.png" alt="カード">
                  <p>お客様情報</p>
                </a>
              </li>
              <li>
                <a href="mycust_pass.php">
                  <img src="../images/padlock.png" alt="パスワード">
                  <p>パスワード</p>
                </a>
              </li>
              <li>
                <a href="cart.php">
                  <img src="../images/cart.png" alt="カート">
                  <p>カート</p>
                </a>
              </li>
            </ul>

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
