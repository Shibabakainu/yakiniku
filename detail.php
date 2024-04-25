<?php
require_once __DIR__ . '/nav.php';
?>

<html>

<head>
    <title>作品詳細</title>
    <link rel="stylesheet" href="styles/detail.css">
</head>

<body class="detail_body">
    <form class="view_form">
        <h2 class="detail_h2">ChatGPTに聞いてみた！</h2>
        <p class="name">投稿者：神戸　太郎</p>
        <p class="report_body">
            皆さんはChatGPTをご存知ですか？<br>
            アドバイスやアイデアを出してくれたりとさまざまなことに役立つAIチャットサービスです。<br>
            これはそんなChatGPTにいろんなことを聞いて、知ってもらおうという企画です！<br>
            記念すべき第1回目は、今話題の「スクラム開発」について聞いてみました！<br>
        </p>
        <img src="images/chatgpt.jpg" class="image" alt="ここに画像が表示されます"><br>
        <p class="report_body">
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

</html>

<?php
require_once __DIR__ . '/footer.php';
?>
