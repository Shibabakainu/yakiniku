<?php
require_once __DIR__ . '/nav.php';
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
        </div>
    </body>

<?php
require_once __DIR__ . '/footer.php';
?>
