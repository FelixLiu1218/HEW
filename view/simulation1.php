<?php
session_start();
require_once('../Model/cart_import_conf2.php');

 $products = isset($_SESSION['products'])? $_SESSION['products']:[];

  // 非ログインの場合
  if (!isset($_SESSION['mail_address'])) {
    header("Location: /IT42-117/view/path_sim.php");
    exit;
  }


?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="robots" content="none,noindex,nofollow">
  <link rel="shortcut icon" href="../images/logo.ico">
  <title>シミュレーション</title>
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/common.css">
  <link rel="stylesheet" href="../css/simulation1.css">
  <style id='stylesheet' type='text/css'>
    .shape::before {
      content: "";
      display: block;
      padding-top: 100%;
    }
  </style>
  <script src="../js/jquery-2.1.4.min.js"></script>
  <script src="../js/func.js"></script>
  <script src="../js/ajax.js"></script>
  <script src="../js/jquery-ui.min.js"></script>
</head>

<body>
  <!-- コンテンツ -->
  <!-- ヘッダー -->
  <header class="header_top">
    <!-- ロゴ -->
    <h1 class="header_logo"><a href="../index.php"><img src="../images/logo.png" alt="ロゴ"></a></h1>
    <div class="simulation_flex">
      <!-- ログイン・お気に入り・カート -->
      <!-- <nav class="simulation_nav">
        <ul>
          <li><a class="nav_link" href="#">ログイン</a></li>
          <li><a class="nav_link" href="#">お気に入り</a></li>
          <li><a class="nav_link" href="cart.php">カート</a></li>
        </ul>
      </nav> -->
      <div>
        <a href="./cart.php" class="shopback buy">配置した家具を購入する</a>
      </div>
      <!-- モーダルウィンドウ -->
      <div id="demoslide01" class="main_visual bg_aaa">
        <a data-target="modal1" class="modal_open popBtn">使い方</a>
      </div>
    </div>
  </header>

  <!-- モーダル1 -->
  <div id="modal1" class="modal_box">
    <div class="modal_text">
      <h2>1.家具を設置する</h2>
      <div class="modal_text_flex">
        <div class="flex_img">
          <img src="../images/tab.jpg" alt="タブ">
        </div>
        <div class="flex_text">
          <h3>種類を選択</h3>
          <p>上部のタブをクリックすると、クリックした種類の家具が表示されます。</p>
          <h3>家具の設置</h3>
          <p>設置したい家具の追加ボタンをクリックすると、画面左側の間取りに選択した家具が設置されます。</p>
          <h3>家具の削除</h3>
          <p>家具を削除したい場合は、削除したい家具の削除ボタンを押すことで削除することが出来ます。</p>
        </div>
      </div>
    </div>


    <div class="link_area">
      <p class="modal_link next"><a data-target="modal2" class="modal_switch"><span>次へ</span></a></p>
    </div>
    <p><a class="modal_close"><i class="zmdi zmdi-close"></i></a></p>
    <!-- <a class="modal_close"><span class="close_rage"></span><p class="zmdi zmdi-close"></p></a> -->
  </div>

  <!-- モーダル2 -->
  <div id="modal2" class="modal_box">
    <div class="modal_text">
      <h2>2.家具を配置する</h2>
      <div class="modal_text_flex">
        <div class="flex_img2">
          <img src="../images/description.jpg" alt="間取りの説明">
        </div>
        <div class="flex_text2">
          <h3>家具の移動</h3>
          <p>家具を選択し、ドラッグすると移動させることができます。</p>
          <p class="annotation">※家具同士を重ねて設置することはできません。</p>
          <h3>家具の回転</h3>
          <p>家具の上で左クリックをすると家具の向きを90度右に回転させることができます。</p>
        </div>
      </div>
    </div>
    <div class="link_area">
      <ul>
        <li class="modal_link back"><a data-target="modal1" class="modal_switch"><span>前へ</span></a></li>
        <li class="modal_link next"><a data-target="modal3" class="modal_switch"><span>次へ</span></a></li>
        <!-- <li class="modal_link next"><a data-target="modal3" class="modal_switch"><span>次へ</span></a></li> -->
      </ul>
    </div>

    <p><a class="modal_close"><i class="zmdi zmdi-close"></i></a></p>
  </div>

  <!-- モーダル3 -->
  <div id="modal3" class="modal_box">
    <div class="modal_text">
      <h2>3.家具を購入する</h2>
      <div class="flex_img3">
        <img src="../images/buy.jpg" alt="家具を購入">
      </div>
      <div class="flex_text3">
        <p>シミュレーションで配置した家具は全て自動でカートに入ります。<br>
        画面右上の「配置した家具を購入する」ボタンを押すとカートの画面に移動するので、そこから購入手続きを行うことができます。</p>
      </div>
    </div>
    <div class="link_area">
      <ul>
        <li class="modal_link back"><a data-target="modal2" class="modal_switch"><span>前へ</span></a></li>
        <!-- <li class="modal_link next"><a data-target="modal3" class="modal_switch"><span>次へ</span></a></li> -->
      </ul>
    </div>

    <p><a class="modal_close"><i class="zmdi zmdi-close"></i></a></p>
  </div>

  <div class="container">
    <!--box1→フローリング-->
    <!---box1状ではreturn falseで値を返している為右クリックしても表示されません-->
    <div id="box1" class="fro shape" width="400" height="400">

      <img src="../images/bed2on.png" id="modanbed1" class="furniture" data-id='modanbed1' width="18%" />
      <img src="../images/bed1on.png" id="orangebed1" class='furniture' width="20%" />
      <img src="../images/bed3on.png" id="nidanbed1" class='furniture' width="16.5%"/>
      <img src="../images/bed4on.png" id="classicbed1" class='furniture'width="12%" />
      <img src="../images/bed5on.png" id="melhenbed1" class='furniture' width="13%" />
      <img src="../images/bed6on.png" id="chicbed1" class='furniture' width="17%"/>
      <!---イス-->

      <img src="../images/isu_200_4on.png" id="isu1" class='furniture' width="10%"/>
      <img src="../images/isu_200_5on.png" id="workisu1" class='furniture' width="10%"/>
      <img src="../images/isu_200_3on.png" id="woodisu1" class='furniture' width="10%"/>

      <!--テーブル-->
      <img src="../images/desk1on.png" id="table1" class='furniture' width="28%"/>
      <img src="../images/desk2on.png" id="longtable1" class='furniture' width="24%"/>
      <img src="../images/desk3on.png" id="shottable1" class='furniture' width="22%"/>
      <img src="../images/desk4_on.png" id="blantable1" class='furniture' width="18%"/>
      <img src="../images/desk5_on.png" id="whitetable1" class='furniture' width="24%"/>
      <img src="../images/desk6_on.png" id="1table1" class='furniture' width="24%"/>


      <!----収納-->
      <img src="../images/kitchen2on.png" id="kitichen1" class='furniture' width="40%"/>
      <img src="../images/kitchen1_on.png" id="shed1" class='furniture' width="40%"/>
      <img src="../images/kitchen3_on.png" id="chest1" class='furniture' width="40%"/>
      <img src="../images/chest1_on.png" id="hondana1" class='furniture' width="37.5%"/>
      <img src="../images/chest4_on.png" id="sirotana1" class='furniture' width="33.5%"/>
      <img src="../images/test3_on.png" id="siromini1" class='furniture' width="25.5%"/>
      <img src="../images/tans2_on.png" id="1tana1" class='furniture' width="25.5%"/>
      <img src="../images/tans1_on.png" id="2tana1" class='furniture' width="25.5%"/>
      <img src="../images/test4_on.png" id="3tana1" class='furniture' width="25.5%"/>

      <!---ソファ-->
      <img src="../images/sofa4on.png" id="graysofa1" class='furniture' width="23%"/>
      <img src="../images/sofa5on.png" id="whitesofa1" class='furniture' width="26%"/>
      <img src="../images/sofa6on.png" id="orangesofa1" class='furniture' width="23%"/>
      <img src="../images/sofa1on.png" id="sofabed1" class='furniture' width="23%"/>
      <img src="../images/sofa2on.png" id="cornersofa1" class='furniture' width="28%"/>
      <img src="../images/sofa3on.png" id="sofa1" class='furniture' width="23%"/>
      <img src="../images/sofa8_on.png"id="midorisofa1" class='furniture' width="24%"/>
      <img src="../images/sofa7_on.png"id="kurosofa1" class='furniture' width="23%"/>
      <img src="../images/sofa9_on.png"id="yokosofa1" class='furniture' width="28.6%"/>



      <!--その他-->
      <img src="../images/gomi1on.png" id="gomi1" class='furniture' width="10%"/>
      <img src="../images/gomi2on.png" id="trash1" class='furniture' width="19%"/>
      <img src="../images/gomi3on.png" id="dust1" class='furniture' width="10%"/>
      <img src="../images/garden1_on.png" id="1tree1" class='furniture' width="10%"/>
      <img src="../images/garden2_on.png" id="2tree1" class='furniture' width="10%"/>
      <img src="../images/garden4_on.png" id="3tree1" class='furniture' width="10.2%"/>
      <img src="../images/garden3_on.png" id="4tree1" class='furniture' width="16%"/>
    </div>


    <!--商品一覧ー-->
    <div class="tabs">
      <input id="tab_bet" type="radio" name="tab_item" checked>
      <label class="tab_item" for="tab_bet">ベット</label>
      <input id="tab_chair" type="radio" name="tab_item">
      <label class="tab_item" for="tab_chair">チェア</label>
      <input id="tab_table" type="radio" name="tab_item">
      <label class="tab_item" for="tab_table">テーブル</label>
      <input id="tab_storage" type="radio" name="tab_item">
      <label class="tab_item" for="tab_storage">収納</label>
      <input id="tab_sofa" type="radio" name="tab_item">
      <label class="tab_item" for="tab_sofa">ソファ</label>
      <input id="tab_sonota" type="radio" name="tab_item">
      <label class="tab_item" for="tab_sonota">その他</label>
      <input id="tab_change" type="radio" name="tab_item">
      <label class="tab_item" for="tab_change">床材</label>
      <input id="tab_search" type="radio" name="tab_item">
      <label class="tab_item" for="tab_search">間取り</label>
      <!-- タブの中身 -->
      <!-- ベット -->
      <div class="tab_content" id="tab_bet_content">
        <div class="tab_content_description">
          <div class="hscroll_wrapper">
            <span class="arrow left"></span>
            <div class="hscroll_position">
              <a>
                <div class="menu">
                  <img src="../images/burlington01.jpg" alt="家具１" width="150px" height="150px">
                  <p class="interior_name">スタンダード<br>ベット</p><p class="interior_price">¥50,000</p>
                  <button class="add" id="add_bed1" value="<?php echo $product_id1; ?>">追加</button>
                  <button class="delete" id="delete_bed1" value="<?php foreach($products as $name1 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img class="menu-image" src="../images/1080_1.jpg" alt="家具１" width="150px" height="150px">
                  <p class="interior_name">カジュアルベッド</p><p class="interior_price">¥30,000</p>
                  <button class="add" id="add_bed2" value="<?php echo $product_id2; ?>">追加</button>
                  <button class="delete" id="delete_bed2" value="<?php foreach($products as $name2 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img class="menu-image" src="../images/1088122_rp.jpg" alt="家具１" width="150px" height="150px">
                  <p class="interior_name">二段ベッド</p><p class="interior_price">¥100,000</p>
                  <button class="add" id="add_bed3" value="<?php echo $product_id3; ?>">追加</button>
                  <button class="delete" id="delete_bed3" value="<?php foreach($products as $name3 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img class="menu-image" src="../images/03img_goolis.jpg" alt="木製ベッド"  width="150px" height="150px">
                  <p class="interior_name">クラシックベッド</p><p class="interior_price">¥45,000</p>
                  <button class="add" id="add_bed4" value="<?php echo $product_id4; ?>">追加</button>
                  <button class="delete" id="delete_bed4" value="<?php foreach($products as $name4 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img class="menu-image" src="../images/bbed-esprit03.jpg" alt="メルヘンなベッド"  width="150px" height="150px">
                  <p class="interior_name">メルヘンベット</p><p class="interior_price">¥28,000</p>
                  <button class="add" id="add_bed5" value="<?php echo $product_id5; ?>">追加</button>
                  <button class="delete" id="delete_bed5" value="<?php foreach($products as $name5 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img class="menu-image" src="../images/NU73.jpg" alt="ベッドフレーム"  width="150px" height="150px">
                  <p class="interior_name">モダンベット</p><p class="interior_price">¥32,000</p>
                  <button class="add" id="add_bed6" value="<?php echo $product_id6; ?>">追加</button>
                  <button class="delete" id="delete_bed6" value="<?php foreach($products as $name6 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
            </div>
            <span class="arrow right"></span>
          </div>
        </div>
      </div>
      <!-- チェア -->
      <div class="tab_content" id="tab_chair_content">
        <div class="tab_content_description">
          <div class="hscroll_wrapper">
            <span class="arrow left"></span>
            <div class="hscroll_position">
              <a>
                <div class="menu">
                  <img src="../images/isu.png" alt="家具１">
                  <p class="interior_name">木製イスB</p><p class="interior_price">¥10,000</p>
                  <!--5 家具を追加する際ボタンを追加する際　onclick="cloneElement('家具名',追加した順の番号)"をつける-->
                  <button class="add" id="add_isu1" value="<?php echo $product_id7; ?>">追加</button>
                  <!--6 家具を削除する際　onclick="remove('家具名')"をつける　※(追加と削除の家具名は一緒にする)　※番号はいらない-->
                  <button class="delete" id="delete_isu1" value="<?php foreach($products as $name7 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img class="menu-image" src="../images/OIP-2.png" alt="家具１">
                  <p class="interior_name">リラックス<br>チェアB</p><p class="interior_price">¥8,000</p>
                  <button class="add" id="add_isu2" value="<?php echo $product_id8; ?>">追加</button>
                  <button class="delete" id="delete_isu2" value="<?php foreach($products as $name8 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img class="menu-image" src="../images/noir300-L.jpg" alt="家具１">
                  <p class="interior_name">木製イスC</p><p class="interior_price">¥14,000</p>
                  <button class="add" id="add_isu3" value="<?php echo $product_id9; ?>">追加</button>
                  <button class="delete" id="delete_isu3" value="<?php foreach($products as $name9 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
            </div>
            <span class="arrow right"></span>
          </div>
        </div>
      </div>
      <!-- テーブル -->
      <div class="tab_content" id="tab_table_content">
        <div class="tab_content_description">
          <div class="hscroll_wrapper">
            <span class="arrow left"></span>
            <div class="hscroll_position">
              <a>
                <div class="menu">
                  <img src="../images/1b71e2b924b8a56374648cb8efdc1958.jpg" alt="家具１">
                  <p class="interior_name">木製机A</p><p class="interior_price">¥18,000</p>
                  <!--1 家具を追加する際ボタンを追加する際　onclick="cloneElement('家具名',追加した順の番号)"をつける-->
                  <button class="add" id="add_table" value="<?php echo $product_id10; ?>">追加</button>
                  <!--2 家具を削除する際　onclick="remove('家具名')"をつける　※(追加と削除の家具名は一緒にする)　※番号はいらない-->
                  <button class="delete" id="delete_table" value="<?php foreach($products as $name10 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img class="menu-image" src="../images/table.jpg" alt="家具１">
                  <p class="interior_name">木製机B</p><p class="interior_price">¥20,000</p>
                  <button class="add" id="add_longtable" value="<?php echo $product_id11; ?>">追加</button>
                  <button class="delete" id="delete_longtable" value="<?php foreach($products as $name11 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img class="menu-image" src="../images/table2.jpg" alt="家具１">
                  <p class="interior_name">木製机C</p><p class="interior_price">¥35,000</p>
                  <button class="add" id="add_shottable" value="<?php echo $product_id12; ?>">追加</button>
                  <button class="delete" id="delete_shottable" value="<?php foreach($products as $name12 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img class="menu-image" src="../images/desk4.jpg" alt="家具１">
                  <p class="interior_name">ガラス机</p><p class="interior_price">¥45,000</p>
                  <button class="add" id="add_blantable" value="<?php echo $product_id13; ?>">追加</button>
                  <button class="delete" id="delete_blantable" value="<?php foreach($products as $name13 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img class="menu-image" src="../images/desk5.jpg" alt="家具１">
                  <p class="interior_name">木製机D</p><p class="interior_price">¥15,000</p>
                  <button class="add" id="add_whitetable" value="<?php echo $product_id14; ?>">追加</button>
                  <button class="delete" id="delete_whitetable" value="<?php foreach($products as $name14 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img class="menu-image" src="../images/desk6.jpg" alt="家具１">
                  <p class="interior_name">木製机F</p><p class="interior_price">¥25,000</p>
                  <button class="add" id="add_1table" value="<?php echo $product_id15; ?>">追加</button>
                  <button class="delete" id="delete_1table" value="<?php foreach($products as $name15 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
            </div>
            <span class="arrow right"></span>
          </div>
        </div>
      </div>
      <!-- 収納 -->
      <div class="tab_content" id="tab_storage_content">
        <div class="tab_content_description">
          <div class="hscroll_wrapper">
            <span class="arrow left"></span>
            <div class="hscroll_position">
              <a>
                <div class="menu">
                  <img src="../images/kitc1.jpg" alt="家具１">
                  <p class="interior_name">キッチンA</p><p class="interior_price">¥41,000</p>
                  <button class="add" id="add_shed" value="<?php echo $product_id17; ?>">追加</button>
                  <button class="delete" id="delete_shed" value="<?php foreach($products as $name17 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img src="../images/sc_400x400.jpg" alt="家具１">
                  <p class="interior_name">キッチンB</p><p class="interior_price">¥32,000</p>
                  <button class="add" id="add_kitichen" value="<?php echo $product_id16; ?>">追加</button>
                  <button class="delete" id="delete_kitichen" value="<?php foreach($products as $name16 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img src="../images/kitc3.jpg" alt="家具１">
                  <p class="interior_name">キッチンC</p><p class="interior_price">¥60,000</p>
                  <button class="add" id="add_chest" value="<?php echo $product_id18; ?>">追加</button>
                  <button class="delete" id="delete_chest" value="<?php foreach($products as $name18 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img src="../images/chest1.jpg" alt="家具１">
                  <p class="interior_name">本棚A</p><p class="interior_price">¥70,000</p>
                  <button class="add" id="add_hondana" value="<?php echo $product_id19; ?>">追加</button>
                  <button class="delete" id="delete_hondana" value="<?php foreach($products as $name19 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img src="../images/chest4.jpg" alt="家具１">
                  <p class="interior_name">本棚B</p><p class="interior_price">¥19,000</p>
                  <button class="add" id="add_sirotana" value="<?php echo $product_id20; ?>">追加</button>
                  <button class="delete" id="delete_sirotana" value="<?php foreach($products as $name20 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img src="../images/chest2.jpg" alt="家具１">
                  <p class="interior_name">タンスA</p><p class="interior_price">¥30,000</p>
                  <button class="add" id="add_3tana" value="<?php echo $product_id24; ?>">追加</button>
                  <button class="delete" id="delete_3tana" value="<?php foreach($products as $name24 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img src="../images/chest3.jpg" alt="家具１">
                  <p class="interior_name">タンスB</p><p class="interior_price">¥25,000</p>
                  <button class="add" id="add_1tana" value="<?php echo $product_id22; ?>">追加</button>
                  <button class="delete" id="delete_1tana" value="<?php foreach($products as $name22 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img src="../images/chest5.jpg" alt="家具１">
                  <p class="interior_name">タンスC</p><p class="interior_price">¥13,000</p>
                  <button class="add" id="add_siromini" value="<?php echo $product_id21; ?>">追加</button>
                  <button class="delete" id="delete_siromini" value="<?php foreach($products as $name21 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img src="../images/chest6.jpg" alt="家具１">
                  <p class="interior_name">タンスD</p><p class="interior_price">¥21,000</p>
                  <button class="add" id="add_2tana" value="<?php echo $product_id23; ?>">追加</button>
                  <button class="delete" id="delete_2tana" value="<?php foreach($products as $name23 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>

            </div>
            <span class="arrow right"></span>
          </div>
        </div>
      </div>
      <!-- ソファ -->
      <div class="tab_content" id="tab_sofa_content">
        <div class="tab_content_description">
          <div class="hscroll_wrapper">
            <span class="arrow left"></span>
            <div class="hscroll_position">
              <a>
                <div class="menu">
                  <img src="../images/01.png" alt="ソファベッド">
                  <p class="interior_name">ソファーA</p><p class="interior_price">¥60,000</p>
                  <button class="add"id="add_sofa4" value="<?php echo $product_id28; ?>">追加</button>
                  <button class="delete" id="delete_sofa4" value="<?php foreach($products as $name28 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img src="../images/sofa2.jpg" alt="ローソファ">
                  <p class="interior_name">ソファーB</p><p class="interior_price">¥45,000</p>
                  <button class="add" id="add_sofa2" value="<?php echo $product_id26; ?>">追加</button>
                  <button class="delete" id="delete_sofa2" value="<?php foreach($products as $name26 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img src="../images/-960x641.jpg" alt="コーナーソファ">
                  <p class="interior_name">ソファ－C</p><p class="interior_price">¥76,000</p>
                  <button class="add"id="add_sofa5" value="<?php echo $product_id29; ?>">追加</button>
                  <button class="delete" id="delete_sofa5" value="<?php foreach($products as $name29 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img src="../images/sofa5.jpg" alt="ソファ">
                  <p class="interior_name">ソファーE</p><p class="interior_price">¥21,000</p>
                  <button class="add" id="add_sofa7" value="<?php echo $product_id31; ?>">追加</button>
                  <button class="delete" id="delete_sofa7" value="<?php foreach($products as $name31 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img src="../images/sofa.jpg" alt="2人掛けソファ">
                  <p class="interior_name">ソファーF</p><p class="interior_price">¥21,000</p>
                  <button class="add" id="add_sofa1" value="<?php echo $product_id25; ?>">追加</button>
                  <button class="delete" id="delete_sofa1" value="<?php foreach($products as $name25 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img src="../images/sofa7.jpg" alt="ソファ">
                  <p class="interior_name">ソファーG</p><p class="interior_price">¥54,000</p>
                  <button class="add" id="add_sofa8" value="<?php echo $product_id32; ?>">追加</button>
                  <button class="delete" id="delete_sofa8" value="<?php foreach($products as $name32 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img src="../images/A540-009.jpg" alt="ソファ">
                  <p class="interior_name">ソファーH</p><p class="interior_price">¥93,000</p>
                  <button class="add" id="add_sofa6" value="<?php echo $product_id30; ?>">追加</button>
                  <button class="delete" id="delete_sofa6" value="<?php foreach($products as $name30 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img src="../images/sofa9.jpg" alt="ソファ">
                  <p class="interior_name">ソファーI</p><p class="interior_price">¥82,000</p>
                  <button class="add" id="add_sofa9" value="<?php echo $product_id33; ?>">追加</button>
                  <button class="delete" id="delete_sofa9" value="<?php foreach($products as $name33 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img src="../images/IMG_E8914-960x720.jpg" alt="オレンジソファ">
                  <p class="interior_name">ソファ－J</p><p class="interior_price">¥44,000</p>
                  <button class="add" id="add_sofa3" value="<?php echo $product_id27; ?>">追加</button>
                  <button class="delete" id="delete_sofa3" value="<?php foreach($products as $name27 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>


            </div>
            <span class="arrow right"></span>
          </div>
        </div>
      </div>
      <!-- その他 -->
      <div class="tab_content" id="tab_sonota_content">
        <div class="tab_content_description">
          <div class="hscroll_wrapper">
            <span class="arrow left"></span>
            <div class="hscroll_position">
              <a>
                <div class="menu">
                  <img src="../images/brea-interior_1450.jpg" alt="ダストボックス2個セット">
                  <p class="interior_name">ゴミ箱A</p><p class="interior_price">¥1,200</p>
                  <button class="add" id="add_trash" value="<?php echo $product_id35; ?>">追加</button>
                  <button class="delete" id="delete_trash" value="<?php foreach($products as $name35 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img src="../images/oshare-dustbox15.jpg" alt="ダストボックス　ホワイト">
                  <p class="interior_name">ゴミ箱B</p><p class="interior_price">¥3100</p>
                  <button class="add" id="add_dust" value="<?php echo $product_id36; ?>">追加</button>
                  <button class="delete" id="delete_dust" value="<?php foreach($products as $name36 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img src="../images/gomi1.jpg" alt="ダストボックス">
                  <p class="interior_name">ゴミ箱C</p><p class="interior_price">¥2,300</p>
                  <button class="add" id="add_gomi" value="<?php echo $product_id34; ?>">追加</button>
                  <button class="delete" id="delete_gomi" value="<?php foreach($products as $name34 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img src="../images/other4.jpg" alt="ダストボックス　ホワイト">
                  <p class="interior_name">植木鉢A</p><p class="interior_price">¥1,300</p>
                  <button class="add" id="add_2tree" value="<?php echo $product_id38; ?>">追加</button>
                  <button class="delete" id="delete_2tree" value="<?php foreach($products as $name38 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img src="../images/other5.jpg" alt="ダストボックス　ホワイト">
                  <p class="interior_name">植木鉢B</p><p class="interior_price">¥2,500</p>
                  <button class="add" id="add_1tree" value="<?php echo $product_id37; ?>">追加</button>
                  <button class="delete" id="delete_1tree" value="<?php foreach($products as $name37 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img src="../images/other8.jpg" alt="ダストボックス　ホワイト">
                  <p class="interior_name">植木鉢E</p><p class="interior_price">¥1,700</p>
                  <button class="add" id="add_3tree" value="<?php echo $product_id39; ?>">追加</button>
                  <button class="delete" id="delete_3tree" value="<?php foreach($products as $name39 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
              <a>
                <div class="menu">
                  <img src="../images/other9.jpg" alt="ダストボックス　ホワイト">
                  <p class="interior_name">植木鉢F</p><p class="interior_price">¥750</p>
                  <button class="add" id="add_4tree" value="<?php echo $product_id40; ?>">追加</button>
                  <button class="delete" id="delete_4tree" value="<?php foreach($products as $name40 => $product){echo $product['count'];} ?>"><span class="cross"></span>削除</button>
                </div>
              </a>
            </div>
            <span class="arrow right"></span>
          </div>
        </div>
      </div>
      <!-- フローリング -->
      <div class="tab_content" id="tab_change_content">
        <div class="tab_content_description">
          <div class="backchange">
            <div class="bcflex">
              <img src="../images/4.jpg" onclick="box1.style.backgroundImage='url(../images/4.jpg)';">
              <p class="interior_name">オーク材</p>
            </div>
            <div class="bcflex">
              <img src="../images/walnut.jpg" onclick="box1.style.backgroundImage='url(../images/walnut.jpg)';">
              <p class="interior_name">ウォルナット材</p>
            </div>
            <div class="bcflex">
              <img src="../images/white.jpg" onclick="box1.style.backgroundImage='url(../images/white.jpg)';">
              <p class="interior_name">ヒノキ材</p>
            </div>
            <div class="bcflex">
              <img src="../images/teak.jpg" onclick="box1.style.backgroundImage='url(../images/teak.jpg)';">
              <p class="interior_name">チーク材</p>
            </div>
          </div>
        </div>
      </div>
      <!-- 検索 -->
      <div class="tab_content" id="tab_search_content">
        <div class="tab_content_description">
          <div class="bczwidth">
            <h3>正方形</h3>
            <div class="bczflex">
              <div class="bcsize1" id="frosmall">
                <img src="../images/madori.svg" width="100%">
                <p class="bc_name">S</p>
              </div>
              <div class="bcsize2" id="froordinary">
                <img src="../images/madori.svg" width="100%">
                <p class="bc_name">M</p>
              </div>
              <div class="bcsize3" id="frobig">
                <img src="../images/madori.svg" width="100%">
                <p class="bc_name">L</p>
              </div>
            </div>
            <h3>長方形</h3>
            <div class="bczflex">
              <div class="bcsize1" id="resmall">
                <img src="../images/rectangular.svg" width="100%">
                <p class="bc_name">S<p>
              </div>
              <div class="bcsize2" id="reordinary">
                <img src="../images/rectangular.svg" width="100%">
                <p class="bc_name">M</p>
              </div>
              <div class="bcsize3" id="rebig">
                <img src="../images/rectangular.svg" width="100%">
                <p class="bc_name">L</p>
              </div>
            </div>
          </div>

          <!-- <a href="#" id="frosmall">8畳</a>
          <a href="#" id="froordinary">10畳</a>
          <a href="#" id="frobig">12畳</a>
          <a href="#" id="frowi">長方形</a> -->
        </div>
      </div>
    </div>

    <!--ボタン機能は共に消さないで-->

    <!--商品一覧-->
  </div>

    <!--------------------------------------------------------------->
  <!--座標パラメータをhiddenで見えなくなせているからここを消さないで-->
  <!-- <input type="text" id="txtX" class="x"/>
  <input type="text" id="txtY" class="y"/> -->
  <script>
  document.querySelectorAll('.left').forEach(elm => {
  	elm.onclick = function () {
  		let div = this.parentNode.querySelector('.hscroll_wrapper div');
  		div.scrollLeft -= (div.clientWidth);
  	};
  });
  document.querySelectorAll('.right').forEach(elm => {
  	elm.onclick = function () {
  		let div = this.parentNode.querySelector('.hscroll_wrapper div');
  		div.scrollLeft += (div.clientWidth);
  	};
  });

  </script>
     <!--jsの関係で上にscriptタグを上に持っていくとと読み込みができなくなるからここに固定しておいて-->
  <script type="text/javascript" src="../js/hew_bulk.js"></script>
</body>

</html>
