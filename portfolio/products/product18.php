<!DOCTYPE html>
<html lang = "ja">

<head>
  <meta charset="utf-8">
  <title>日時取得</title>
</head>

<body>
  <?php
    $subject = "東京オリンピック";

    $today = time();
    $event = strtotime("20200724");
    $int = $event - $today;
    $day = ceil($int / (24 * 60 * 60));

    if ($day > 0) {
      echo "{$subject}まであと<strong>{$day}日</strong>です";
    } elseif ($day = 0) {
      echo "今日が{$subject}です";
    } else {
      echo "カウントダウンは終了しました";
    }
  ?>
</body>
</html>
