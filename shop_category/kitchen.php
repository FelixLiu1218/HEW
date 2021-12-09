<?php

     session_start();
     require_once('../Model/category.php');
     // // DBランキング形式で表示させる。基準はカウントで


     $login = 'login.php';
     $logout = 'logout.php';
     $simulation = 'path_sim.php';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
        <meta charset="UTF-8">
        <meta name="robots" content="none,noindex,nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>商品一覧</title>
        <!-- 階層が違うから -->
        <link rel="shortcut icon" href="../images/logo.ico">
        <link rel="stylesheet" href="../css/shop.css">
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/common.css">
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
                          echo '<a class = "nav_link" name="logout" href = "../view/'.$logout.'">ログアウト</a>';
                           }else{
                            echo '<a class = "nav_link" href = "../view/'.$login.'">ログイン</a>';
                       }
                    ?></li>
                     <?php
                           // echo htmlspecialchars($_SESSION['mail_address'],ENT_QUOTES);
                             if(isset($_SESSION['mail_address'])){
                                echo '<li><a class = "nav_link" name="logout" href = "../view/mypage.php">マイページ</a></li>';
                                 }
                    ?>
                     <li><?php if(isset($_SESSION['mail_address'])){ echo "<a class='nav_link' href='../view/cart.php'>カート</a>" ;}else{
                           echo "<a class='nav_link' href='../view/path_ca.php'>カート</a>" ;}?></li>
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
                     <a class="nav_link" href="interior.php">
                       <span class="nomal">INTERIOR</span>
                       <span class="hover">インテリア</span>
                     </a>
                   </li><li>
                   <?php if (isset($_SESSION['mail_address'])) { echo "<a class='nav_link' href='../view/madori.php'>
                       <span class='nomal'>SIMULATION</span>
                       <span class='hover'>シミュレーション</span>"; }
                       else{ echo "<a class='nav_link' href=../view/$simulation>
                         <span class='nomal'>SIMULATION</span>
                         <span class='hover'>シミュレーション</span>"; }?>
                   </li><li>
                     <a class="nav_link" href="../view/otoiawase.php">
                       <span class="nomal">CONTACT</span>
                       <span class="hover">お問い合わせ</span>
                     </a>
                   </li>
                 </ul>
               </nav>
             </div>
           </header>
        <!-- カテゴリ一覧 -->
        <main class="main">
        <div class="left">

            <h2 class="ctlist">カテゴリ一覧</h2>

            <!--カテゴリーテーブルを使えば、DB連携でぶん回せます。わかりにくいしCSS編集する時に大変なのでやりません -->
            <!-- ただそっちの方が表示効率はいいです。 -->
            <nav class="category">

            <!-- いびつな感じで検索項目ここにいったん入れたけど許してください -->
                <form id="form1" action="../view/search_view.php" method="post">
                <input id="sbox1" type="search" name="search" placeholder="キーワードを入力"><input id="sbtn1" type="submit" name="submit" value="">
                </form>


                <ul>
                    <li>
                        <a class="nav_furniture" href="interior.php">すべて</a>
                    </li>
                    <li>
                        <a class="nav_furniture" href="sofa.php">ソファー</a>
                    </li>
                    <li>
                        <a class="nav_furniture" href="chair.php">チェア</a>
                    </li>
                    <li>
                        <a class="nav_furniture" href="desk.php">テーブル</a>
                    </li>
                    <li>
                        <a class="nav_furniture" href="chest.php">収納</a>
                    </li>
                    <li>
                        <a class="nav_furniture" href="bed.php">ベッド</a>
                    </li>
                    <li id="check">
                        <a class="nav_furniture" href="kitchen.php">キッチン</a>
                    </li>
                    <li>
                        <a class="nav_furniture" href="other.php">その他</a>
                    </li>
                </ul>
              </nav>
            </div>

            <!-- 商品件数表示 -->
            <div class="right">
            <div class="product">
                <h2 class="product">キッチン</h2>
                <h3><?php echo $record6."件の商品があります。" ?></h3>
            </div>


            <!-- 商品展示エリアのここは、DBで読み込むから
                 下の各種フォームの<div>の要素は一つで済むようにする。

                 このフォームがバーって感じで商品分出力する感じにする。
                 ランキング要素を取り入れて
                -->

            <!-- 商品表示エリア -->
            <div class="shelf">
              <?php foreach($tables6 as $table){ ?>
                <div class="item">
                    <img src="../interior_img/all_img/<?php echo $table['product_img']; ?>" alt="ベッド_1" class="bet">
                    <h4><?php echo $table['product_name']; ?></h4>
                    <h5><?php echo "￥".number_format($table['price']); ?></h5>
                    <!-- cart_importに飛ばしてセッションに代入している -->
                    <form action="../control/cart_import.php" method="POST" class="item-form">
                        <input type="hidden" name="name" value="<?php echo $table['product_id'];?>">
                        <input type="hidden" value="1" name="count">
                        <button type="submit" class="btn">カートに入れる</button>
                    </form>
                  </div>
                  <?php } ?>
            </div>
          </div>
        </main>

        <footer class="footer">
            <small>(C) 2021 Definitely</small>
        </footer>
    </div>
</body>

</html>
