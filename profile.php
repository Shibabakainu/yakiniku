<?php
session_start();
?>
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

        .wrap {
            width: 80%;
            margin: auto;
            background-color: #c4e4f5;
            padding: 50px 0 0 30px;
            height: 100%;
        }

        .profile {
            text-align: center;
        }

        .contentTitle {
            color: black;
            text-align: left;
            padding: 0px;
            text-decoration:none;
            transition: color .3s;
            text-decoration: none;
            background-image: linear-gradient(90deg, deepskyblue, deepskyblue);
            background-size: 0 1px;
            background-position: left bottom;
            background-repeat: no-repeat;
            transition: all .3s;
        }

        .contentTitle:hover {
            color: deepskyblue;
            background-size: 100% 1px;
        }
    </style>
</head>

<body>
    <div class="wrap">
            <div class="profile">
            <?php
            include 'db_connect.php'; // Include the database connection script

             // Determine the user ID to display
            if (isset($_GET['id'])) {
                $user_id = $_GET['id'];
            } elseif (isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];
            } else {
                echo "No user ID specified.";
                exit; // Stop further execution if no user ID is available
            }

            // Fetch user data
            $sql = "SELECT * FROM users WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                // Display user data
                echo "<h1><font size=7>" . htmlspecialchars($user['name']) . "</font></h1>";
                echo "<img src='profile/profileicon/" . htmlspecialchars($user['profile_image']) . "' alt='Profile Picture' class='profile_image'>";
                echo "<p><font size=5><b>メール</b>: " . htmlspecialchars($user['email']) . "</font></p>";
                echo "<p><font size=5><b>学科</b>: " . htmlspecialchars($user['course']) . "</font></p>";
                echo "<p><font size=5><b>一言</b>: " . htmlspecialchars($user['singleword']) . "</font></p>";
                echo "<p><font size=5><b>参加時点</b>: <font color=grey>" . htmlspecialchars($user['created_at']) . "</font></font></p>";
            } else {
                echo "User not found.";
            }
            $stmt->close();
            $conn->close();
            ?>

            <!-- 編集ボタンをユーザーのデータの下に配置 -->
            <a href='identification.php' class="edit_button">編集</a>
        </div>

    <br><br> <!-- ボタンとテーブルの間に適切な間隔を設定 -->

    <!-- 投稿作品一覧テーブル -->
    <p class="view_p">投稿作品一覧</p>
    <table border="1" style="border-collapse: collapse">
        <tr bgcolor="#e6e6fa">
            <td width="400px">タイトル</td>
            <td width="800px">作品の説明</td>
        </tr>
        <tr bgcolor="ffffff">
            <td><a href="Poster.php" class="contentTitle" class="contentTitle">ChatGPTに聞いてみた！</span></a></td>
            <th style="text-align: left;">
                ChatGPTに今話題のスクラム開発について聞いてみた！
            </th>
        </tr>
        <tr bgcolor="ffffff">
            <td><a href="question_detail.php" class="contentTitle">「ゼロから始める機械学習」: 機械学習入門ガイド</span></a></td>
            <th style="text-align: left;">
                この記事では、機械学習の基本から応用までを解説します。アルゴリズム、データセット、モデルの選択方法などについて詳しく説明します。
            </th>
        </tr>
        <tr bgcolor="ffffff">
            <td><a href="question_detail.php" class="contentTitle">「最新のフロントエンド開発トレンド」: 2023年版</span></a></td>
            <th style="text-align: left;">
                フロントエンド開発の最新トレンドを紹介する記事です。Webコンポーネント、TypeScript、モバイルフレームワークなどに焦点を当てています。
            </th>
        </tr>
        <tr bgcolor="ffffff">
            <td><a href="question_detail.php" class="contentTitle">初心者向けC言語入門ガイド</span></a></td>
            <th style="text-align: left;">
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
            <td><a href="Poster.php" class="contentTitle">pythonの課題について</a></td>
            <th style="text-align: left;">
                辞書型がよくわかりません
            </th>
        </tr>
        <tr bgcolor="f5f5f5">
            <td><a href="question_detail.php" class="contentTitle">「急募」就活の必勝法</a></td>
            <th style="text-align: left;">
                共に働けるイメージを沸かすしかないのでしょうか？
            </th>
        </tr>
        <tr bgcolor="ffffff">
            <td><a href="question_detail.php" class="contentTitle">おすすめの本を教えてください</a></td>
            <th style="text-align: left;">
                おすすめの本を教えてください
            </th>
        </tr>
        <tr bgcolor="f5f5f5">
        <td><a href="question_detail.php" class="contentTitle">AIに愛を教えたい</a></td>
        <th style="text-align: left;">
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
