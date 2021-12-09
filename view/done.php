<?php
session_start();

$login = 'login.php';
$logout = 'logout.php';
$simulation = 'path_sim.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
   <head>
  <meta charset="utf-8">
  <meta name="robots" content="none,noindex,nofollow">
  <link rel="shortcut icon" href="../images/logo.ico">
  <title>送信完了</title>
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/common.css">
  <link rel="stylesheet" href="../css/done.css">
</head>
<body>
    <!-- コンテンツ -->
  <div class="wrapper">


   <!-- ヘッダー -->
   <header class="header_top">
      <div class="header_upper">
        <!-- ロゴ -->
        <a href="index.php"><h1 class="header_logo"><img src="../images/logo.png" alt="ロゴ"></h1></a>
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
              <a class="nav_link" href="./shop_category/interior.php">
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

    <main>
      <div class="center">
      <h1>送信完了</h1>

      <h2>送信致しました、ご連絡お待ちください。</h2>

      <a href="../index.php" class="top">トップページに戻る</a>
      </div>
    </main>

    <!-- フッター -->
    <footer class="footer">
      <small>(C) 2021 Definitely</small>
    </footer>

  </div>
</body>
</html>