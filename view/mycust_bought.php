<?php
session_start();
 // 非ログインの場合
 if (!isset($_SESSION['mail_address'])) {
  header("Location: /IT42-117/view/login.php");
  exit;
}


require_once('../Model/mycust_bought_model.php');

// ログイン用変数
$login = 'login.php';
$logout = 'logout.php';
$simulation = 'path_sim.php';


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
  <title>購入履歴</title>

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
      <div class="main_right">
        <!--ログインフォーム-->
        <div class="bought_auto">
          <h2>購入履歴</h2>
          <div class="btflex">
              <?php foreach($history as $table){ ?>
              <div class="btwra">
                <!-- 日付のフォーマット -->
                <?php $date= new DateTime($table['created_ad']);

                ?>

                <img src="../interior_img/all_img/<?php echo $table['product_img']; ?>" alt="履歴" width="180" height="180">
                <div class="bought_text">
                  <p><strong><?php echo $table['product_name']; ?></strong></p>
                  <p>数量：<?php echo $table['bought_count']; ?></p>
                  <p>お支払い金額：￥<?php echo number_format($table['total_pr']); ?></p>
                  <p>利用ポイント：<?php echo number_format($table['avilable_point']); ?>pt</p>
                  <p>注文日時：<?php echo $date->format('Y年m月d日 H時i分s秒'); ?></p>
                  <p>決済方法：<?php echo $table['deal_buy']; ?></p>
                </div>

              </div>

              <?php } ?>
          </div>
          <div class="passfinish_btn">
            <a href="mypage.php" class="arrow_btn backbtn">マイページへ戻る</a>
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
