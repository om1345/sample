<!DOCTYPE html>
<html lang = "ja">

<head>
  <meta charset="utf-8">
  <title>テーブル</title>
</head>

<body>
  <table border="1">
  <?php
    for($a = 1; $a <=9; $a++){
      echo '<tr>';
      for($i = 1; $i <= 9; $i++){
        $ans = $a * $i;
        echo '<td>'.$a.'×'.$i.'='.$ans.'</td>';
      }
      echo '</tr>';
    }
  ?>
  </table>
</body>
</html>
