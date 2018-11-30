<?php
    session_start();
?>

<!DOCTYPE html>
<html lang = "ja">

<head>
  <meta charset="utf-8">
  <title>ローン返済</title>
</head>

<body>
  <?php
    //セッションから値を戻す
    $debt = $_SESSION['debt'];
    //年利(%)を月利(%)にして計算用に1/100にするので1/1200
    $rate = ($_SESSION['rate']/1200);
    $month = $_SESSION['month'];

    /* 月利(1+月利)^返済回数=A、(1+月利)^返済回数－1=Bとすると
    借入額×A/B=毎月の返済額
    */

    $A = $rate * pow((1+$rate), $month);
    $B = pow((1+$rate), $month) - 1;
    //$B=0の時エラーになるのを回避
    if($B){
      $monthpay = $debt*$A/$B;
    }else{
    $monthpay = $debt / $month;
    }

    //表示用に丸める
    $monthpayshow = round($monthpay);
    //3桁でカンマを付ける
    $monthpayshow = number_format($monthpayshow);

    echo "毎月の返済額：{$monthpayshow}円";

  session_destroy();
  ?>
  <p><a href="../index.html">トップページへ</a></p>
</body>

</html>
