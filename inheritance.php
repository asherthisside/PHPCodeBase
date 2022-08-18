<?php
class A {
    public $name;
    public $age;
    public $address;

    public function __construct($n, $ag, $ad) {
        $this->name = $n;
        $this->age = $ag;
        $this->address = $ad;
    }
}


class B extends A{

}
class C extends A {

}

$b = new B("Abhishek", 26, "Dehradun");
$c = new C("Chandan", 45, "Amroha");

// echo $b->name;

// Single Inheritance
// Multiple Inheritance (Not supported with classes)
// Hierarchical Inheritance 
// Multilevel Inheritance 

class Circle {
    public $radius;

    public function calcArea($r) {
        $this->radius = $r;
        $area = 3.14 * $this->radius * $this->radius;
        echo $area;
    }
}

class Square extends Circle {
    public $side;

    public function calcArea($s) {
        $this->side = $s;
        $area = $this->side * $this->side;
        echo $area;
    }
}

class Sphere extends Circle{
    public function calcVolume($r) {
        $volume = (4 * 3.14 * $this->radius * $this->radius * $this->radius) / 3;
        echo $volume;
    }
}

class Final_class extends Sphere {

}

// $fi = new Final_class();
// $fi->calcArea(2);
// echo "<br>";
// $fi->calcVolume(4);



// Overriding => Polymorphism ()

// Abstract functions -> Abstraction ()

abstract class Abs {
    public abstract function abs_one();
}

class Abs_child extends Abs {
    public function abs_one() {
        echo "This was once an abstract function";
    }
}

// $abs_child = new Abs_child();
// $abs_child->abs_one();
// Reinforce -> 

// Encapsulation - 
// Access Modifiers -> Public, Protected and Private 

class One {
    public $name;
    protected $age;
    private $salary;

    public function __construct($n, $a, $s) {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    public function getname() {
        echo $this->name;
    }

    public function getage() {
        echo $this->age;
    }

    public function getsalary() {
        echo $this->salary;
    }
}

class Two extends One {
    public function get_name_two() {
        echo $this->name;
    }

    public function get_age_two() {
        echo $this->age;
    }

    public function get_salary_two() {
        echo $this->salary;
    }
}

$one = new One("One", 1, 1001);
echo $one->salary;
// $one->getsalary();
// $one->getage();
// echo $one->age;
// echo $one->name;
// $one->getname();

$two = new Two("Two", 2, 2002);
// $two->get_salary_two();
// $two->get_age_two();
// $two->get_name_two();

// Interface and traits | Namespaces 
?>