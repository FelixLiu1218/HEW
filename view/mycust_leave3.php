<?php

// ログイン用変数
$login = 'login.php';
$logout = 'logout.php';
$simulation = 'path_sim.php';


 // 非ログインの場合
 if (!isset($_SESSION['mail_address'])) {
  header("Location: /IT42-117/view/login.php");
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
  <link rel="stylesheet" href="../css/mypage.css">
  <title></title>

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
             <?php if (isset($_SESSION['mail_address'])) { echo "<a class='nav_link' href='simulation.html'>
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
        <div class="passfinish_auto">
         <!--ログインフォーム-->
          <form onsumbit="return checkPassword();" name="login" method="post" action="../Model/mycust_update.php">
            <div class="pass_finish">
              <p>退会手続きが完了しました。</p>
            </div>
            <div class="passfinish_btn">
              <a href="../index.php" class="arrow_btn backbtn">トップページへ戻る</a>
            </div>
          </form>
       </div>
     </main>

            <!-- ここをJSでエラー出力させられるようにして、頼みます。
            エラー概要：
            メールアドレス欄は単純に入力されてなかったらエラー
            パスワードは半角英数字をそれぞれ1文字以上含んだ8文字以上じゃないとエラー
            名前は入力しないとエラー
            って感じでお願いします。
          -->
    <!--フッター-->
    <footer class="footer">
      <small>(C) 2021 Definitely</small>
    </footer>
  </div>
</body>
</html>
