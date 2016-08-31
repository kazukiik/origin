<?php 
  $nickname = htmlspecialchars($_POST['nickname']);
  $email = htmlspecialchars($_POST['email']);
  $content = htmlspecialchars($_POST['content']);

// 1 DBへの接続
  $dsn = 'mysql:dbname=phpkiso;host=localhost';
  $user = 'root';
  $password = '';
  $dbh = new PDO($dsn, $user, $password);
  $dbh->query('SET NAMES utf8');

// 2 SQL文を作成
  $sql = 'INSERT INTO `survey`(`nickname`, `email`, `content`) VALUES ("' .$nickname.'","'.$email.'","'.$content.'")';
  // SQLを実行する
  $stmt = $dbh -> prepare($sql);
  $stmt ->execute();
// 3　DB切断
  $dbh = null;

  $nickname = htmlspecialchars($_POST['nickname']);
  $email = htmlspecialchars($_POST['email']);
  $content = htmlspecialchars($_POST['content']);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <title>送信完了</title>
  <meta charset="utf-8">
</head>
<body>
   <h1>お問い合わせありがとうございました！</h1>
   <p>ニックネーム: <?php echo htmlspecialchars($nickname);?></p>
   <p>メールアドレス: <?php echo htmlspecialchars($email); ?></p>
   <p>お問い合わせ内容: <?php echo htmlspecialchars($content); ?></p>
</body>
</html>