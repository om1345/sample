<!DOCTYPE html>
<html lang = "ja">

<head>
  <meta charset="utf-8">
  <title>オブジェクト指向(6)</title>
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

  trait Fly {
    public function fly() {
      echo "{$this->name}は空を飛ぶ<br>";
    }
  }

  trait Fire {
    public function fire() {
      echo "{$this->name}は炎を吐く<br>";
    }
  }

    class Dog extends Animal {

      use Fly, Fire;

      public function bark() {
        echo "{$this->name}はワンワン鳴く<br>";
      }

      public function eat() {
        echo "{$this->name}はドッグフードを食べる<br>";
      }
    }

  $dog = new Dog("犬");
  $dog->breath();
  $dog->bark();
  $dog->eat();
  $dog->fly();
  $dog->fire();
  ?>


</body>

</html>
