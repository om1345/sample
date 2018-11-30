<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Test</title>

<?php

//ここに各種情報を入力
$host='';
$user = '';
$password = '';
$dbname='';

// DB接続
$db = new mysqli($host,$user,$password,$dbname);

if (!$db) {
    print("DB接続失敗<br>");
}

print("DB接続成功<br>");

// データ取得
$cmd = 'SELECT * FROM database1';
$result = mysqli_query($db, $cmd);
if (!$result) {
    print("データ取得失敗<br>");
}

// 取得した値を表示
while ($row = mysqli_fetch_assoc($result)) {
    print($row['id'].'<br>');
    print($row['name'].'<br>');
    print($row['price'].'<br>');
}

// DB切断
$closed_flag = mysqli_close($db);

if (!$closed_flag){
    print("DB切断失敗<br>");
}

print("DB切断成功<br>");

?>
</head>

<body>
</body>
</html>
