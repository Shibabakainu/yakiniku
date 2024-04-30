<?php
require_once __DIR__ . '/nav.php';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>finish</title>
    <link rel="stylesheet" href="./styles/finish.css">
</head>

<body>
    <p class="head">質問内容</p>
    <div>
        <?php
        echo nl2br($_POST["content"])
        ?>
    </div>
    <p>
        上記の内容で登録されました。
    </p>
    <button type="button" name="button" onclick="location.href='http://localhost/yakiniku/home.php'">戻る</button>
</body>

</html>

<?php
require_once __DIR__ . '/footer.php';
?>