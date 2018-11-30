<!DOCTYPE html>
<html lang = "ja">

<head>
  <meta charset="utf-8">
  <title>BMI計算</title>
</head>

<div class="main">
  <div class="display-bmi">
    <div class="form-title">計算結果</div>

    <div class="form-item">年齢</div>
    <?php echo $_POST['age'] ?>

    <div class="form-item">性別</div>
    <?php echo $_POST['sex'] ?>

    <div class="form-item">BMI</div>
    <?php $height = $_POST['height'];
          $weight = $_POST['weight'];
          $bmi = $weight / ($height * $height);
          $bmi = round( $bmi, 2 );
          echo $bmi;
    ?>
<p><a href="../index.html">トップページへ</a></p>
  </div>
</div>
