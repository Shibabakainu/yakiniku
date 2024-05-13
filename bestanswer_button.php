<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <style>
        .BestAnswer {
            color: #888;
            font-size: 1.5em;
            margin-bottom: 20px;
            background-color: transparent;
            border: 0.1em solid;
            border-radius: 1em;
            padding: 0.333em 1em 0.25em;
            line-height: 1.2em;
            box-shadow: 0 0.25em 1em -0.25em;
            cursor: pointer;
            transition: color 150ms ease-in-out, background-color 150ms ease-in-out, transform 150ms ease-in-out;
            outline: 0;
            margin-right: 30px;
        }

        .BestAnswer:hover {
            color: deepskyblue;
        }

        .BestAnswer.clicked {
            color: #ffffff;
            background-color: deepskyblue;
            border-color: deepskyblue;
        }

    </style>
</head>
<body>
    <div style="text-align: right;">
        <button class="BestAnswer">ベストアンサーに選ぶ</button>
    </div>
</body>
</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var BestAnswers = document.getElementsByClassName('BestAnswer');
        Array.from(BestAnswers).forEach(function(BestAnswer) {
            BestAnswer.addEventListener('click', function() {
                BestAnswer.classList.toggle('clicked');
                location.href = 'question_list.php'; // 遷移先のURLを指定
            });
        });
    }, false);
</script>
