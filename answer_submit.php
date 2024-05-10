<?php
require_once __DIR__ . '/newNav.php';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <title>回答入力</title>
    <link rel="stylesheet" href="styles/answer_submit.css">
</head>

<body>
    <div class="wrap">
        <form action="home.php" method="post" enctype="multipart/form-data">
            <h1>回答入力</h1>
            <h4>氏名</h4>
            <input type="text" name="title" size="25" required>
            <h4>回答の内容を入力</h4>
            <textarea name="content" maxlength="150" required></textarea>
            <h4>画像のアップロード</h4>
            <input type="file" accept=".jpg, .png">
            <h4>ファイルのアップロード</h4>
            <input type="file"><br>
            <input type="button" class="answer_button" onclick="location.href='./answer.php'" value="回答する">
        </form>
    </div>
</body>

<?php
require_once __DIR__ . '/footer.php';
?>