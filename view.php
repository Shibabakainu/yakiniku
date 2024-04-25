<?php
require_once __DIR__ . '/nav.php';
?>

<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>プログラミング情報共有サイト</title>
        <link rel="stylesheet" href="styles/view.css">
        <style type="text/css">
            table{
                margin: auto;
                margin-top: 50px;
                margin-bottom: 50px;
            }
            tr{
                height: 100px;
                text-align: center;
            }
            td{
                font-size: 200%;
            }
            th{
                font-size: 100%;
            }
            .view_p{
                font-size: 300%;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <div class="wrap">
            <p class="view_p">投稿作品一覧</p>
            <table border="1" style="border-collapse: collapse">
                <tr bgcolor="#e6e6fa">
                    <td width="400px">タイトル</td>
                    <td width="800px">作品の説明</td>
                </tr>
                <tr>
                    <td><a href="./detail.php"><span style="color: black;">ChatGPTに聞いてみた！</span></a></td>
                    <th>
                        ChatGPTに今話題のデイリースクラムについて聞いてみた！
                        <?php
                            require_once __DIR__ . '/GoodButton.php';   // グッドボタンの呼び出し
                        ?>
                    </th>
                </tr>
                <tr>
                    <td><a href="./detail.php"><span style="color: black;">「ゼロから始める機械学習」: 機械学習入門ガイド</span></a></td>
                    <th>この記事では、機械学習の基本から応用までを解説します。アルゴリズム、データセット、モデルの選択方法などについて詳しく説明します。</th>
                </tr>
                <tr>
                    <td><a href="./detail.php"><span style="color: black;">「最新のフロントエンド開発トレンド」: 2023年版</span></a></td>
                    <th>フロントエンド開発の最新トレンドを紹介する記事です。Webコンポーネント、TypeScript、モバイルフレームワークなどに焦点を当てています。</th>
                </tr>
                <tr>
                    <td><a href="./detail.php"><span style="color: black;">「サーバーレスアーキテクチャの実践的ガイド」: AWS Lambda、Azure Functions、Google Cloud Functionsの比較</span></a></td>
                    <th>サーバーレスアーキテクチャの選択肢と、それぞれのプラットフォームでの実装方法を比較する記事です。関数のデプロイ、スケーリング、コストなどについて詳しく解説します。</th>
                </tr>
            </table>
        </div>
    </body>
</html>

<?php
    require_once __DIR__ . '/footer.php';
?>

