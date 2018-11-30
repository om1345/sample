<?php
  session_start();
  //$errorを定義
  $error =  array ();
  //送信ボタンが押された後の処理//
  if (isset($_POST ["name"])) {

  //サニタイズ
  $debt = htmlspecialchars($_POST["debt"],ENT_QUOTES);
  $rate = htmlspecialchars($_POST["rate"],ENT_QUOTES);
  $pay = htmlspecialchars($_POST["pay"],ENT_QUOTES);

    //バリデーション
    //0と未入力はエラー
      if (empty($debt)) {
        $error[] = "エラー：0より大きい借入額を半角数字で入力してください<br>";
        //半角数字かつ0以上の整数or小数のみ可
      }elseif(preg_match('/^([1-9]\d*|0)(\.\d+)?$/', $debt)) {
        //正規表現の場合はセッションに格納
        $_SESSION['debt'] = $debt;
      }else{
        $error[] = "エラー：借入額を半角数字で入力してください<br>";
       }
    //0はOKで未入力はエラー
      if (strlen($rate)==0) {
         $error[] = "エラー：年利が未入力です<br>";
         //半角数字かつ0以上の整数or小数のみ可
       }elseif(preg_match('/^([1-9]\d*|0)(\.\d+)?$/', $rate)) {
         //正規表現の場合はセッションに格納
         $_SESSION['rate'] = $rate;
       }else{
         $error[] = "エラー：年利を半角数字で入力してください<br>";
        }
      //0と未入力はエラー
      if (empty($pay)) {
          $error[] = "エラー：0より大きい年間返済額を半角数字で入力してください<br>";
          //半角数字かつ0以上の整数or小数のみ可
        }elseif(preg_match('/^([1-9]\d*|0)(\.\d+)?$/', $pay)) {
          //正規表現の場合はセッションに格納
          $_SESSION['pay'] = $pay;
        }else{
          $error[] = "エラー：年間返済額を半角数字で入力してください<br>";
         }


    //エラーが無いなら計算ページに飛ぶ
      if(!count($error)) {
        header('location: product21-show.php');
      exit();
      }
  }

?>

<!DOCTYPE html>
<html lang = "ja">

<head>
  <meta charset="utf-8">
  <title>借金返済</title>
</head>

<body>

  借金返済年数シミュレーターです<br>借入額、年利、年間返済額を半角数字で入力してください
  <form action="" method="post">

    借入額（円）
    <input type="text" name="debt">
    年利（％）
    <input type="text" name="rate">
    年間返済額（円）
    <input type="text" name="pay">

    <input type="submit" name="name" value="計算">
  </form>
  <?php
  //エラーがある時はエラーメッセージを表示
    if (count($error)) {
      foreach ($error as $message){
          print ($message);
      }
    }
  ?>
</body>

</html>
