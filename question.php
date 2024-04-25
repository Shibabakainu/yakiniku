<?php
require_once __DIR__ . '/nav.php';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>post</title>
    <link rel="stylesheet" href="./styles/question.css">
</head>

<body>
    <div class="wrap">
        <h3>質問投稿</h3>
        <form action="./finish.php" method="POST" enctype="multipart/form-data">
            <p>質問内容<br>
                <textarea name="content"></textarea>
            </p>
            <p>画像<br>
                <input type="file" name="image" accept=".jpg, .png">
            </p>
            <button type="submit" class="submit" formaction="http://localhost/yakiniku/finish.php">投稿</button>
        </form>
    </div>
</body>

</html>

<?php
require_once __DIR__ . '/footer.php';
?>