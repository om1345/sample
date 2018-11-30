<!DOCTYPE html>
<html lang = "ja">

<head>
  <meta charset="utf-8">
  <title>オブジェクト指向(2)</title>
</head>

<body>
  <?php
    class Person {
      private $name;
      private $age = 0;

      public function __construct ($name, $age) {
        $this->name = $name;
        $this->age = $age;
      }
      public function getName() {
        return $this->name;
      }

      public function getAge() {
        return $this->age;
      }

      public function setAge($age) {
        $this->age = $age;
      }


    }

    $suzuki = new Person('鈴木', '');
    echo "{$suzuki->getName()}さんの年齢は";
    $suzuki->setAge(45);
    echo "{$suzuki->getage()}歳です"


  ?>
</body>
</html>
