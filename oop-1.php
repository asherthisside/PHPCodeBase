<?php
// class Animal {
//     public $name;
//     public $paws = 4;
//     public $color;

//     public function intro() {
//         echo "Hi, I am an animal";
//     }

//     public function __construct($n ,$c) {
//         $this->name = $n;  
//     }

//     public function __destruct() {
//         echo 'Object with name '.$this->name.' has been destroyed<br>';
//     }
// }

// $cat = new Animal("Cat", "White");
// // echo $cat->name;
// $cat->name = 'Frog';
// echo $cat->name;
// $dog = new Animal("Dog", "Brown");

// $cat->paws = 4;
// echo $cat->paws;
// echo $dog->paws;

// $cat->name = 'Cat';
// $cat->color = 'Brown';

// echo $cat->name, $cat->color;

// $horse = new Animal("Horse", "Black");
// $dolphin = new Animal("Dolphin", "Blue");
// $dolphin->paws = 6;
// echo "<br>".$dolphin->paws;

// Destructor - 

// Inheritance - 

// class Pet extends Animal {
    
// }

// $iguana = new Pet("Murphy", "Ice Blue");
// echo "<br>Iguana has ".$iguana->paws." paws<br>";

// echo $dolphin->color;


// Single Inheritance - 
// Multiple Inheritance - Not supported through classes. 
// Multilevel Inheritance - 
// Hierarchical Inheritance - 
// Hybrid Inheritance - More than 1 type of inheritances occuring together.

// Create a class TV with properties like brand name, Model, and Volume etc, a method to print out all the properties, another to increase the volume by 1 and 1 for decreasing the volume by 1.  


class TV {
    public $brand;
    public $model;
    public $volume;

    public function __construct($b, $m, $v) {
        $this->brand = $b;
        $this->model = $m;
        $this->volume = $v;
    }

    public function getdetails() {
        echo "Model: ".$this->model."<br>Brand: ".$this->brand."<br>Volume: ".$this->volume."<br>";
    }

    public function volumeUp() {
        if ($this->volume < 10) {
            $this->volume++;
        }
        else {
            echo "<br>Maximum volume can be 10 only.";
        }
        echo $this->volume;
    }
    
    public function volumeDown() {
        if ($this->volume > 0) {
            $this->volume--;
        }
        else {
            echo "<br>Minimum volume can be 0 only.";
        }
        echo "<br>".$this->volume;
    }
}

$tv1 = new TV("OnePlus", "Smart", 5);

$tv1->getdetails();
$tv1->volumeUp();
$tv1->volumeUp();
$tv1->volumeUp();
$tv1->volumeUp();
$tv1->volumeUp();
$tv1->volumeUp();
$tv1->volumeUp();
$tv1->volumeUp();
$tv1->volumeUp();
$tv1->volumeDown();
$tv1->volumeDown();
$tv1->volumeDown();
$tv1->volumeDown();
$tv1->volumeDown();
$tv1->volumeDown();
$tv1->volumeDown();
$tv1->volumeDown();
$tv1->volumeDown();
$tv1->volumeDown();
$tv1->volumeDown();
$tv1->volumeDown();

// Create a class Employee with properties like firstname, lastname, Monthly salary and methods to show all the values and print annual salary. 

class staticMembersClass {
    public static $name = "Akash Nigam";
    public static $numberofobjects = 0;

    public function __construct()
    {
        staticMembersClass :: $numberofobjects += 1;
        echo "No. of objects created: ", staticMembersClass :: $numberofobjects, "<br>";
    }

    public static function hello() {
        echo staticMembersClass :: $name;
    }

}

// echo staticMembersClass::$name;
echo "<br>";
// echo staticMembersClass::hello();

$st1 = new staticMembersClass();
$st2 = new staticMembersClass();
$st3 = new staticMembersClass();
$st4 = new staticMembersClass();
$st5 = new staticMembersClass();
$st6 = new staticMembersClass();
$st7 = new staticMembersClass();
?>