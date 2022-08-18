<?php
abstract class Employee {
    public $firstname;
    public $lastname;

    public function __construct($f, $l) {
        $this->firstname = $f;
        $this->lastname = $l;
    }

    public function getFullName() {
        return $this->firstname." ".$this->lastname;
    }
    public abstract function getSalary();
}


class FullTimeEmployee extends Employee {
    public $montlysalary;

    public function __construct($f, $l, $ms) {
        $this->firstname = $f;
        $this->lastname = $l;
        $this->montlysalary = $ms;
    }

    public function getSalary() {
        return $this->montlysalary * 12;
    }
}

class ContractEmployee extends Employee {
    public $hourlyrate;
    public $totalhours;

    public function __construct($f, $l, $hr, $th) {
        $this->firstname = $f;
        $this->lastname = $l;
        $this->hourlyrate = $hr;
        $this->totalhours = $th;
    }

    public function getSalary() {
        return $this->hourlyrate * $this->totalhours;
    }
}
$fte = new FullTimeEmployee("Haaris", "Saifi", 23000);
echo $fte->getFullName();
echo "<br>";
echo $fte->getSalary();
echo "<br>";

$cte = new ContractEmployee("Suraj", "Kumar", 79, 200);
echo $cte->getFullName();
echo "<br>";
echo $cte->getSalary();


// Multiple Inheritance
// Interface - Class like entity wherein you declare all the abstract functions 

interface a {
    public function f1();
}

interface b {
    public function f2();
}

class abc implements a, b {
    public function f1() {
        echo "This is function 1";
    }
    
    public function f2() {
        echo "This is function 2";
    }
} 

$abc = new abc;
$abc->f1();
$abc->f2();

// Traits -> Sort of a modification of Interfaces wherein you can write the functions

trait tr1 {
    public function abc_one() {
        echo "This is function 1 of trait t1";
    }
    
    public function abc_two() {
        echo "This is function 2 of trait t1";
    }
}

trait tr2 {
    public function def_one() {
        echo "This is function 1 of trait t2";
    }
    
    public function def_two() {
        echo "This is function 2 of trait t2";
    }
}

class trait_class {
    use tr1, tr2;
}

$trait_class_object = new trait_class;
$trait_class_object->def_one();
$trait_class_object->abc_two();

// namespace - ????

?>