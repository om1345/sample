<?php
    session_start();
?>

<!DOCTYPE html>
<html lang = "ja">

<head>
  <meta charset="utf-8">
  <title>借金返済</title>
</head>

<body>
  <table border="1">
  <tr><th>年数</th><th>利息</th><th>残高</th></tr>
  <?php
    //セッションから値を戻す
    $debt = $_SESSION['debt'];
    //年利を計算用に1/100
    $rate = ($_SESSION['rate']/100);
    $pay = $_SESSION['pay'];
    //払った利息の合計
    $totalinterest = 0;
  //入力した返済額で利息分を払えるか判定
    if ($debt * $rate >= $pay) {
      echo "その額では返済できません";
    }else{
      for ($i=1; $debt>0; $i++) {
        //利息
        $interest = $debt * $rate;
        //借金残額に利息を足して返済額を引く
        $debt = $debt + $interest - $pay;
        //借金残額を表示用に丸める
        $debtshow = round($debt);
        //3桁でカンマを付ける
        $debtshow = number_format($debtshow);
        //利息を表示用に丸める
        $interestshow = round($interest);
        //3桁でカンマを付ける
        $interestshow = number_format($interestshow);
        //合計利息
        $totalinterest = $totalinterest + $interest;
        //表示用に丸める
        $totalinterestshow = round($totalinterest);
        //3桁でカンマを付ける
        $totalinterestshow = number_format($totalinterestshow);


        //借金残額が0位下なら完済
        if ($debt<=0) {
          echo "<tr><td>{$i}</td><td>{$interestshow}</td><td>0</td></tr>";
          echo "<tr><td>累計</td><td>{$totalinterestshow}</td><td>0</td></tr>";
        }else{
          echo "<tr><td>{$i}</td><td>{$interestshow}</td><td>{$debtshow}</td></tr>";
        }
      }
    }
    session_destroy();
  ?>
  </table>
  <p><a href="../index.html">トップページへ</a></p>
</body>

</html>
