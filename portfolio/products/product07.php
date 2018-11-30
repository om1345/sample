<!DOCTYPE html>
<html lang = "ja">

<head>
  <meta charset="utf-8">
  <title>組み込み関数</title>
</head>

<body>
<?php
  $x = 33.4;
  echo "33.4<br>";
  echo "小数点以下を切り上げると".ceil($x)."<br>";
  echo "小数点以下を切り捨てると".floor($x)."<br>";
  echo "四捨五入すると".round($x)."<br>";

  echo "1~100でランダムの数値<br>";
  echo rand(1, 100)."<br>";

  $s1 = "coffee";
  $s2 = "コーヒー";

  echo "coffeeの文字数は".strlen($s1)."<br>";
  echo "コーヒーの文字数は".mb_strlen($s2)."<br>";


?>
</body>
</html>
