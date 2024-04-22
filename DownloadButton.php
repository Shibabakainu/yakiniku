<button onclick="downloadFile()">ファイルをダウンロード</button>

<!-- JavaScriptで作成したダウンロード機能のスクリプト -->
<script>
    function downloadFile() {
        // サーバーサイドからファイルを取得するリクエストを送信
        // ()の中にサーバーサイドのファイルを所有するエンドポイントのURLを記述
        fetch('http://localhost/yakiniku/DownloadPath.php')
            .then(response => response.blob())
            .then(blob => {
                // ファイルをダウンロード
                const url = window.URL.createObjectURL(blob);   // 一時的なダウンロードリンクURLを作成
                const a = document.createElement('a');  // タグの作成
                a.href = url;
                a.download = 'dummy.txt'; // ダウンロード時のファイル名
                a.click();
                window.URL.revokeObjectURL(url);    // 作成した一時的なURLを無効化
            });
    }
</script>
