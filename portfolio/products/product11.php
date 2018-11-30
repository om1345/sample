<!DOCTYPE html>
<html lang = "ja">

<head>
  <meta charset="utf-8">
  <title>オブジェクト指向(4)</title>
</head>

<body>
  <?php
    abstract class Animal {

      protected $name;

      public function __construct($name) {
        $this->name = $name;
      }

      public function breath() {
        echo "{$this->name}は呼吸する<br>";
      }
      abstract public function bark();
      abstract public function eat();
    }

    class Dog extends Animal {
      public function bark() {
        echo "{$this->name}はワンワン鳴く<br>";
      }

      public function eat() {
        echo "{$this->name}はドッグフードを食べる<br>";
      }
    }

    class Cat extends Animal {
      public function bark() {
        echo "{$this->name}はニャーニャー鳴く<br>";
      }

      public function eat() {
        echo "{$this->name}はキャットフードを食べる<br>";
      }
    }

  $dog = new Dog("犬");
  $dog->breath();
  $dog->bark();
  $dog->eat();

  $cat = new Cat("猫");
  $cat->breath();
  $cat->bark();
  $cat->eat();
  ?>


</body>

</html>
