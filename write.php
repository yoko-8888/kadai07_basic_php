<!-- データ登録 -->

<?php
// 項目分を作成
$name = $_POST["name"];
$name = $_POST["email"];
$name = $_POST["memo"];

// カンマ区切りで文字を表示する
$c    = ",";
// aaaa,bbbb,cccc↓  「.（ドット）は「接続」の意味＝変数と文字をくっつけたい場合」
// ここでは「name」「email」「memo」をカンマで区切って表示という指示
$str    = $name.$c.$email.$c.$memo;  

// fileという変数に、fopen関数を使って2つの引数を()内に入れる,ここではdata.csvというファイルを使う
// "a"は、追加書き込みadd。”r”は、読み込みread
// 下記3行はセットで考える
// fwrite関数に$fileオブジェクトを渡す、$str文字列を渡すとそのままこのファイルに1行指定文字が入る
// 「option + ¥」キーでバックスラッシュ表示,"\n"は改行コード
$file = fopen("data.csv","a");
fwrite($file, $str."\n");
fclose($file);

// 入力→処理されたらまた元のページに戻る、「L」は必ず大文字
header("Location: index.php");
exit;