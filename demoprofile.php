<!DOCTYPE html>
<html lang="ja">
<?php
require_once __DIR__ . '/newNav.php'; // ルートディレクトリからの相対パスでnav.phpを読み込む
?>

<head>
    <meta charset="UTF-8">
    <title>マイプロフィール</title>
    <style>
        img.profile_image {
            max-width: 200px;
            /* 最大幅を設定 */
            max-height: 200px;
            /* 最大高さを設定 */
            width: 200px;
            /* 幅を自動調整:auto */
            height: 200px;
            /* 高さを自動調整:auto */
            object-fit: cover;
            /* 画像を保持し、アスペクト比を維持しつつ要素全体にスケーリング */
            border-radius: 50%;
            /* 円形にする */
        }

        body {
            margin-top: 50px;
            margin-bottom: 50px;
            margin-left: 0px;
            margin-right: 0px;
            padding: 0;
        }

        .edit_button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;

            cursor: pointer;
            border-radius: 12px;
        }

        .edit_button:hover {
            background-color: green;
            border: none;
            color: white;

            cursor: pointer;
            border-radius: 12px;
        }
        .wrap {
            /*width: 80%;
            margin: auto;*/
            background-color: #c4e4f5;
            padding: 50px 30px 30px 30px;
            height: 100%;
        }

        .profile {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="wrap">
        <div class="profile">
            <?php
            // フォームからの送信があるかどうかをチェック
            if (isset($_POST['name']) && isset($_POST['singleword']) && isset($_POST['icon_path'])) {
                // フォームからの送信がある場合は送信されたデータを表示
                $name = $_POST['name'];
                $course = "ITエキスパート学科";
                $singleword = $_POST['singleword'];
                $icon_path = $_POST['icon_path'];
            } else {
                // フォームからの送信がない場合は仮のデータを表示
                $name = "ジョリーパスタ";
                $course = "ITエキスパート学科";
                $singleword = "コロナは風と共に去りぬ";
                $icon_path = "profile/profileicon/6625c9866671f.jpg"; // アイコンの画像パス
            }

            // ユーザーのデータを表示
            echo "<p><strong>アイコン:</strong><br><img src='$icon_path' class='profile_image'></p>";
            echo "<p><strong>名前:</strong> $name</p>";
            echo "<p><strong>学科:</strong> $course</p>";
            echo "<p><strong>一言:</strong> $singleword</p>";
            ?>

            <!-- 編集ボタンをユーザーのデータの下に配置 -->
            <a href='identification.php' class="edit_button">編集</a>

            <br><br> <!-- ボタンとテーブルの間に適切な間隔を設定 -->

        </div>

    <!-- 投稿作品一覧テーブル -->
    <p class="view_p">投稿作品一覧</p>
    <table border="1" style="border-collapse: collapse">
        <tr bgcolor="#e6e6fa">
            <td width="400px">タイトル</td>
            <td width="800px">作品の説明</td>
        </tr>
        <tr bgcolor="ffffff">
            <td><a href="Poster.php"><span style="color: black;">ChatGPTに聞いてみた！</span></a></td>
            <th>
                ChatGPTに今話題のスクラム開発について聞いてみた！
            </th>
        </tr>
        <tr bgcolor="ffffff">
            <td><a href="question_detail.php"><span style="color: black;">「ゼロから始める機械学習」: 機械学習入門ガイド</span></a></td>
            <th>
                この記事では、機械学習の基本から応用までを解説します。アルゴリズム、データセット、モデルの選択方法などについて詳しく説明します。
            </th>
        </tr>
        <tr bgcolor="ffffff">
            <td><a href="question_detail.php"><span style="color: black;">「最新のフロントエンド開発トレンド」: 2023年版</span></a></td>
            <th>
                フロントエンド開発の最新トレンドを紹介する記事です。Webコンポーネント、TypeScript、モバイルフレームワークなどに焦点を当てています。
            </th>
        </tr>
        <tr bgcolor="ffffff">
            <td><a href="question_detail.php"><span style="color: black;">初心者向けC言語入門ガイド</span></a></td>
            <th>
                本記事は、プログラミング初心者向けにC言語の基本を解説する入門ガイドです。
            </th>
            </tr>
    </table>

    <p class="view_p">作成した質問一覧</p>
    <table border="1" style="border-collapse: collapse">
        <tr bgcolor="#e6e6fa">
            <td width="400px">タイトル</td>
            <td width="800px">質問の内容</td>
        </tr>
        <tr bgcolor="ffffff">
            <td><a href="Poster.php"><span style="color: black;">pythonの課題について</span></a></td>
            <th>
                辞書型がよくわかりません
            </th>
        </tr>
        <tr bgcolor="ffffff">
            <td><a href="question_detail.php"><span style="color: black;">「急募」就活の必勝法</span></a></td>
            <th>
                共に働けるイメージを沸かすしかないのでしょうか？
            </th>
        </tr>
        <tr bgcolor="ffffff">
            <td><a href="question_detail.php"><span style="color: black;">おすすめの本を教えてください</span></a></td>
            <th>
                おすすめの本を教えてください
            </th>
        </tr>
        <tr bgcolor="ffffff">
        <td><a href="question_detail.php"><span style="color: black;">AIに愛を教えたい</span></a></td>
        <th>
            どのような愛が適切だと思いますか？(恋愛、隣人愛等)
        </th>
        </tr>
    </table>
    </div>
</body>
<?php
require_once __DIR__ . '/footer.php';
?>

</html>
