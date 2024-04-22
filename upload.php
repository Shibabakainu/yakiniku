<?php
require_once __DIR__ . '/nav.php';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>アップロード</title>
    <link rel="stylesheet" href="styles/upload.css">
</head>

<body>
    <div class="wrap">
        <form action="home.php" method="post" enctype="multipart/form-data">
            <p>タイトル入力</p><input type="text" name="title" size="25" required>
            <p>記事の内容または作品の説明を入力</p><textarea name="content" maxlength="150" required></textarea>
            <p>タイトル画像のアップロード</p><input type="file" accept=".jpg, .png">
            <p>ファイルのアップロード</p><input type="file"><br>
            <input type="submit" value="投稿する">
        </form>
        <!--<button onclick="AlertAndRedirect()">投稿する</button>-->
    </div>
    </body>
</html>

<?php
require_once __DIR__ . '/footer.php';
?>
