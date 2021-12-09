 <!-- デリート処理物理削除 -->

 <?php
session_start();
$user = $_SESSION['User_id'];
$output = '';
// DB接続
  // require_once('../app/config.php');
  // なんか今更この形変えるタイミングないから、config.phpに鞍替えしません。
  $dsn = 'mysql:host=localhost;dbname=hew2020_91149;charset=utf8mb4';
  $db_user = 'root';
  // ここパスワード変えてください。
  $db_password = '0112';

    try{
        //DB接続オブジェクト
        //PDO…PHP Data Object
        $pdo = new PDO($dsn, $db_user, $db_password);
        //let logo = getElementById('id');

        //PDOの設定変更
        $pdo->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );

    $sql = 'DELETE FROM users WHERE User_id=:User_id';

    $ps = $pdo->prepare($sql);
    $ps->bindValue(':User_id', $user);
    $ps->execute();
}catch(PDOException $e){
    header('Location: error.html');
    exit;
}


 if (isset($_SESSION["mail_address"])) {
   //セッション変数のクリア
 $_SESSION = array();
 //セッションクッキーも削除
 if (ini_get("session.use_cookies")) {
     $params = session_get_cookie_params();
     setcookie(session_name(), '', time() - 42000,
         $params["path"], $params["domain"],
         $params["secure"], $params["httponly"]
     );
 }
 //セッションクリア
 @session_destroy();
 header("Location: /IT42-117/view/mycust_leave3.php"); //ログアウト後セッションを解除したままtoppage
 exit();
 } else {
   $output = 'SessionがTimeoutしました。';
   echo "<p><a href='login.php'>ログインページはこちら</a></p>";
    //セッション変数のクリア
   $_SESSION = array();
   //セッションクッキーも削除
   if (ini_get("session.use_cookies")) {
     $params = session_get_cookie_params();
     setcookie(session_name(), '', time() - 42000,
         $params["path"], $params["domain"],
         $params["secure"], $params["httponly"]
     );
 }
 //セッションクリア
 @session_destroy();
 }




 ?>
