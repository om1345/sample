<!DOCTYPE html>
<html lang = "ja">

<head>
  <meta charset="utf-8">
  <title>複利計算</title>
</head>

<body>
  <?php

    $principal = $_POST['principal'];
    $interest = 1 + ($_POST['interest']/100);


    for ($i = 1; $i <= $_POST['year']; $i++) {
      $principal = $principal * $interest;
      $principalshow = round($principal, 2);
      echo "{$i}年目：{$principalshow}円<br>";
    }
  ?>
  <p><a href="../index.html">トップページへ</a></p>
</body>

</html>
