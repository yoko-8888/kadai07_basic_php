<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート結果表示</title>
</head>
<body>

<h1>アンケート結果一覧</h1>
<!-- chatGPTを参考にしたが合っているのか。。。？ -->
<?php
// data.csvを読み込む
$file = fopen("data.csv", "r");

if ($file) {
    // ファイルの内容を1行ずつ取得して処理
    while (($line = fgets($file)) !== false) {
        // カンマで区切って配列にする
        $data = explode(",", $line);

        // 配列の確認（必要ならコメントアウトを外して使用）
        // var_dump($data);

        // 配列からデータを表示
        echo "名前: " . htmlspecialchars($data[0], ENT_QUOTES, 'UTF-8') . "<br>";
        echo "Email: " . htmlspecialchars($data[1], ENT_QUOTES, 'UTF-8') . "<br>";
        echo "備考: " . nl2br(htmlspecialchars($data[2], ENT_QUOTES, 'UTF-8')) . "<br><hr>";
    }
    fclose($file);
} else {
    echo "ファイルを開くことができませんでした。";
}
?>

</body>
</html>