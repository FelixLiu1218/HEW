<?php 

session_start();

$c_delete = 1;
require_once('../Model/cart_import_conf2.php');

// ベットシリーズ
// ベット１個め
if(isset($_POST['add1'])){
    $count1 +=1;
    if(isset($_SESSION['products'])){
    $products = $_SESSION['products'];
    foreach($products as $key => $product){
    if($key == $name1){$count1 = (int)$count1 + (int)$product['count'];}}}
    if($name1 !=''&& $count1 !=''&& $price1 !=''&& $img1 !=''&& $product_id1 !=''){
    $_SESSION['products'][$name1]=[
        'count' => $count1,
        'price' => $price1,
        'img' => $img1,
        'product_id' => $product_id1];}
}else if(isset($_POST['delete1'])){
    // コメントアウトしてるところは追加した順にセッションのカウント数を減算しようとした戦いの後です。無視して構いません。
    // $products = $_SESSION['products'];
    // if($name1 !=''&& $del_name !=''&& $price1 !=''&& $img1 !=''&& $product_id1 !=''){
    //     $_SESSION['products'][$name1]=[
    //         'count' => $del_name,
    //         'price' => $price1,
    //         'img' => $img1,
    //         'product_id' => $product_id1];
    // }
    // $count1= $products[$name1]['count']-1;
    // if( array_key_exists( $name1, $products ) ){
        // $_SESSION['products']['count']--;
    //   }
    // $_SESSION['products'][$del_name]=[
    //     'count' => $count1,
    //     'price' => $price1,
    //     'img' => $img1,
    //     'product_id' => $product_id1];
    // $products = $_SESSION['products'][$del_name];
    // if($count1==1){
    //     unset($_SESSION['products'][$name1]);
    // }
    // セッションに上書き
    // $_SESSION['products'] = $products;
    $products = isset($_SESSION['products'])? $_SESSION['products']:[];
    unset($_SESSION['products'][$name1]);
}
// 上は展開したときの構成。
// ここから下は全部見づらく詰め詰めでコーディングします。
// ここからはコメントアウト抜きで


// ベッド２個目
else if(isset($_POST['add2'])){
require_once('../Model/cart_import_conf2.php');
$count2 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name2){$count2 = (int)$count2 + (int)$product['count'];}}}
if($name2 !=''&& $count2 !=''&& $price2 !=''&& $img2 !=''&& $product_id2 !=''){
$_SESSION['products'][$name2]=[
'count' => $count2,
'price' => $price2,
'img' => $img2,
'product_id' => $product_id2];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete2'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name2]);}
// ベッド３個目
else if(isset($_POST['add3'])){
require_once('../Model/cart_import_conf2.php');
$count3 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name3){$count3 = (int)$count3 + (int)$product['count'];}}}
if($name3 !=''&& $count3 !=''&& $price3 !=''&& $img3 !=''&& $product_id3 !=''){
$_SESSION['products'][$name3]=[
'count' => $count3,
'price' => $price3,
'img' => $img3,
'product_id' => $product_id3];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete3'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name3]);}
// ベッド４個目
else if(isset($_POST['add4'])){
require_once('../Model/cart_import_conf2.php');
$count4 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name4){$count4 = (int)$count4 + (int)$product['count'];}}}
if($name4 !=''&& $count4 !=''&& $price4 !=''&& $img4 !=''&& $product_id4 !=''){
$_SESSION['products'][$name4]=[
'count' => $count4,
'price' => $price4,
'img' => $img4,
'product_id' => $product_id4];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete4'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name4]);}
// ベッド５個目
else if(isset($_POST['add5'])){
require_once('../Model/cart_import_conf2.php');
$count5 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name5){$count5 = (int)$count5 + (int)$product['count'];}}}
if($name5 !=''&& $count5 !=''&& $price5 !=''&& $img5 !=''&& $product_id5 !=''){
$_SESSION['products'][$name5]=[
'count' => $count5,
'price' => $price5,
'img' => $img5,
'product_id' => $product_id5];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete5'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name5]);}
// ベッド６個目
else if(isset($_POST['add6'])){
require_once('../Model/cart_import_conf2.php');
$count6 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name6){$count6 = (int)$count6 + (int)$product['count'];}}}
if($name6 !=''&& $count6 !=''&& $price6 !=''&& $img6 !=''&& $product_id6 !=''){
$_SESSION['products'][$name6]=[
'count' => $count6,
'price' => $price6,
'img' => $img6,
'product_id' => $product_id6];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete6'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name6]);}
// 椅子シリーズ
// 椅子１個目
else if(isset($_POST['add7'])){
require_once('../Model/cart_import_conf2.php');
$count7 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name7){$count7 = (int)$count7 + (int)$product['count'];}}}
if($name7 !=''&& $count7 !=''&& $price7 !=''&& $img7 !=''&& $product_id7 !=''){
$_SESSION['products'][$name7]=[
'count' => $count7,
'price' => $price7,
'img' => $img7,
'product_id' => $product_id7];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete7'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name7]);}
// 椅子２個目
else if(isset($_POST['add8'])){
require_once('../Model/cart_import_conf2.php');
$count8 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name8){$count8 = (int)$count8 + (int)$product['count'];}}}
if($name8 !=''&& $count8 !=''&& $price8 !=''&& $img8 !=''&& $product_id8 !=''){
$_SESSION['products'][$name8]=[
'count' => $count8,
'price' => $price8,
'img' => $img8,
'product_id' => $product_id8];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete8'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name8]);}
// 椅子３個目
else if(isset($_POST['add9'])){
require_once('../Model/cart_import_conf2.php');
$count9 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name9){$count9 = (int)$count9 + (int)$product['count'];}}}
if($name9 !=''&& $count9 !=''&& $price9 !=''&& $img9 !=''&& $product_id9 !=''){
$_SESSION['products'][$name9]=[
'count' => $count9,
'price' => $price9,
'img' => $img9,
'product_id' => $product_id9];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete9'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name9]);}
// テーブルシリーズ
// テーブル１個目
else if(isset($_POST['add10'])){
require_once('../Model/cart_import_conf2.php');
$count10 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name10){$count10 = (int)$count10 + (int)$product['count'];}}}
if($name10 !=''&& $count10 !=''&& $price10 !=''&& $img10 !=''&& $product_id10 !=''){
$_SESSION['products'][$name10]=[
'count' => $count10,
'price' => $price10,
'img' => $img10,
'product_id' => $product_id10];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete10'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name10]);}
// テーブル２個目
else if(isset($_POST['add11'])){
require_once('../Model/cart_import_conf2.php');
$count11 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name11){$count11 = (int)$count11 + (int)$product['count'];}}}
if($name11 !=''&& $count11 !=''&& $price11 !=''&& $img11 !=''&& $product_id11 !=''){
$_SESSION['products'][$name11]=[
'count' => $count11,
'price' => $price11,
'img' => $img11,
'product_id' => $product_id11];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete11'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name11]);}
// テーブル３個目
else if(isset($_POST['add12'])){
require_once('../Model/cart_import_conf2.php');
$count12 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name12){$count12 = (int)$count12 + (int)$product['count'];}}}
if($name12 !=''&& $count12 !=''&& $price12 !=''&& $img12 !=''&& $product_id12 !=''){
$_SESSION['products'][$name12]=[
'count' => $count12,
'price' => $price12,
'img' => $img12,
'product_id' => $product_id12];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete12'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name12]);}
// テーブル４個目
else if(isset($_POST['add13'])){
require_once('../Model/cart_import_conf2.php');
$count13 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name13){$count13 = (int)$count13 + (int)$product['count'];}}}
if($name13 !=''&& $count13 !=''&& $price13 !=''&& $img13 !=''&& $product_id13 !=''){
$_SESSION['products'][$name13]=[
'count' => $count13,
'price' => $price13,
'img' => $img13,
'product_id' => $product_id13];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete13'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name13]);}
// テーブル５個目
else if(isset($_POST['add14'])){
require_once('../Model/cart_import_conf2.php');
$count14 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name14){$count14 = (int)$count14 + (int)$product['count'];}}}
if($name14 !=''&& $count14 !=''&& $price14 !=''&& $img14 !=''&& $product_id14 !=''){
$_SESSION['products'][$name14]=[
'count' => $count14,
'price' => $price14,
'img' => $img14,
'product_id' => $product_id14];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete14'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name14]);}
// テーブル６個目
else if(isset($_POST['add15'])){
require_once('../Model/cart_import_conf2.php');
$count15 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name15){$count15 = (int)$count15 + (int)$product['count'];}}}
if($name15 !=''&& $count15 !=''&& $price15 !=''&& $img15 !=''&& $product_id15 !=''){
$_SESSION['products'][$name15]=[
'count' => $count15,
'price' => $price15,
'img' => $img15,
'product_id' => $product_id15];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete15'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name15]);}
// 収納シリーズ
// 収納１個目
else if(isset($_POST['add16'])){
require_once('../Model/cart_import_conf2.php');
$count16 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name16){$count16 = (int)$count16 + (int)$product['count'];}}}
if($name16 !=''&& $count16 !=''&& $price16 !=''&& $img16 !=''&& $product_id16 !=''){
$_SESSION['products'][$name16]=[
'count' => $count16,
'price' => $price16,
'img' => $img16,
'product_id' => $product_id16];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete16'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name16]);}
// 収納２個目
else if(isset($_POST['add17'])){
require_once('../Model/cart_import_conf2.php');
$count17 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name17){$count17 = (int)$count17 + (int)$product['count'];}}}
if($name17 !=''&& $count17 !=''&& $price17 !=''&& $img17 !=''&& $product_id17 !=''){
$_SESSION['products'][$name17]=[
'count' => $count17,
'price' => $price17,
'img' => $img17,
'product_id' => $product_id17];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete17'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name17]);}
// 収納３個目
else if(isset($_POST['add18'])){
require_once('../Model/cart_import_conf2.php');
$count18 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name18){$count18 = (int)$count18 + (int)$product['count'];}}}
if($name18 !=''&& $count18 !=''&& $price18 !=''&& $img18 !=''&& $product_id18 !=''){
$_SESSION['products'][$name18]=[
'count' => $count18,
'price' => $price18,
'img' => $img18,
'product_id' => $product_id18];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete18'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name18]);}
// 収納４個目
else if(isset($_POST['add19'])){
require_once('../Model/cart_import_conf2.php');
$count19 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name19){$count19 = (int)$count19 + (int)$product['count'];}}}
if($name19 !=''&& $count19 !=''&& $price19 !=''&& $img19 !=''&& $product_id19 !=''){
$_SESSION['products'][$name19]=[
'count' => $count19,
'price' => $price19,
'img' => $img19,
'product_id' => $product_id19];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete19'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name19]);}
// 収納５個目
else if(isset($_POST['add20'])){
require_once('../Model/cart_import_conf2.php');
$count20 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name20){$count20 = (int)$count20 + (int)$product['count'];}}}
if($name20 !=''&& $count20 !=''&& $price20 !=''&& $img20 !=''&& $product_id20 !=''){
$_SESSION['products'][$name20]=[
'count' => $count20,
'price' => $price20,
'img' => $img20,
'product_id' => $product_id20];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete20'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name20]);}
// 収納６個目
else if(isset($_POST['add21'])){
require_once('../Model/cart_import_conf2.php');
$count21 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name21){$count21 = (int)$count21 + (int)$product['count'];}}}
if($name21 !=''&& $count21 !=''&& $price21 !=''&& $img21 !=''&& $product_id21 !=''){
$_SESSION['products'][$name21]=[
'count' => $count21,
'price' => $price21,
'img' => $img21,
'product_id' => $product_id21];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete21'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name21]);}
// 収納７個目
else if(isset($_POST['add22'])){
require_once('../Model/cart_import_conf2.php');
$count22 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name22){$count22 = (int)$count22 + (int)$product['count'];}}}
if($name22 !=''&& $count22 !=''&& $price22 !=''&& $img22 !=''&& $product_id22 !=''){
$_SESSION['products'][$name22]=[
'count' => $count22,
'price' => $price22,
'img' => $img22,
'product_id' => $product_id22];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete22'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name22]);}
// 収納８個目
else if(isset($_POST['add23'])){
require_once('../Model/cart_import_conf2.php');
$count23 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name23){$count23 = (int)$count23 + (int)$product['count'];}}}
if($name23 !=''&& $count23 !=''&& $price23 !=''&& $img23 !=''&& $product_id23 !=''){
$_SESSION['products'][$name23]=[
'count' => $count23,
'price' => $price23,
'img' => $img23,
'product_id' => $product_id23];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete23'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name23]);}
// 収納９個目
else if(isset($_POST['add24'])){
require_once('../Model/cart_import_conf2.php');
$count24 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name24){$count24 = (int)$count24 + (int)$product['count'];}}}
if($name24 !=''&& $count24 !=''&& $price24 !=''&& $img24 !=''&& $product_id24 !=''){
$_SESSION['products'][$name24]=[
'count' => $count24,
'price' => $price24,
'img' => $img24,
'product_id' => $product_id24];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete24'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name24]);}
// ソファーシリーズ
// ソファー１個目
else if(isset($_POST['add25'])){
require_once('../Model/cart_import_conf2.php');
$count25 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name25){$count25 = (int)$count25 + (int)$product['count'];}}}
if($name25 !=''&& $count25 !=''&& $price25 !=''&& $img25 !=''&& $product_id25 !=''){
$_SESSION['products'][$name25]=[
'count' => $count25,
'price' => $price25,
'img' => $img25,
'product_id' => $product_id25];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete25'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name25]);}
// ソファー２個目
else if(isset($_POST['add26'])){
require_once('../Model/cart_import_conf2.php');
$count26 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name26){$count26 = (int)$count26 + (int)$product['count'];}}}
if($name26 !=''&& $count26 !=''&& $price26 !=''&& $img26 !=''&& $product_id26 !=''){
$_SESSION['products'][$name26]=[
'count' => $count26,
'price' => $price26,
'img' => $img26,
'product_id' => $product_id26];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete26'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name26]);}
// ソファー３個目
else if(isset($_POST['add27'])){
require_once('../Model/cart_import_conf2.php');
$count27 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name27){$count27 = (int)$count27 + (int)$product['count'];}}}
if($name27 !=''&& $count27 !=''&& $price27 !=''&& $img27 !=''&& $product_id27 !=''){
$_SESSION['products'][$name27]=[
'count' => $count27,
'price' => $price27,
'img' => $img27,
'product_id' => $product_id27];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete27'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name27]);}
// ソファー４個目
else if(isset($_POST['add28'])){
require_once('../Model/cart_import_conf2.php');
$count28 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name28){$count28 = (int)$count28 + (int)$product['count'];}}}
if($name28 !=''&& $count28 !=''&& $price28 !=''&& $img28 !=''&& $product_id28 !=''){
$_SESSION['products'][$name28]=[
'count' => $count28,
'price' => $price28,
'img' => $img28,
'product_id' => $product_id28];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete28'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name28]);}
// ソファー５個目
else if(isset($_POST['add29'])){
require_once('../Model/cart_import_conf2.php');
$count29 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name29){$count29 = (int)$count29 + (int)$product['count'];}}}
if($name29 !=''&& $count29 !=''&& $price29 !=''&& $img29 !=''&& $product_id29 !=''){
$_SESSION['products'][$name29]=[
'count' => $count29,
'price' => $price29,
'img' => $img29,
'product_id' => $product_id29];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete29'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name29]);}
// ソファー６個目
else if(isset($_POST['add30'])){
require_once('../Model/cart_import_conf2.php');
$count30 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name30){$count30 = (int)$count30 + (int)$product['count'];}}}
if($name30 !=''&& $count30 !=''&& $price30 !=''&& $img30 !=''&& $product_id30 !=''){
$_SESSION['products'][$name30]=[
'count' => $count30,
'price' => $price30,
'img' => $img30,
'product_id' => $product_id30];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete30'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name30]);}
// ソファー７個目
else if(isset($_POST['add31'])){
require_once('../Model/cart_import_conf2.php');
$count31 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name31){$count31 = (int)$count31 + (int)$product['count'];}}}
if($name31 !=''&& $count31 !=''&& $price31 !=''&& $img31 !=''&& $product_id31 !=''){
$_SESSION['products'][$name31]=[
'count' => $count31,
'price' => $price31,
'img' => $img31,
'product_id' => $product_id31];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete31'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name31]);}
// ソファー８個目
else if(isset($_POST['add32'])){
require_once('../Model/cart_import_conf2.php');
$count32 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name32){$count32 = (int)$count32 + (int)$product['count'];}}}
if($name32 !=''&& $count32 !=''&& $price32 !=''&& $img32 !=''&& $product_id32 !=''){
$_SESSION['products'][$name32]=[
'count' => $count32,
'price' => $price32,
'img' => $img32,
'product_id' => $product_id32];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete32'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name32]);}
// ソファー９個目
else if(isset($_POST['add33'])){
require_once('../Model/cart_import_conf2.php');
$count33 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name33){$count33 = (int)$count33 + (int)$product['count'];}}}
if($name33 !=''&& $count33 !=''&& $price33 !=''&& $img33 !=''&& $product_id33 !=''){
$_SESSION['products'][$name33]=[
'count' => $count33,
'price' => $price33,
'img' => $img33,
'product_id' => $product_id33];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete33'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name33]);}
//その他シリーズ
// その他１個目
else if(isset($_POST['add34'])){
require_once('../Model/cart_import_conf2.php');
$count34 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name34){$count34 = (int)$count34 + (int)$product['count'];}}}
if($name34 !=''&& $count34 !=''&& $price34 !=''&& $img34 !=''&& $product_id34 !=''){
$_SESSION['products'][$name34]=[
'count' => $count34,
'price' => $price34,
'img' => $img34,
'product_id' => $product_id34];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete34'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name34]);}
// その他２個目
else if(isset($_POST['add35'])){
require_once('../Model/cart_import_conf2.php');
$count35 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name35){$count35 = (int)$count35 + (int)$product['count'];}}}
if($name35 !=''&& $count35 !=''&& $price35 !=''&& $img35 !=''&& $product_id35 !=''){
$_SESSION['products'][$name35]=[
'count' => $count35,
'price' => $price35,
'img' => $img35,
'product_id' => $product_id35];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete35'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name35]);}
// その他３個目
else if(isset($_POST['add36'])){
require_once('../Model/cart_import_conf2.php');
$count36 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name36){$count36 = (int)$count36 + (int)$product['count'];}}}
if($name36 !=''&& $count36 !=''&& $price36 !=''&& $img36 !=''&& $product_id36 !=''){
$_SESSION['products'][$name36]=[
'count' => $count36,
'price' => $price36,
'img' => $img36,
'product_id' => $product_id36];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete36'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name36]);}
// その他４個目
else if(isset($_POST['add37'])){
require_once('../Model/cart_import_conf2.php');
$count37 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name37){$count37 = (int)$count37 + (int)$product['count'];}}}
if($name37 !=''&& $count37 !=''&& $price37 !=''&& $img37 !=''&& $product_id37 !=''){
$_SESSION['products'][$name37]=[
'count' => $count37,
'price' => $price37,
'img' => $img37,
'product_id' => $product_id37];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete37'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name37]);}
// その他５個目
else if(isset($_POST['add38'])){
require_once('../Model/cart_import_conf2.php');
$count38 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name38){$count38 = (int)$count38 + (int)$product['count'];}}}
if($name38 !=''&& $count38 !=''&& $price38 !=''&& $img38 !=''&& $product_id38 !=''){
$_SESSION['products'][$name38]=[
'count' => $count38,
'price' => $price38,
'img' => $img38,
'product_id' => $product_id38];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete38'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name38]);}
// その他６個目
else if(isset($_POST['add39'])){
require_once('../Model/cart_import_conf2.php');
$count39 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name39){$count39 = (int)$count39 + (int)$product['count'];}}}
if($name39 !=''&& $count39 !=''&& $price39 !=''&& $img39 !=''&& $product_id39 !=''){
$_SESSION['products'][$name39]=[
'count' => $count39,
'price' => $price39,
'img' => $img39,
'product_id' => $product_id39];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete39'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name39]);}
// その他７個目
else if(isset($_POST['add40'])){
require_once('../Model/cart_import_conf2.php');
$count40 +=1;
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
foreach($products as $key => $product){
if($key == $name40){$count40 = (int)$count40 + (int)$product['count'];}}}
if($name40 !=''&& $count40 !=''&& $price40 !=''&& $img40 !=''&& $product_id40 !=''){
$_SESSION['products'][$name40]=[
'count' => $count40,
'price' => $price40,
'img' => $img40,
'product_id' => $product_id40];}
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
}else if(isset($_POST['delete40'])){
$products = isset($_SESSION['products'])? $_SESSION['products']:[];
unset($_SESSION['products'][$name40]);}
?>