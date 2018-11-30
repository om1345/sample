<!DOCTYPE html>
<html lang = "ja">

<head>
  <meta charset="utf-8">
  <title>オブジェクト指向(3)</title>
</head>

<body>
  <?php
    class Goods {
      private $name;
      private $price = 0;

      public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
      }

      public function showPrice() {
        echo "{$this->name}の価格は{$this->price}円です<br>";
      }

      public function getName() {
        return $this->name;
      }

      public function getPrice() {
        return $this->price;
      }
    }
      class GoodsTax extends Goods{
        public function showPrice() {
          $taxPrice = round($this->getPrice() * 1.08);
          echo "{$this->getName()}の税込み価格は{$taxPrice}円です<br>";
        }
      }

  $goods = new Goods("アイス", 100);
  $goods->showPrice();

  $goodsTax = new GoodsTax("アイス", 100);
  $goodsTax->showPrice();
  ?>
</body>
</html>
