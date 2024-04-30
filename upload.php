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
            <p>タグの追加</p>
            <label><input type="checkbox" value="C" name="tags"><span>#C</span></label>
            <label><input type="checkbox" value="Python" name="tags"><span>#Python</span></label>
            <label><input type="checkbox" value="Java" name="tags"><span>#Java</span></label>
            <label><input type="checkbox" value="PHP" name="tags"><span>#PHP</span></label>
            <label><input type="checkbox" value="JavaScript" name="tags"><span>#JavaScript</span></label>
            <label><input type="checkbox" value="HTML/CSS" name="tags"><span>#HTML/CSS</span></label>
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
