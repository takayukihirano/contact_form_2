<?php
    require_once('function2.php');
    require_once('dbconnect2.php');

    //SQLを実行
    $stmt = $dbh->prepare('SELECT * FROM surveys2');
    $stmt->execute();
    $results = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>一覧</title>
</head>
<body>
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