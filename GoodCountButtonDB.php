<!-- HTML部分 -->
<link rel="stylesheet" href="styles/GoodCountButtonDB.css"> <!-- GoodCountButton.cssを読み込む -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"> <!-- Google Fontsからアイコンフォントを読み込む -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> <!-- もう1つのGoogle Fontsからアイコンフォントを読み込む -->

<div style="text-align: right;"> <!-- ボタンを右揃えにする -->
    <!-- iinebuttonクラスを持つボタン要素 -->
    <button type="button" class="iinebutton" id="iine">
        <span class="material-symbols-outlined">thumb_up</span> <!-- アイコンとしてthumb_upを表示 -->
        <span id="iineCount">0</span> <!-- 初期値として0を表示するカウント -->
    </button>
</div>

<!-- JavaScript部分 -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // iinebuttonクラスを持つすべてのボタン要素を取得
        var iineButtons = document.getElementsByClassName('iinebutton');
        // 各ボタンに対して以下を実行
        Array.from(iineButtons).forEach(function(iineButton) {
            let iineCount = 0; // カウントの初期値を設定
            let iineCountSpan = iineButton.querySelector('#iineCount'); // 対応するiineCountSpanを取得
            // クリックイベントを追加
            iineButton.addEventListener('click', function() {
                // クリックされたボタンの状態に応じて処理を行う
                if (iineCountSpan.classList.contains('liked')) { // もしiineCountSpanにlikedクラスが含まれていれば
                    iineCount--; // カウントを減らす
                    iineCountSpan.classList.remove('liked'); // likedクラスを削除する
                } else { // それ以外の場合
                    iineCount++; // カウントを増やす
                    iineCountSpan.classList.add('liked'); // likedクラスを追加する
                }
                iineCountSpan.textContent = iineCount; // カウントを表示する
            });
        });
    });
</script>
