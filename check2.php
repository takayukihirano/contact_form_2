<!-- // $nickname = $_POST['nickname'];
// var_dump($nickname); -->


<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: index.html');
}
    $namae = $_POST['namae'];

    $furigana = $_POST['furigana'];

    $email = $_POST['email'];

    $tel = $_POST['tel'];

    $sex = $_POST['sex'];

    $item = $_POST['item'];

    $content = $_POST['content'];

if($namae==''){
    $namae_result='お名前が入力されていません。';
}else{
    $namae_result='ようこそ ' . $namae . ' 様';
}

if($furigana==''){
    $furigana_result='ふりがなが入力されていません。';
}else{
    $furigana_result='ふりがな:' . $furigana;
}

if($email==''){
    $email_result='メールアドレスが入力されていません。';
}else{
    $email_result='メールアドレス:' . $email;
}

if($tel==''){
    $tel_result='電話番号が入力されていません。';
}else{
    $tel_result='電話番号:' . $tel;
}

if($sex==''){
    $sex_result='性別が入力されていません。';
}else{
    $sex_result='性別:' . $sex;
}

if($item==''){
    $item_result='お問い合わせ項目が選択されていません。';
}else{
    $item_result='お問い合わせ項目:' . $item;
}

if($content==''){
    $content_result='お問い合わせ内容が入力されていません。';
}else{
    $content_result='お問い合わせ内容:' . $content;
}
require_once('function2.php');
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <title>入力内容確認</title>
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/customstyle.css">
      <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline&display=swap" rel="stylesheet">
</head>
<body>
<div class="container mt-5 mb-5">

    <h1>入力内容確認</h1>
    <p><?php echo h($namae_result); ?></p>
    <p><?php echo h($furigana_result); ?></p>
    <p><?php echo h($email_result); ?></p>
    <p><?php echo h($tel_result); ?></p>
    <p><?php echo h($sex_result); ?></p>
    <p><?php echo h($item_result); ?></p>
    <p><?php echo h($content_result); ?></p>

    <form method="post" action="thanks2.php">
    <?php if ($namae != '' && $furigana != '' && $email != '' && $tel !='' && $sex !='' && $item !='' && $content != ''):?>
        <button type="submit" class="btn btn-info">送信する</button>
    <?php endif;?>
    <button type="button" onclick="history.back()"  class="btn btn-secondary">内容を修正する</button>
    <input type="hidden" name="namae" value="<?php echo $namae;?>">
    <input type="hidden" name="furigana" value="<?php echo $furigana;?>">
    <input type="hidden" name="email" value="<?php echo $email;?>">
    <input type="hidden" name="tel" value="<?php echo $tel;?>">
    <input type="hidden" name="sex" value="<?php echo $sex;?>">
    <input type="hidden" name="item" value="<?php echo $item;?>">
    <input type="hidden" name="content" value="<?php echo $content;?>">
    <!-- フォーム送信用のボタンじゃない時はtype="button"にする -->
    <!-- フォーム送信用の時はtype="submit"にする -->
    <!-- コロン構文 -->
</form>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>