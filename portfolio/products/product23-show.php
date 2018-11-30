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
  <table border="1">
  <tr><th>返済月数</th><th>返済額</th><th>利息</th><th>元金</th><th>残高</th></tr>
  <?php
    //セッションから値を戻す
    $debt = $_SESSION['debt'];
    //年利(%)を月利(%)にして計算用に1/100にするので1/1200
    $rate = ($_SESSION['rate']/1200);
    $month = $_SESSION['month'];
    //利息の合計
    $totalinterest = 0;
    //返済額の合計
    $totalpay = 0;

    /* 月利(1+月利)^返済回数=A、(1+月利)^返済回数－1=Bとすると
    借入額×A/B=毎月の返済額
    */

    $A = $rate * pow((1+$rate), $month);
    $B = pow((1+$rate), $month) - 1;
    //$B=0の時エラーになるのを回避
    if($B){
      $pay = $debt*$A/$B;
    }else{
      $pay = $debt / $month;
    }

    //ローン返済処理を$month回繰り返す
    for ($i=1; $i<=$month; $i++) {
      //返済額>=残高(1+月利)の時の端数処理
      if($pay>=$debt*(1+$rate)) {
      $pay = $debt*(1+$rate);
      }
      //利息
      $interest = $debt * $rate;
      //元金
      $principal = $pay - $interest;
      //残高
      $debt = $debt - $principal;
      //合計利息
      $totalinterest = $totalinterest + $interest;
      //合計支払額
      $totalpay = $totalpay + $pay;

      //表示用に数字を丸めて3桁でカンマを付ける
      $payshow = round($pay);
      $payshow = number_format($payshow);
      $interestshow = round($interest);
      $interestshow = number_format($interestshow);
      $principalshow = round($principal);
      $principalshow = number_format($principalshow);
      $debtshow = round($debt);
      $debtshow = number_format($debtshow);
      $totalinterestshow = round($totalinterest);
      $totalinterestshow = number_format($totalinterestshow);
      $totalpayshow = round($totalpay);
      $totalpayshow = number_format($totalpayshow);



        //結果表示
        echo "<tr><td>{$i}</td><td>{$payshow}</td><td>{$interestshow}</td><td>{$principalshow}</td><td>{$debtshow}</td></tr>";
    }

    echo "<tr><td>累計</td><td>{$totalpayshow}</td><td>{$totalinterestshow}</td><td>0</td><td>0</td></tr>";

  session_destroy();
  ?>
  <p><a href="../index.html">トップページへ</a></p>
</body>

</html>
