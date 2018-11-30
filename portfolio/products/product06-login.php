<?php
  session_start();
  $userId = $_POST['id'];

  if (!isset($_SESSION[$userId])) {
  $_SESSION[$userId] = $userId;
    echo "ログインしました";
  } else {
    echo "ログイン済みです";
  }
  ?>


  <html>
  <head>
    <title>ログイン画面</title>
  </head>

  <body>
  <p><a href="product06-logout.php">ログアウトする</a></p>
  <p><a href="../index.html">トップページへ</a></p>
  </body>
</html>
