<?php
require_once __DIR__ . '/newNav.php';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>質問一覧</title>
    <link rel="stylesheet" href="styles/view.css">
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
            width: 1100px;
        }

        th {
            font-size: 25px;
            width: 100px;
        }

        .contentTitle {
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="wrap">
        <h1>質問一覧</h1>
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
                    <td>質問タイトル</td>
                    <th>未/済</th>
                </tr>
                <tr bgcolor="#ffffff" class="target" data-category="C">
                    <td><a href="./answer.php" class="contentTitle"><span style="color: black;">C言語のループ処理について</span></a></td>
                    <th>未回答</th>
                </tr>
                <tr bgcolor="#ffffff" class="target" data-category="AI">
                    <td><a href="./answer.php" class="contentTitle"><span style="color: black;">機械学習について</span></a></td>
                    <th>回答済</th>
                </tr>
                <tr bgcolor="#ffffff" class="target" data-category="Python">
                    <td><a href="./answer.php" class="contentTitle"><span style="color: black;">Pythonでリスト内包表記を使うと何が便利なの？</span></a></td>
                    <th>回答済</th>
                </tr>
                <tr bgcolor="#ffffff" class="target" data-category="Java">
                    <td><a href="./answer.php" class="contentTitle"><span style="color: black;">Javaのラムダ式とは何ですか</span></a></td>
                    <th>未回答</th>
                </tr>
                <tr bgcolor="#ffffff" class="target" data-category="Web">
                    <td><a href="./answer.php" class="contentTitle"><span style="color: black;">CookieとSessionの違いは何ですか？それぞれどのように使用されますか？</span></a></td>
                    <th>未回答</th>
                </tr>
                <tr bgcolor="#ffffff" class="target" data-category="AWS">
                    <td><a href="./answer.php" class="contentTitle"><span style="color: black;">AWSとは何ですか 主なサービスや利点は何ですか</span></a></td>
                    <th>回答済</th>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>

<?php
require_once __DIR__ . '/footer.php';
?>
