<!DOCTYPE html>
<html lang = "ja">

<head>
  <meta charset="utf-8">
  <title>オブジェクト指向(5)</title>
</head>

<body>
  <?php
    abstract class Creature {

      protected $name;

      public function __construct($name) {
        $this->name = $name;
      }

      public function breath() {
        echo "{$this->name}は呼吸する<br>";
      }
      abstract public function eat();
    }

    interface Communication {
      public function talk();
    }

    class Human extends Creature implements Communication {
      public function eat() {
        echo "{$this->name}はパンを食べる<br>";
      }
      public function talk() {
          echo "{$this->name}は言葉で対話する<br>";
      }
    }

    class Dog extends Creature implements Communication {
      public function eat() {
        echo "{$this->name}はドッグフードを食べる<br>";
      }
      public function talk() {
        echo "{$this->name}は吠えて対話する<br>";
      }
    }

    class Robot implements Communication {
      protected $name;

      public function __construct($name) {
        $this->name = $name;
      }
      public function talk() {
        echo "{$this->name}は機械語で対話する<br>";
      }
    }

    $human = new Human("人間");
    $human->breath();
    $human->eat();
    $human->talk();

    $dog = new Dog("犬");
    $dog->breath();
    $dog->eat();
    $dog->talk();

    $robot = new Robot("ロボット");
    $robot->talk();

  ?>
</body>

</html>
