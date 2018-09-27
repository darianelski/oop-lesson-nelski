<?php 
/*
// Person 1
$person1_name = 'Peter';
$person1_speciality = 'programmer';
$person1_age = 25;

function person1_hello($name, $spec, $age) {
	echo "Hello! My name is $name. I am $spec and $age years old. ";
}

person1_hello($person1_name, $person1_speciality, $person1_age);
echo "<br><br>";

// Person 1
$person2_name = 'Jane';
$person2_speciality = 'web designer';
$person2_age = 23;

function person2_hello($name, $spec, $age) {
	echo "Hello! My name is $name. I am $spec and $age years old. ";
}

person2_hello($person2_name, $person2_speciality, $person2_age);
*/

// class Person {
// 	public $name ;
// 	public $speciality;
// 	public $age;

// 	public function greeting() {
// 		echo "Hello! My name is " . $this->name . ". I am " . $this->speciality . " and " . $this->age . " years old. ";
// 	}
// }

// $person1 = new Person;

// $person1->name = "Peter";
// $person1->speciality = "Der";
// $person1->age = "24";

// $person1->greeting($person1->name, $person1->speciality, $person1->age);
// $person1->greeting();

class Person {
	public $name ;
	public $speciality;
	public $age;

	// public function __construct(){
	// 	echo "New person was just created";
	// }

	public function __construct($name, $spec, $age){
		$this->name = $name;
		$this->speciality = $spec;
		$this->age = $age;
	}

	public function greeting() {
		// echo "Hello! My name is $name. I am $spec and $age years old. ";
		echo "Hello! My name is " . $this->name . ". I am " . $this->speciality . " and " . $this->age . " years old. ";
	}
}

$person1 = new Person('Peter', 'cock', 25);
$person1->greeting();

echo "<br><br>";

$person2 = new Person('Jane', 'designer', 25);
$person2->greeting();

// $person2 = new Person;

// $person1->name = "Peter";
// $person1->speciality = "Der";
// $person1->age = "24";


// $person1->greeting();

 ?>