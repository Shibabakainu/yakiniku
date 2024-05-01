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
                font-size: 50px;
                width: 1100px;
            }
            th{
                font-size: 25px;
                width: 100px;
            }
            .view_p{
                font-size: 300%;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <br>
        <p class="view_p">質問一覧</p>
        <table border="1" style="border-collapse: collapse">
            <tr bgcolor="#e6e6fa">
                <td>質問タイトル</td>
                <th>未/済</th>
            </tr>
            <tr>
                <td><a href="./answer.php"><span style="color: black;">あいうえお</span></a></td>
                <th>未回答</th>
            </tr>
            <tr bgcolor="#f5f5f5">
                <td><a href="./answer.php"><span style="color: black;">abcde</span></a></td>
                <th>回答済</th>
            </tr>
        </table>
    </body>
</html>

<?php
    require_once __DIR__ . '/footer.php';
?>
