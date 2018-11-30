<?php
    session_start();
?>

<html>
<head>
  <title>ログアウト画面</title>
</head>

<body>
  <?php
  echo "ログアウトしました";
  session_destroy();
  ?>

  <p><a href="../index.html">トップページへ</a></p>
</body>
</html>
