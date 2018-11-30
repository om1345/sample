<!DOCTYPE html>
<html lang = "ja">

<head>
  <meta charset="utf-8">
  <title>例外処理</title>
</head>

<body>
  入力してください
  <form action="" method="post">
    <input type="text" name="name">
    <input type="submit" value="送信">
  </form>

<?php
  try{
    if(isset($_POST["name"])) {
      if($_POST["name"] == "") {
        throw new Exception("入力してください");
      } else {
        echo "「{$_POST["name"]}」と入力<br>";
      }
    }
  } catch (Exception $e) {
    echo $e->getMessage();
  }
?>
</body>
</html>
