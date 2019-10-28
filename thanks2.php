<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  header('Location: index.html');
}
require_once('function2.php');
$namae = $_POST['namae'];
// echo $nickname;
$furigana = $_POST['furigana'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$sex = $_POST['sex'];
// echo $email;
$item = $_POST['item'];
$content = $_POST['content'];
// echo $content;

require_once('function2.php');
require_once('dbconnect2.php');
$stmt = $dbh->prepare('INSERT INTO surveys2 (namae,furigana,email,tel,sex,item,content)VALUES(?,?,?,?,?,?,?)');
$stmt->execute([$namae,$furigana,$email,$tel,$sex,$item,$content]);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>送信完了</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/customstyle.css">
      <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline&display=swap" rel="stylesheet">
</head>
<body>

<div class="container mt-5 mb-5">

  <h1>お問い合わせ　送信完了</h1>
  <p>
    お問い合わせありがとうございました。<br>
  内容を確認の上、回答させて頂きます。<br>
  しばらくお待ちください。
　</p>
  <p><?php echo h($namae); ?></p>
  <p><?php echo h($furigana); ?></p>
  <p><?php echo h($email); ?></p>
  <p><?php echo h($tel); ?></p>
  <p><?php echo h($sex); ?></p>
  <p><?php echo h($item); ?></p>
  <p><?php echo h($content); ?></p>

  <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>