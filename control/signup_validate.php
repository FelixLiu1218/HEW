<?php
require('../app/function.php');
require_once('../app/config.php');


//名前
    //　前処理（前後のスペース削除）
  $wk_name = trim(h($_POST["name"]));	//先頭と末尾の半角削除
	$wk_name = preg_replace('/^[　]*/u', "", $wk_name);	//先頭
	$wk_name = preg_replace('/[　]*$/u', "", $wk_name);	//末尾
  // アルファベット３６文字、日本語１２文字の名前が可能
  $limit =36;
  $moji_limit = strlen($wk_name);

  $err = "メールアドレス、パスワードの入力値が不正、又はユーザネームの入力値がありません。";	//エラーメッセージ格納変数
  $url="/IT42-117/view/sign_up.php?err={$err}";

//データベースへ接続、テーブルがない場合は作成する仕組み

try {
  $pdo = new PDO(DSN, DB_USER, DB_PASS);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec("create table if not exists users(
      user_id int not null auto_increment,
      password char(255) NOT NULL,
      mail_address varchar(255) NOT NULL,
      name varchar(255) NOT NULL,
      tel varchar(15),
      address_num varchar(7),
      address varchar(255),
      Born date,
      point int(11),
      created_at datetime NOT NULL,
      delete_time datetime,
      PRIMARY KEY (user_id)
    )");
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
//POSTのValidate。
if (!$mail_address = filter_var(h($_POST['mail_address']), FILTER_VALIDATE_EMAIL)) {
  // エラー文を送り付けてリダイレクト
  header("Location:" .$url);
  exit();
  // return false;
}
//パスワードの正規表現
if (preg_match('/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{8,100}+\z/i', h($_POST['password']))) {
  // ハッシュ化
  $password = password_hash(h($_POST['password']), PASSWORD_DEFAULT);
} else {
  // エラー文を送り付けてリダイレクト
  header("Location:".$url);
  exit();
  // return false;
}
// ユーザーネーム
// if (preg_match('/^[ぁ-んァ-ヶーa-zA-Z0-9一-龠０-９、。\n\r]+$/u', $wk_name)) {
//   $name = $wk_name;
// }
if (empty($wk_name)) {
  header("Location:" .$url);
  exit();
  // echo '名前を入力してください';
  // return false;
}elseif($limit >= $moji_limit){
  $name = $wk_name;
}elseif($limit < $wk_name){
  header("Location:" .$url);
  exit();
}
// 日付
if (isset($_POST['created_at'])) {
  $created_at = $_POST['created_at'];
}

// 生年月日
if (isset($_POST['born'])) {
  $born = $_POST['born'];
  $pata = "/^(\d{4})\/(\d{1,2})\/(\d{1,2})$/";
  $rep = "$1年$2月$3日";

  $born_date = preg_replace($pata,$rep,$born);
  // ここのヴァリデイトチェックは今回省略
}

// 電話番号
if (isset($_POST['tel'])) {
  $tel = $_POST['tel'];
  // ここのヴァリデイトチェックは今回省略
}

// 郵便番号
if (isset($_POST['address_num'])) {
    //郵便番号フォーマット
  $postnum = $_POST['address_num'];
  // ここのヴァリデイトチェックは今回省略
}

// 住所
if (isset($_POST['address'])) {
  $address = $_POST['address'];
  // ここのヴァリデイトチェックは今回省略
}
// point付与
if (isset($_POST['address'])) {
  $point = $_POST['point'];
  // ここのヴァリデイトチェックは今回省略
}

//登録処理
try {
  $stmt = $pdo->prepare("insert into users(mail_address,password,name,created_at,point,born,tel,address_num,address) value(?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->execute([$mail_address, $password, $name, $created_at, $point, $born_date, $tel, $postnum, $address]);
  header("Location: /IT42-117/view/signup_comp.php"); //完了メッセージ画面にリダイレクト
  exit();

} catch (\Exception $e) {
  $err2="既に登録済みのメールアドレスです";
  $url="/IT42-117/view/sign_up.php?err2={$err2}";
  header("Location:" .$url);
  exit();
}
