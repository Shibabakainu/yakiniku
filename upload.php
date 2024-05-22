<?php
require_once __DIR__ . '/newNav.php';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>作品を投稿</title>
    <link rel="stylesheet" href="styles/upload.css">
</head>

<body>
    <div class="wrap">
        <form action="home.php" method="post" enctype="multipart/form-data">
            <h1>記事作成</h1>
            <h4>タイトル入力</h4>
            <input type="text" name="title" size="25" required>
            <h4>記事の内容または作品の説明を入力</h4>
            <textarea name="content" maxlength="150" required></textarea>
            <h4>タグの追加</h4>
            <label><input type="checkbox" value="C" name="tags"><span>#C</span></label>
            <label><input type="checkbox" value="Python" name="tags"><span>#Python</span></label>
            <label><input type="checkbox" value="Java" name="tags"><span>#Java</span></label>
            <label><input type="checkbox" value="PHP" name="tags"><span>#PHP</span></label>
            <label><input type="checkbox" value="JavaScript" name="tags"><span>#JavaScript</span></label>
            <label><input type="checkbox" value="HTML/CSS" name="tags"><span>#HTML/CSS</span></label>
            <label><input type="checkbox" value="AI" name="tags"><span>#AI</span></label>
            <label><input type="checkbox" value="Web" name="tags"><span>#Web</span></label>
            <label><input type="checkbox" value="AWS" name="tags"><span>#AWS</span></label>
            <h4>タイトル画像のアップロード</h4>
            <input type="file" accept=".jpg, .png">
            <h4>ファイルのアップロード</h4>
            <input type="file"><br>
            <button type="submit" class="submit_button">投稿</button>

        </form>
        <!--<button onclick="AlertAndRedirect()">投稿する</button>-->
    </div>
    </body>

    <?php
    require_once __DIR__ . '/footer.php';
    ?>

</html>
