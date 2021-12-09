<?php
ini_set('display_errors', "On");
    session_start();
    require('../app/function.php');
    require_once('../app/config.php');

  // パスワードと確認用パスワードが一致するかが
  $err = "※一つ目のパスワードと確認用パスワードの値が一致しません。"; //エラーメッセージ格納変数
  $url="/IT42-117/view/mycust_pass.php?err={$err}";

  if($_POST['password'] == $_POST['confirm_password']){
    $pw = $_POST['confirm_password'];
  }else{
    header("Location:" .$url);
    exit();
  }


    try {
  $pdo = new PDO(DSN, DB_USER, DB_PASS);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
    $mail= $_SESSION['mail_address'];
    $password = password_hash(h($pw), PASSWORD_DEFAULT);
    $update = 'UPDATE users SET password=:password where mail_address=:mail ';

    $ps = $pdo->prepare($update);
    $ps->bindValue(':password', $password);
    $ps->bindValue(':mail',$mail);
    $ps->execute();

    header('Location: /IT42-117/view/mycust_pass2.php');

?>
