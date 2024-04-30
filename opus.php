<?php
require_once __DIR__ . '/nav.php';
?>

<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>プログラミング情報共有サイト</title>
    <link rel="stylesheet" href="styles/view.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style type="text/css">
        table {
            margin: auto;
            margin-top: 50px;
            margin-bottom: 50px;
            padding: 10px;
        }

        tr {
            height: 100px;
            text-align: center;
        }

        td {
            font-size: 110%;
            text-align: center;
        }

        th {
            font-size: 90%;
        }

        .view_p {
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
        <tr>
            <td><a href="./FreshPick.php"><span style="color: black;">Fresh Pick</span></a></td>
            <th>
                季節を選択して、旬の食材を学びましょう<br>
                <p><img src="./images/calendar(16).jpeg"> 2024/04/25</p>
                <div style="text-align: right;">
                    <button type="button" class="likeButton">
                        <span class="material-symbols-outlined">thumb_up</span>
                        <span>56</span>
                    </button>
                </div>
            </th>
        </tr>
        <tr>
            <td><a href="./FreshPick.php"><span style="color: black;">デジタル迷宮の挑戦</span></a></td>
            <th>
                冒険者となって、プログラミングの力を使って迷宮内のパズルを解き、敵と戦いながら宝物を探してください！。<br>
                <p><img src="./images/calendar(16).jpeg"> 2024/03/25</p>
                <div style="text-align: right;">
                    <button type="button" class="likeButton">
                        <span class="material-symbols-outlined">thumb_up</span>
                        <span>76</span>
                    </button>
                </div>
            </th>
        </tr>
        <tr>
            <td><a href="./FreshPick.php"><span style="color: black;">Strategic Tic-Tac-Toe</span></a></td>
            <th>
                まるばつに戦略的要素を加えたゲーム。9つの小さなボードを持つ大きなボード上で対戦し、前回の相手のマークの位置によって次の手の選択が制限されます。<br>
                <p><img src="./images/calendar(16).jpeg"> 2024/03/01</p>
                <div style="text-align: right;">
                    <button type="button" class="likeButton">
                        <span class="material-symbols-outlined">thumb_up</span>
                        <span>22</span>
                    </button>
                </div>
            </th>
        </tr>
        <tr>
            <td><a href="./FreshPick.php"><span style="color: black;">知識の闘技場</span></a></td>
            <th>
                さまざまなカテゴリーのクイズを解き、正解率やスピードで競い合います。ランキング上位を目指し、知識の力を証明しよう！
                <p><img src="./images/calendar(16).jpeg"> 2023/12/25</p>
                <div style="text-align: right;">
                    <button type="button" class="likeButton">
                        <span class="material-symbols-outlined">thumb_up</span>
                        <span>48</span>
                    </button>
                </div>
            </th>
        </tr>
    </table>
</body>


</html>

<?php
require_once __DIR__ . '/footer.php';
?>