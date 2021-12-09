<?php
session_start();

$login = 'login.php';
$logout = 'logout.php';
$simulation = 'path_sim.php';


 // 非ログインの場合
 if (!isset($_SESSION['mail_address'])) {
  header("Location: /IT42-117/view/path_sim.php");
  exit;
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="none,noindex,nofollow">
    <link rel="shortcut icon" href="../images/logo.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>間取り選択</title>
    <link rel="stylesheet" href="../css/madori.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/common.css">
</head>

<body>
    <!-- コンテンツ -->
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

        <!--メインエリア-->
        <main>
          <h2>フローリングを選択してください。</h2>
          <div class="main">
              <div>
                  <img src="../images/4.jpg" alt="オーク材">
                  <h3>オーク材</h3>
                  <p>日本のフローリング材で主流な木材です。硬質でありながら弾力も持ち合わせており、
                      さらに耐水性・耐久性にも優れています。</p>
                  <a href="simulation.php" class="btn">これにする</a>
              </div>

              <div>
                  <img src="../images/walnut.jpg" alt="ウォルナット材">
                  <h3>ウォルナット材</h3>
                  <p>ブラックウォルナットは、落ち着いた深みのある色味が最大の魅力です。
                      シックでモダンな空間にしたいときにピッタリです。</p>
                  <a href="simulation1.php" class="btn">これにする</a>
              </div>

              <div>
                  <img src="../images/white.jpg" alt="ヒノキ材">
                  <h3>ヒノキ材</h3>
                  <p>ヒノキは、耐水性・耐腐食性に優れています。
                      リラックス効果を期待できる独特の香りや、美しい木目などメリットが多くあります。
                  </p>
                  <a href="simulation2.php" class="btn">これにする</a>
              </div>

              <div>
                  <img src="../images/teak.jpg" alt="チーク材">
                  <h3>チーク材</h3>
                  <p>チークは硬く強度があり、耐久性が高い素材です。
                      時が経ってくると、
                      木肌が美しい飴色に
                      変化して深みのある色合になります。</p>
                  <a href="simulation3.php" class="btn">これにする</a>
              </div>
          </div>
        </main>
        <!-- フッター -->
        <footer class="footer">
            <small>(C) 2021 Definitely</small>
        </footer>
    </div>
</body>

</html>
