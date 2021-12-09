<?php
session_start();
require('../app/function.php');
require_once('../app/config.php');
$err = "メールアドレス又はパスワードが間違っています。";	//エラーメッセージ格納変数
$url="/IT42-117/view/path_ca.php?err={$err}";
//POSTのvalidate
if (!filter_var(h($_POST['mail_address']), FILTER_VALIDATE_EMAIL)) {
  header("Location:" .$url);
  exit();
  // echo '入力された値が不正です。';
  // return false;
}
//DB内でPOSTされたメールアドレスを検索
try {
  $pdo = new PDO(DSN, DB_USER, DB_PASS);
  $stmt = $pdo->prepare('select * from users where mail_address = ?');
  $stmt->execute([h($_POST['mail_address'])]);
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (\Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
//emailがDB内に存在しているか確認
if (!isset($row['mail_address'])) {
  header("Location:" .$url);
  exit();
  // echo 'メールアドレス又はパスワードが間違っています。';
  // return false;
}

//パスワード確認後sessionにメールアドレスを渡す,ユーザーネームも後、ユーザIDもセッションに代入
if (password_verify(h($_POST['password']), $row['password'])) {
  session_regenerate_id(true); //session_idを新しく生成し、置き換える
  $_SESSION['User_id'] = $row['User_id'];
  $_SESSION['mail_address'] = $row['mail_address'];
  $_SESSION['name'] = $row['name'];
  $_SESSION['point'] = $row['point'];
  header("Location: /IT42-117/view/cart.php"); //ログイン後のページにリダイレクト
  exit();
} else {
  header("Location:" .$url);
  exit();
  // echo 'メールアドレス又はパスワードが間違っています。';
  // return false;
}
?>
