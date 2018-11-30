<!DOCTYPE html>
<html lang = "ja">

<head>
  <meta charset="utf-8">
  <title>BMI計算</title>
</head>

<body>
  <div class="main">
    <div class="input-bmi">
      <div class="form-title">年齢、性別、身長(m)、体重(kg)を半角数字で入力してください</div>
      <form method="post" action="product04-show.php">

        <div class="form-item">年齢</div>
        <select name="age">
          <option value="未選択">選択してください</option>

          <?php
            for ($i=0; $i<=100; $i++) {
              echo "<option value='{$i}'>{$i}</option>";
            }
          ?>
        </select>

        <div class="form-item">性別</div>

        <?php $types = array('男性','女性'); ?>

          <select name = "sex">
          <option value = "未選択">選択してください</option>
          <?php
            foreach ($types as $type) {
              echo "<option value='{$type}'>{$type}</option>";
            }
          ?>
          </select>

        <div class="form-item">身長(m)</div>
          <input type="text" name="height">

        <div class="form-item">体重(kg)</div>
          <input type="text" name="weight">

        <input type="submit" value="送信">

      </form>
    </div>
  </div>
</body>

</html>
