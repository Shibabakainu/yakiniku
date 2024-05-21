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
    </style>
</head>

<body>
    <div class="wrap">
    <?php
    if (isset($_GET['id'])) {
        $user_id = $_GET['id'];
        $sql = "SELECT * FROM users WHERE id = '$user_id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            // ユーザーのデータを表示
            echo "<h1>" . htmlspecialchars($user['name']) . "</h1>";
            echo "<img src='" . htmlspecialchars($user['profile_image']) . "' alt='Profile Picture'>";
            echo "<p>メール: " . htmlspecialchars($user['email']) . "</p>";
            echo "<p>学科: " . htmlspecialchars($user['course']) . "</p>";
            echo "<p>一言: " . htmlspecialchars($user['singleword']) . "</p>";
            echo "<p>参加時点: " . htmlspecialchars($user['created_at']) . "</p>";
        } else {
            echo "User not found.";
        }
    } else {
        echo "No user ID specified.";
    }    
    ?>

    <!-- 編集ボタンをユーザーのデータの下に配置 -->
    <a href='identification.php' class="edit_button">編集</a>

    <br><br> <!-- ボタンとテーブルの間に適切な間隔を設定 -->

    <!-- 投稿作品一覧テーブル -->
    <p class="view_p">投稿作品一覧</p>
    <table border="1" style="border-collapse: collapse">
        <tr bgcolor="#e6e6fa">
            <td width="400px">タイトル</td>
            <td width="800px">作品の説明</td>
        </tr>
        <?php
        for ($i = 0; $i < 4; $i++) {
            if ($i % 2 == 0) {
                echo "<tr bgcolor=" . "#ffffff" .">";
                echo '<td><a href="./detail.php"><span style="color: black;">あいうえお</span></a></td>';   // タイトル
                echo "<th>あかさたなはまやらわ</th>";   // 作品詳細
                echo "</tr>";
            } else {
                echo "<tr bgcolor=" . "#f5f5f5" . ">";
                echo '<td><a href="./detail.php"><span style="color: black;">abcde</span></a></td>';    // タイトル
                echo "<th>abcdefghijklmn</th>"; // 作品詳細
                echo "</tr>";
            }
        }
        ?>
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
        <tr bgcolor="f5f5f5">
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
        <tr bgcolor="f5f5f5">
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