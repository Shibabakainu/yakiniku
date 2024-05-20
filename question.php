<?php
require_once __DIR__ . '/newNav.php';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>質問を投稿</title>
    <link rel="stylesheet" href="./styles/question.css">
</head>

<body>
    <div class="wrap">
        <h3>質問投稿</h3>
        <form action="./finish.php" method="POST" enctype="multipart/form-data">
            <h4>質問内容</h4>
            <textarea name="content" required></textarea>
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
            <h4>画像</h4>
            <input type="file" name="image" accept=".jpg, .png"><br>
            <button type="submit" class="submit_button" formaction="http://localhost/yakiniku/finish.php">投稿</button>
        </form>
    </div>
</body>

</html>

<?php
require_once __DIR__ . '/footer.php';
?>
