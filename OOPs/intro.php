<?php
class Fruit {
    public $name;
    public $taste;

    public function intro() {
        echo "I am a fruit. Well, an object of fruit class";
    }

    // public function setname($fruitname) {
    //     $this->name = $fruitname;
    // }

    public function __construct($arg_name, $arg_taste) {
        $this->name = $arg_name;
        $this->taste = $arg_taste;
    }
}

// Instantiation
$fruit1 = new Fruit("Muskmelon", "Sweet");
// $fruit1->setname("Watermelon");
echo $fruit1->name."<br>";

// $fruit1->intro();
// echo "<br>";
// echo var_dump($fruit1);

// $fruit2 = new Fruit();
// echo "<br>";
// $fruit2->taste = "Sour";
// echo var_dump($fruit2);
// echo $fruit2->taste;

$fruit3 = new Fruit("Banana", "Sweet");
// $fruit3->setname("Pear");
echo $fruit3->name;

// Constructor - Magic functions
?>