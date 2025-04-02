<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php

class Food {
  private $name;
  private $price;

  // 「price」プロパティの値を出力する「show_price」メソッドを作成
  public function show_price() {
    echo $this->price . '<br>';
  }

  // プロパティに値を代入するコンストラクタを作成
  public function __construct(string $name, int $price) {
    $this->name = $name;
    $this->price = $price;
  }
}

class Animal {
  private $name;
  private $height;
  private $weight;

  // 「height」 プロパティの値を出力する「show_height」メソッドを作成
  public function show_height() {
    echo $this->height . '<br>';
  } 

  // プロパティに値を代入するコンストラクタを作成
  public function __construct(string $name, int $height, int $weight) {
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }
}

// それぞれのクラスを元に任意の引数を渡してインスタンスを作成
$food = new Food('potato', 250);
$animal = new Animal('dog', 60, 5000);

// インスタンス$foodと$animalの各プロパティを出力する
print_r($food);
print_r($animal);

// メソッドを実行
$food->show_price();
$animal->show_height();
?>
    </p>
</body>

</html>