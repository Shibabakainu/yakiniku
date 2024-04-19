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
        <p class="view_p">投稿作品一覧</p>
        <table border="1" style="border-collapse: collapse">
            <tr bgcolor="#e6e6fa">
                <td width="400px">タイトル</td>
                <td width="800px">作品の説明</td>
            </tr>
            <?php
                for($i=0; $i<4; $i++){
                    if($i % 2 == 0){
                        echo "<tr>";
                        echo '<td><a href="./detail.php"><span style="color: black;">あいうえお</span></a></td>';   // タイトル
                        echo "<th>あかさたなはまやらわ</th>";   // 作品詳細
                        echo "</tr>";
                    }else{
                        echo "<tr bgcolor="."#f5f5f5".">";
                        echo '<td><a href="./detail.php"><span style="color: black;">abcde</span></a></td>';    // タイトル
                        echo "<th>abcdefghijklmn</th>"; // 作品詳細
                        echo "</tr>";
                    }
                }
            ?>
        </table>
    </body>
</html>

<?php
    require_once __DIR__ . '/footer.php';
?>
