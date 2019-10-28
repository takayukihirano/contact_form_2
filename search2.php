<?php
    require_once('function2.php');
    require_once('dbconnect2.php');

    $namae = '';
    if (isset($_GET['namae'])) {
        $namae = $_GET['namae'];
    }

    //SQLを実行
    $stmt = $dbh->prepare('SELECT * FROM surveys2 WHERE namae like ?');
    $stmt->execute(["%$namae%"]);
    $results = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>送信完了</title>
    <meta charset="utf-8">
</head>
<body>
    <form action="" method="get">
        <p>検索したいお名前を入力してください。</p>
        <input type="text" name="namae">
        <input type="submit" value="検索">
    </form>
    <!-- //画面に表示する -->
    <?php foreach ($results as $result): ?>
        <p><?php echo h($result['namae']); ?></p>
        <p><?php echo h($result['furigana']); ?></p>
        <p><?php echo h($result['email']); ?></p>
        <p><?php echo h($result['tel']); ?></p>
        <p><?php echo h($result['sex']); ?></p>
        <p><?php echo h($result['item']); ?></p>
        <p><?php echo h($result['content']); ?></p>
    <?php endforeach; ?>
</body>
</html>