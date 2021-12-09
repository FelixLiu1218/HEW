<?php
session_start();

$login = 'login.php';
$logout = 'logout.php';
$simulation = 'path_sim.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="robots" content="none,noindex,nofollow">
  <link rel="shortcut icon" href="./images/logo.ico">
  <title>DEFINITELY</title>
  <link rel="stylesheet" href="./css/normalize.css">
  <link rel="stylesheet" href="./css/common.css">
  <link rel="stylesheet" href="./css/styles.css">
  <script>
  // 文字が下からふわっと現れる（いい感じの言葉のとこ）
  function showElementAnimation() {

    var element = document.getElementsByClassName('js-animation');
    if(!element) return; // 要素がなかったら処理をキャンセル

    var showTiming = window.innerHeight > 768 ? 200 : 40; // 要素が出てくるタイミングはここで調整
    var scrollY = window.pageYOffset;
    var windowH = window.innerHeight;

    for(var i=0;i<element.length;i++) { var elemClientRect = element[i].getBoundingClientRect(); var elemY = scrollY + elemClientRect.top; if(scrollY + windowH - showTiming > elemY) {
      element[i].classList.add('is-show');
    } else if(scrollY + windowH < elemY) {
      // 上にスクロールして再度非表示にする場合はこちらを記述
      element[i].classList.remove('is-show');
    }
  }
}
showElementAnimation();
window.addEventListener('scroll', showElementAnimation);
</script>
</head>
<body>
  <!-- コンテンツ -->
  <div class="wrapper">


   <!-- ヘッダー -->
   <header class="header_top">
      <div class="header_upper">
        <!-- ロゴ -->
        <a href="index.php"><h1 class="header_logo"><img src="./images/logo.png" alt="ロゴ"></h1></a>
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
                   echo '<a class = "nav_link" name="logout" href = "./view/'.$logout.'">ログアウト</a>';
                    }else{
                     echo '<a class = "nav_link" href = "./view/'.$login.'">ログイン</a>';
                }
             ?></li>
              <?php
                    // echo htmlspecialchars($_SESSION['mail_address'],ENT_QUOTES);
                      if(isset($_SESSION['mail_address'])){
                         echo '<li><a class = "nav_link" name="logout" href = "./view/mypage.php">マイページ</a></li>';
                          }
             ?>
              <li><?php if(isset($_SESSION['mail_address'])){ echo "<a class='nav_link' href='./view/cart.php'>カート</a>" ;}else{
                    echo "<a class='nav_link' href='./view/path_ca.php'>カート</a>" ;}?></li>
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
              <a class="nav_link" href="index.php">
                <span class="nomal">TOP</span>
                <span class="hover">トップ</span>
              </a>
            </li><li>
              <a class="nav_link" href="./shop_category/interior.php">
                <span class="nomal">INTERIOR</span>
                <span class="hover">インテリア</span>
              </a>
            </li><li>
            <?php if (isset($_SESSION['mail_address'])) { echo "<a class='nav_link' href='./view/madori.php'>
                <span class='nomal'>SIMULATION</span>
                <span class='hover'>シミュレーション</span>"; }
                else{ echo "<a class='nav_link' href='./view/$simulation'>
                  <span class='nomal'>SIMULATION</span>
                  <span class='hover'>シミュレーション</span>"; }?>
            </li><li>
              <a class="nav_link" href="./view/otoiawase.php">
                <span class="nomal">CONTACT</span>
                <span class="hover">お問い合わせ</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- メインビジュアル -->
    <div class="mainvisual">
      <p>メインビジュアル</p>
    </div>

    <!-- 「新宿駅」徒歩3分～のやつ -->
    <div class="merit">
      <ul class="meritList">
        <li>
          <strong>「新宿」</strong>駅徒歩<span class="num">3</span>分
        </li><li class="line">
          <span>JR・小田急・京王・地下鉄<br>から地下街が直結</span>
        </li><li class="line">
          <span class="lastmerit">駅前から歩道橋が直結</span>
        </li>
      </ul>
    </div>
    <!-- 資料請求・来場予約 -->
    <nav class="entryBtn">
      <ul>
        <li><a class="info" href="#"><span>資料請求</span></a></li><li><a class="reserve" href="#"><spna>来場予約</span></a></li>
      </ul>
    </nav>

    <!-- いい感じの言葉 -->
    <div class="element js-animation">
      <div class="word">
        <p>言葉はいらない、この空間を感じてほしい。</p>
      </div>
    </div>

    <!-- インテリア -->
    <div class="element js-animation">
    <div class="top_interior">
      <!-- 家具一覧を見る -->
      <div class="top_interior_main">
        <div class="top_interior_left">
          <!-- インテリアのイメージ画像 -->
        </div>
        <div class="top_interior_right">
          <div class="top_interior_right_central">
            <h2 class="top_interior_right_text">
              <span class="sub">INTERIOR</span>
              <span class="main">インテリア</span>
            </h2>
            <a class="top_interior_right_btn" href="./shop_category/interior.php">家具一覧を見る</a>
          </div>
        </div>
      </div>

      <!-- 家具見本一覧 -->
      <div class="top_interior_sample">
        <a href="./shop_category/sofa.php"><img class="sample_img" src="./images/sofa.jpg" alt="白いソファ"></a>
        <a href="./shop_category/desk.php"><img class="sample_img" src="./images/table.jpg" alt="茶色いテーブル"></a>
        <a href="./shop_category/sofa.php"><img class="sample_img" src="./images/sofa2.jpg" alt="グレーのソファ"></a>
        <a href="./shop_category/desk.php"><img class="sample_img" src="./images/table2.jpg" alt="丸みを帯びたテーブル"></a>
      </div>
    </div>
    </div>

    <!-- シミュレーション -->
    <div class="top_simulation">
      <div class="top_simulation_opa">
        <div class="top_simulation_central">
          <h2 class="top_simulation_text">
            <span class="sub">SIMULATION</span>
            <span class="main">シミュレーション</span>
          </h2>
          <p>間取りを設定しお好きな家具を選んで配置するだけ。<br>
            他の家具とのスペースの兼ね合いはどうか、<br>
            お部屋にレイアウトしたイメージを体感いただけます。</p>
            <?php
                    // echo htmlspecialchars($_SESSION['mail_address'],ENT_QUOTES);
                      if(isset($_SESSION['mail_address'])){
                         echo '<a class="top_simulation_btn" href="./view/madori.php">START</a>';
                          }else{
                            echo '<a class="top_simulation_btn" href="./view/path_sim.php">START</a>';
                          }
             ?>
        </div>
      </div>
    </div>

    <!-- フッター -->
    <footer class="footer">
      <small>(C) 2021 Definitely</small>
    </footer>

  </div>
</body>
</html>
