<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート送信画面</title>
</head>
<body>

<?php
    $d = date("Y年m月d日 H時i分s秒");
echo $d;
$d = date("s");
if($d >= 10){
    echo '<body style="background:pink;">';
}else{
    echo '<body style="background:green;">';
}

?>

<!-- HTML -->
    <h1>アンケートフォーム</h1>

    <form action="write.php" method="post"><br>
        名前：<input type="text" name="name"><br>
        Email:<input type="text" name="email"><br>
        備考：<textarea name="memo" cols="30" rows="10"></textarea><br>
        <button type="submit">送信</button>
    
    </form>

    
</body>
</html>