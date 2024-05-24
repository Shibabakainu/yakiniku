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
            font-size: 130%;
        }
    </style>
</head>

<body>
    <div class="wrap">
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
                <tr class="target" data-category="AI" bgcolor="#ffffff">
                    <td style="text-align: left; font-size: 180%; padding: 10px;"><a href="./detail.php" class="contentTitle">ChatGPTに聞いてみた！</a></td>
                    <th class="contentBody">
                        ChatGPTに今話題のスクラム開発について聞いてみた！
                        <div style="text-align: right; padding: 10px;">
                            <button type="button" class="likeButton"> <!-- 高評価数の表示 -->
                                <span class="material-symbols-outlined">thumb_up</span><span>32</span>
                            </button>
                            <button type="button" class="commentButton"> <!-- コメント数の表示 -->
                                <span class="material-symbols-outlined">comment</span><span>3</span>
                            </button>
                        </div>
                        <p class="timeStamp" style="color: #666;"><img src="./images/calendar(16).jpeg"> 2024/04/25</p>
                    </th>
                </tr>
                <tr class="target" data-category="AI" bgcolor="#ffffff">
                    <td style="text-align: left; font-size: 180%; padding: 10px;"><a href="./detail.php" class="contentTitle">「ゼロから始める機械学習」: 機械学習入門ガイド</a></td>
                    <th class="contentBody">
                        この記事では、機械学習の基本から応用までを解説します。アルゴリズム、データセット、モデルの選択方法などについて詳しく説明します。
                        <div style="text-align: right; padding: 10px;">
                            <button type="button" class="likeButton"> <!-- 高評価数の表示 -->
                                <span class="material-symbols-outlined">thumb_up</span><span>89</span>
                            </button>
                            <button type="button" class="commentButton"> <!-- コメント数の表示 -->
                                <span class="material-symbols-outlined">comment</span><span>5</span>
                            </button>
                        </div>
                        <p class="timeStamp" style="color: #666;"><img src="./images/calendar(16).jpeg"> 2024/03/25</p>
                    </th>
                </tr>
                <tr class="target" data-category="Web" bgcolor="#ffffff">
                    <td style="text-align: left; font-size: 180%; padding: 10px;"><a href="./detail.php" class="contentTitle">「最新のフロントエンド開発トレンド」: 2023年版</a></td>
                    <th class="contentBody">
                        フロントエンド開発の最新トレンドを紹介する記事です。Webコンポーネント、TypeScript、モバイルフレームワークなどに焦点を当てています。
                        <div style="text-align: right; padding: 10px;">
                            <button type="button" class="likeButton"> <!-- 高評価数の表示 -->
                                <span class="material-symbols-outlined">thumb_up</span><span>12</span>
                            </button>
                            <button type="button" class="commentButton"> <!-- コメント数の表示 -->
                                <span class="material-symbols-outlined">comment</span><span>1</span>
                            </button>
                        </div>
                        <p class="timeStamp" style="color: #666;"><img src="./images/calendar(16).jpeg"> 2024/01/04</p>
                    </th>
                </tr>
                <tr class="target" data-category="AWS" bgcolor="#ffffff">
                    <td style="text-align: left; font-size: 180%; padding: 10px;"><a href="./detail.php" class="contentTitle">「サーバーレスアーキテクチャの実践的ガイド」: AWS Lambda、Azure Functions、Google Cloud Functionsの比較</a></td>
                    <th class="contentBody">
                        サーバーレスアーキテクチャの選択肢と、それぞれのプラットフォームでの実装方法を比較する記事です。関数のデプロイ、スケーリング、コストなどについて詳しく解説します。
                        <div style="text-align: right; padding: 10px;">
                            <button type="button" class="likeButton"> <!-- 高評価数の表示 -->
                                <span class="material-symbols-outlined">thumb_up</span><span>56</span>
                            </button>
                            <button type="button" class="commentButton"> <!-- コメント数の表示 -->
                                <span class="material-symbols-outlined">comment</span><span>4</span>
                            </button>
                        </div>
                        <p class="timeStamp" style="color: #666;"><img src="./images/calendar(16).jpeg"> 2023/12/25</p>
                    </th>
                </tr>
                <tr class="target" data-category="C" bgcolor="#ffffff">
                    <td style="text-align: left; font-size: 180%; padding: 10px;"><a href="./detail.php" class="contentTitle">初心者向けC言語入門ガイド</a></td>
                    <th class="contentBody">
                        本記事は、プログラミング初心者向けにC言語の基本を解説する入門ガイドです。
                        <div style="text-align: right; padding: 10px;">
                            <button type="button" class="likeButton"> <!-- 高評価数の表示 -->
                                <span class="material-symbols-outlined">thumb_up</span><span>63</span>
                            </button>
                            <button type="button" class="commentButton"> <!-- コメント数の表示 -->
                                <span class="material-symbols-outlined">comment</span><span>11</span>
                            </button>
                        </div>
                        <p class="timeStamp" style="color: #666;"><img src="./images/calendar(16).jpeg"> 2023/12/14</p>
                    </th>
                </tr>
                <tr class="target" data-category="Python" bgcolor="#ffffff">
                    <td style="text-align: left; font-size: 180%; padding: 10px;"><a href="./detail.php" class="contentTitle">Pythonで実現する効率的なデータサイエンス</a></td>
                    <th class="contentBody">
                        Pythonの持つ豊富な機能を駆使して効率的にデータサイエンスを行う方法を解説します。
                        <div style="text-align: right; padding: 10px;">
                            <button type="button" class="likeButton"> <!-- 高評価数の表示 -->
                                <span class="material-symbols-outlined">thumb_up</span><span>74</span>
                            </button>
                            <button type="button" class="commentButton"> <!-- コメント数の表示 -->
                                <span class="material-symbols-outlined">comment</span><span>12</span>
                            </button>
                        </div>
                        <p class="timeStamp" style="color: #666;"><img src="./images/calendar(16).jpeg"> 2023/11/22</p>
                    </th>
                </tr>
                <tr class="target" data-category="Java" bgcolor="#ffffff">
                    <td style="text-align: left; font-size: 180%; padding: 10px;"><a href="./detail.php" class="contentTitle">Javaによる効率的な並行プログラミング</a></td>
                    <th class="contentBody">
                        Javaには、複数の処理を同時に行うための強力な機能があります。本記事では、Javaを使って効率的に並行プログラミングを行う方法を解説します。
                        <div style="text-align: right; padding: 10px;">
                            <button type="button" class="likeButton"> <!-- 高評価数の表示 -->
                                <span class="material-symbols-outlined">thumb_up</span><span>35</span>
                            </button>
                            <button type="button" class="commentButton"> <!-- コメント数の表示 -->
                                <span class="material-symbols-outlined">comment</span><span>8</span>
                            </button>
                        </div>
                        <p class="timeStamp" style="color: #666;"><img src="./images/calendar(16).jpeg"> 2023/10/19</p>
                    </th>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>

<?php
require_once __DIR__ . '/footer.php';
?>
