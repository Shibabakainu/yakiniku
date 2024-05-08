<?php
require_once __DIR__ . '/newNav.php';
?>

<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>作品一覧</title>
    <link rel="stylesheet" href="styles/view.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style type="text/css">
        table {
            margin: auto;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        tr {
            height: 100px;
            text-align: center;
        }

        td {
            font-size: 200%;
        }

        th {
            font-size: 100%;
        }

    </style>
</head>

<body>
    <h1>記事一覧</h1>
    <!-- フィルタ（ラジオボタンとラベル） -->
    <input type="radio" name="categories" id="All" value="All" checked>
    <input type="radio" name="categories" id="C" value="C">
    <input type="radio" name="categories" id="Python" value="Python">
    <input type="radio" name="categories" id="Java" value="Java">
    <input type="radio" name="categories" id="AI" value="AI">
    <input type="radio" name="categories" id="Web" value="Web">
    <input type="radio" name="categories" id="AWS" value="AWS">

    <div class="filters">
        <label for="All">全て</label>
        <label for="C">#C</label>
        <label for="Python">#Python</label>
        <label for="Java">#Java</label>
        <label for="AI">#AI</label>
        <label for="Web">#Web</label>
        <label for="AWS">#AWS</label>
    </div>

    <div class="targets">
        <table border="1" style="border-collapse: collapse">
            <tr bgcolor="#e6e6fa">
                <td width="400px">タイトル</td>
                <td width="800px">記事の概要</td>
            </tr>
            <tr class="target" data-category="AI">
                <td><a href="./detail.php" class="contentTitle"><span style="color: black;">ChatGPTに聞いてみた！</span></a></td>
                <th class="contentBody">
                    ChatGPTに今話題のデイリースクラムについて聞いてみた！
                    <p class="timeStamp"><img src="./images/calendar(16).jpeg"> 2024/04/25</p>
                    <div style="text-align: right;">
                        <button type="button" class="likeButton"> <!-- 高評価数の表示 -->
                            <span class="material-symbols-outlined">thumb_up</span><span>32</span>
                        </button>
                        <button type="button" class="commentButton"> <!-- コメント数の表示 -->
                            <span class="material-symbols-outlined">comment</span><span>3</span>
                        </button>
                    </div>
                </th>
            </tr>
            <tr class="target" data-category="AI">
                <td><a href="./detail.php" class="contentTitle"><span style="color: black;">「ゼロから始める機械学習」: 機械学習入門ガイド</span></a></td>
                <th class="contentBody">
                    この記事では、機械学習の基本から応用までを解説します。アルゴリズム、データセット、モデルの選択方法などについて詳しく説明します。
                    <p class="timeStamp"><img src="./images/calendar(16).jpeg"> 2024/03/25</p>
                    <div style="text-align: right;">
                        <button type="button" class="likeButton"> <!-- 高評価数の表示 -->
                            <span class="material-symbols-outlined">thumb_up</span><span>89</span>
                        </button>
                        <button type="button" class="commentButton"> <!-- コメント数の表示 -->
                            <span class="material-symbols-outlined">comment</span><span>5</span>
                        </button>
                    </div>
                </th>
            </tr>
            <tr class="target" data-category="Web">
                <td><a href="./detail.php" class="contentTitle"><span style="color: black;">「最新のフロントエンド開発トレンド」: 2023年版</span></a></td>
                <th class="contentBody">
                    フロントエンド開発の最新トレンドを紹介する記事です。Webコンポーネント、TypeScript、モバイルフレームワークなどに焦点を当てています。
                    <p class="timeStamp"><img src="./images/calendar(16).jpeg"> 2024/01/04</p>
                    <div style="text-align: right;">
                        <button type="button" class="likeButton"> <!-- 高評価数の表示 -->
                            <span class="material-symbols-outlined">thumb_up</span><span>12</span>
                        </button>
                        <button type="button" class="commentButton"> <!-- コメント数の表示 -->
                            <span class="material-symbols-outlined">comment</span><span>1</span>
                        </button>
                    </div>
                </th>
            </tr>
            <tr class="target" data-category="AWS">
                <td><a href="./detail.php" class="contentTitle"><span style="color: black;">「サーバーレスアーキテクチャの実践的ガイド」: AWS Lambda、Azure Functions、Google Cloud Functionsの比較</span></a></td>
                <th class="contentBody">
                    サーバーレスアーキテクチャの選択肢と、それぞれのプラットフォームでの実装方法を比較する記事です。関数のデプロイ、スケーリング、コストなどについて詳しく解説します。
                    <p class="timeStamp"><img src="./images/calendar(16).jpeg"> 2023/12/25</p>
                    <div style="text-align: right;">
                        <button type="button" class="likeButton"> <!-- 高評価数の表示 -->
                            <span class="material-symbols-outlined">thumb_up</span><span>56</span>
                        </button>
                        <button type="button" class="commentButton"> <!-- コメント数の表示 -->
                            <span class="material-symbols-outlined">comment</span><span>4</span>
                        </button>
                    </div>
                </th>
            </tr>
        </table>
    </div>
</body>

</html>

<?php
require_once __DIR__ . '/footer.php';
?>
