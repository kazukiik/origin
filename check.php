<?php 
// データを受け取る
   $nickname = htmlspecialchars($_POST['nickname']);
   $email = htmlspecialchars($_POST['email']);
   $content = htmlspecialchars($_POST['content']);

   // ニックネーム
   if ($nickname == '') {
    $nickname = 'ニックネームが入力されていません。';
   } else {
    $nickname = 'ようこそ : ' . $nickname . '様';
   }

// メールアドレス
   if ($email == '') {
    $email='メールアドレスが入力されていません。';
   } else {
    $email='メールアドレス : ' . $email;
   }

   // お問い合わせ内容
   if ($content == '') {
    $content='お問い合わせ内容が入力されていません。';
   } else {
    $content='お問い合わせ内容 : ' . $content;
   }
   ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <title>入力内容確認</title>
  <meta charset="utf-8">
</head>
<body>
<h1>入力内容確認</h1>
  <p><?php echo $nickname; ?></p>
  <p><?php echo $email; ?></p>
  <p><?php echo $content; ?></p>

     <!-- 入力完了した場合の送信先 -->
   <form method="POST" action="thanks.php">
     
     <!-- thanksページに情報を渡す準備 -->
     <input type="hidden" name="nickname" value="<?php echo htmlspecialchars($_POST['nickname']);  ?>">
     <input type="hidden" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
     <input type="hidden" name="content" value="<?php echo htmlspecialchars($_POST['content']); ?>">

      <input type="button" value="戻る" onclick="history.back()">
      <?php if ($_POST['nickname'] !='' && $_POST['email']!='' && $_POST['content']!='' ){
        ?>
      <input type="submit" value="OK">
<?php } ?>
   </form>
</body>
</html>