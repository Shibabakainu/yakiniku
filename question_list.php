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
                <tr bgcolor="#ffffff" class="target" data-category="C" style="text-align: left;">
                    <td><a href="./answer.php" class="contentTitle">C言語のループ処理について</a></td>
                    <th>未回答</th>
                </tr>
                <tr bgcolor="#ffffff" class="target" data-category="AI" style="text-align: left;">
                    <td><a href="./answer.php" class="contentTitle">機械学習について</a></td>
                    <th>回答済</th>
                </tr>
                <tr bgcolor="#ffffff" class="target" data-category="Python" style="text-align: left;">
                    <td><a href="./answer.php" class="contentTitle">Pythonでリスト内包表記を使うと何が便利なの？</a></td>
                    <th>回答済</th>
                </tr>
                <tr bgcolor="#ffffff" class="target" data-category="Java" style="text-align: left;">
                    <td><a href="./answer.php" class="contentTitle">Javaのラムダ式とは何ですか</a></td>
                    <th>未回答</th>
                </tr>
                <tr bgcolor="#ffffff" class="target" data-category="Web" style="text-align: left;">
                    <td><a href="./answer.php" class="contentTitle">CookieとSessionの違いは何ですか？それぞれどのように使用されますか？</a></td>
                    <th>未回答</th>
                </tr>
                <tr bgcolor="#ffffff" class="target" data-category="AWS" style="text-align: left;">
                    <td><a href="./answer.php" class="contentTitle">AWSとは何ですか 主なサービスや利点は何ですか</a></td>
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
