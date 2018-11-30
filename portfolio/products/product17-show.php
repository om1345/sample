<!DOCTYPE html>
<html lang = "ja">

<head>
  <meta charset="utf-8">
  <title>正規表現</title>
</head>

<body>
  <?php
    $number = $_POST["number"];
    if (preg_match('/^[0-9]{7}$/', $number)) {
      echo "7桁の半角数字{$number}を確認しました";
    } else {
      echo "入力エラー";
    }
  ?>
  <p><a href="../index.html">トップページへ</a></p>
</body>
</html>
