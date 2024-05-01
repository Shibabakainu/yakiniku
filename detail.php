<?php
require_once __DIR__ . '/newNav.php';
?>

<html>

<head>
    <title>作品詳細</title>
    <link rel="stylesheet" href="styles/detail.css">
</head>

<body>
    <div class="wrap">
        <form class="view_form">
            <h2 class="detail_h2">ChatGPTに聞いてみた！</h2>
            <p class="name">投稿者：神戸　太郎</p>
            <p>
                皆さんはChatGPTをご存知ですか？<br>
                アドバイスやアイデアを出してくれたりとさまざまなことに役立つAIチャットサービスです。<br>
                これはそんなChatGPTにいろんなことを聞いて、知ってもらおうという企画です！<br>
                記念すべき第1回目は、今話題の「スクラム開発」について聞いてみました！<br>
            </p>
            <img src="images/chatgpt.jpg" class="image" alt="ここに画像が表示されます"><br>
            <p>
                このように知りたいことをまとめて教えてくれました。<br>
                次回は、スクラム開発の中で行われる、「デイリースクラム」についてです。
            </p>

            <?php
                require_once __DIR__ . '/DownloadButton.php';   // ダウンロードボタンの呼び出し
            ?><br>

            <?php
                require_once __DIR__ . '/GoodButton.php';   // グッドボタンの呼び出し
            ?>


                <input type="button" class="return_button" onclick="location.href='./view.php'" value="戻る">

        </form>
        <h2>コメント入力</h2>
        <!-- コメント入力 -->
        <form method="POST" action="comment_submit.php">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment" required></textarea>
            </div>
            <div>
                <button type="submit">送信</button>
            </div>
        </form>

        <!-- コメント表示 -->
        <h2>コメント欄</h2>
        <div id="comments">
            <?php include 'comment_display.php'; ?>
        </div>
    </div>
</body>
</html>

<?php
require_once __DIR__ . '/footer.php';
?>
