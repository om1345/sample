<!DOCTYPE html>
<html lang = "ja">

<head>
  <meta charset="utf-8">
  <title>借金返済</title>
</head>

<body>
  <?php
  //借金の残額
    $debt = $_POST['debt'];
  //利率
    $rate = ($_POST['rate']/100);
  //年返済額
    $pay = $_POST['pay'];

  //入力した返済額で利息分を払えるか判定
    if ($debt * $rate >= $pay) {
      echo "その返済額では利息を払えないので返済できません";
    }else{
      for ($i=1; $debt>0; $i++) {
        //借金残額に利息を加えて返済額を引く
        $debt = $debt * (1+$rate) - $pay;
        //借金残額を表示用に丸める
        $debtshow = round($debt);
        //借金残額が0位下なら完済
        if ($debt<=0) {
          echo "{$i}年目：完済<br>";
        }else{
          echo "{$i}年目：借金残額{$debtshow}円<br>";
        }
      }
    }
  ?>
  <p><a href="../index.html">トップページへ</a></p>
</body>

</html>
