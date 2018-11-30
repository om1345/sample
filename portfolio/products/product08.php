<!DOCTYPE html>
<html lang = "ja">

<head>
  <meta charset="utf-8">
  <title>オブジェクト指向(1)</title>
</head>

<body>
  <?php
  //Personクラス定義
    class Person {
      public $name;
      public $age;

      public function __construct() {
        echo "一つのクラスが作られました";
      }

      public function show() {
        echo "{$this->name}さんの年齢は{$this->age}歳です<br>";
      }
    }

    //鈴木インスタンス
    $suzuki = new Person();
    $suzuki->name = "鈴木";
    $suzuki->age = "33";
    $suzuki->show();

    //田中インスタンス
    $tanaka = new Person();
    $tanaka->name = "田中";
    $tanaka->age = "44";
    $tanaka->show();


  ?>
</body>
</html>
