<?php

  // // この書き方はisssetの存在判定したときに、？以降の処理を施すという意味。
  // // ここでは「？」以降の処理を施した後変数に代入している。

  // 試験的にカートの中身を完璧な機能にするために作ったファイル。sofa.phpとcart2.phpしか連携させてない。

session_start();

if (isset($_SESSION['mail_address'])) {

   // カートへの格納はセッションだけで運用する。
   $name = (isset($_POST['name']))? htmlspecialchars($_POST['name'], ENT_QUOTES, 'utf-8') : '';

   $count_p = (isset($_POST['count']))? htmlspecialchars($_POST['count'], ENT_QUOTES, 'utf-8') : '';

 require_once('../Model/cart_import_conf.php');

 foreach($cart as $cart_in){
  $product_id= $cart_in['product_id'];
  $name = $cart_in['product_name'];
  $count = $cart_in['count'];
  $price = $cart_in['price'];
  $img = $cart_in['product_img'];
  }
  $count +=$count_p;

  //もし、sessionにproductsがあったら
  if(isset($_SESSION['products'])){
      //$_SESSION['products']を$productsという変数にいれる
      $products = $_SESSION['products'];
      //$productsをforeachで回し、キー(商品名)と値（金額・個数）取得
      foreach($products as $key => $product){
          //もし、キーとPOSTで受け取った商品IDが一致したら、
          if($key == $name){
              //既に商品がカートに入っているので、個数を足し算する
              $count = (int)$count + (int)$product['count'];
          }
      }
  }
   //配列に入れるには、$name,$count,$price,$imgの値が取得できていることが前提なのでif文で空のデータを排除する
   if($name !=''&& $count !=''&& $price !=''&& $img !=''&& $product_id !=''){
     $_SESSION['products'][$name]=[
         'count' => $count,
         'price' => $price,
         'img' => $img,
         'product_id' => $product_id];
      }
     $products = isset($_SESSION['products'])? $_SESSION['products']:[];

    // print_r($products);

    // ログインセッションの所有時にカートにリダイレクト。
    header("Location: /IT42-117/view/cart.php");
    exit();
    }
    else{
                //ログインしていなかったら、ログインページに飛ぶ（カートにリクエストを送る前で）

            // カートへの格納はセッションだけで運用する。
        $name = (isset($_POST['name']))? htmlspecialchars($_POST['name'], ENT_QUOTES, 'utf-8') : '';

        $count_p = (isset($_POST['count']))? htmlspecialchars($_POST['count'], ENT_QUOTES, 'utf-8') : '';

        require_once('../Model/cart_import_conf.php');

        foreach($cart as $cart_in){
        $product_id= $cart_in['product_id'];
        $name = $cart_in['product_name'];
        $count = $cart_in['count'];
        $price = $cart_in['price'];
        $img = $cart_in['product_img'];
        }
        $count +=$count_p;

        //もし、sessionにproductsがあったら
        if(isset($_SESSION['products'])){
            //$_SESSION['products']を$productsという変数にいれる
            $products = $_SESSION['products'];
            //$productsをforeachで回し、キー(商品名)と値（金額・個数）取得
            foreach($products as $key => $product){
                //もし、キーとPOSTで受け取った商品IDが一致したら、
                if($key == $name){
                    //既に商品がカートに入っているので、個数を足し算する
                    $count = (int)$count + (int)$product['count'];
                }
            }
        }
        //配列に入れるには、$name,$count,$price,$imgの値が取得できていることが前提なのでif文で空のデータを排除する
        if($name !=''&& $count !=''&& $price !=''&& $img !=''&& $product_id !=''){
            $_SESSION['products'][$name]=[
                'count' => $count,
                'price' => $price,
                'img' => $img,
                'product_id' => $product_id];
            }
             $products = isset($_SESSION['products'])? $_SESSION['products']:[];


        header("Location: /IT42-117/view/path_ca.php");
        exit();
    }
