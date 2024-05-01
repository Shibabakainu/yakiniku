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
            <div class="card" onclick="view.php">
                <h2>記事閲覧</h2>
                <h3>内容</h3>

            </div>
            <div class="card">
                <h2>作品閲覧</h2>
                <h3>内容</h3>

            </div>
            <div class="card">
                <h2>アップロード</h2>
                <h3>内容</h3>

            </div>
            <button type="button">
                <h2>質問</h2>
                <h3>回答</h3>
            </button>

        </div>
    </body>

<?php
require_once __DIR__ . '/footer.php';
?>
