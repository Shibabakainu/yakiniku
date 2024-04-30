<?php
require_once __DIR__ . '/nav.php';
?>

<html>

<head>
    <title>作品詳細</title>
    <link rel="stylesheet" href="styles/detail.css">
</head>

<body>
    <div class="wrap">
        <form class="view_form">
            <h2 class="detail_h2">Fresh Pick</h2>
            <p class="name">投稿者：神戸　花子</p>
            <p>
                　私は「Fresh Pick」という作品を作りました。<br>
                これは、皆さんにもっと旬の食材について知ってもらおうと思い、開発しました。<br>
                安くて美味しい旬のものをぜひ、食事に取り入れてみてください！<br>
            </p>
            <img src="images/siryou3.jpg" class="image" alt="ここに画像が表示されます"><br>
            <p>
                　次は食材の解説を入れたり、ジャンルごとに分けてより多くの食材を紹介できたらいいなと思います。<br>
            </p>

            <?php
            require_once __DIR__ . '/DownloadButton.php';   // ダウンロードボタンの呼び出し
            ?><br>

            <?php
            require_once __DIR__ . '/GoodButton.php';   // グッドボタンの呼び出し
            ?>


            <input type="button" class="return_button" onclick="location.href='./view.php'" value="戻る">

        </form>
    </div>
</body>

</html>

<?php
require_once __DIR__ . '/footer.php';
?>