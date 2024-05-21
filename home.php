<?php
require_once __DIR__ . '/newNav.php';
?>
    <head>
        <meta charset="utf-8">
        <title>ホーム</title>
        <link rel="stylesheet" href="styles/home.css">
    </head>

    <body>
        </div>
        <header>
            <h1>プログラミング情報共有</h1>
        </header>
        <div class="wrap">
            <button type="button" class="card-button" onclick="location.href='detail.php'">
                <div class="card">
                    <h2>記事閲覧</h2>
                    <h3>内容</h3>
                </div>
            </button>
            <button type="button" class="card-button" onclick="location.href='answer.php'">
                <div class="card">
                    <h2>質問閲覧</h2>
                    <h3>内容</h3>
                </div>
            </button>
            <button type="button" class="card-button" onclick="location.href='upload.php'">
                <div class="card">
                    <h2>作品をアップロード</h2>
                    <h3>内容</h3>
                </div>
            </button>
            <button type="button" class="card-button" onclick="location.href='question.php'">
                <div class="card">
                    <h2>質問を投稿</h2>
                    <h3>作成</h3>
                </div>
            </button>
        </div>
    </body>

<?php
require_once __DIR__ . '/footer.php';
?>