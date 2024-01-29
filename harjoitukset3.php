<?php
    abstract class Animal {
        protected $name;
        protected $species;
        protected $color;
        protected $gender;
        protected $age;
        protected $food;
        // constructor
        public function __construct($name, $species, $color, $gender, $age, $food) {
            $this->name = $name;
            $this->species = $species;
            $this->color = $color;
            $this->gender = $gender;
            $this->age = $age;
            $this->food = $food;
        }
        // name
        function setName($name) {
            $this->name = $name;
        }
        function getName() {
            return $this->name;
        }
        // species
        function setSpecies($species) {
            $this->species = $species;
        }
        function getSpecies() {
            return $this->species;
        }
        // color
        function setColor($color) {
            $this->color = $color;
        }
        function getColor() {
            return $this->color;
        }
        // gender
        function setGender($gender) {
            $this->gender = $gender;
        }
        function getGender() {
            return $this->gender;
        }
        // age
        function setAge($age) {
            $this->age = $age;
        }
        function getAge() {
            return $this->age;
        }
        // food
        function setFood($food) {
            $this->food = $food;
        }
        function getFood() {
            return $this->food;
        }
        // function
        abstract public function makeSound();
    }
    // child class
    class Dog extends Animal {
        protected $breed;
        // constructor
        public function __construct($name, $species, $color, $gender, $age, $food, $breed){
            parent::__construct($name, $species, $color, $gender, $age, $food);
            $this->breed = $breed;
        }
        // function
        public function makeSound(){
            echo "Woof woof";
        }
        // breed
        function setBreed($breed) {
            $this->breed = $breed;
        }
        function getBreed() {
            return $this->breed;
        }
    }
    // child class
    class Cat extends Animal {
        protected $breed;
        protected $catchesMice;
        // constructor
        public function __construct($name, $species, $color, $gender, $age, $food, $breed, $catchesMice){
            parent::__construct($name, $species, $color, $gender, $age, $food);
            $this->breed = $breed;
            $this->catchesMice = $catchesMice;
        }
        // function
        public function makeSound(){
            echo "Meow meow";
        }
        // breed
        function setBreed($breed) {
            $this->breed = $breed;
        }
        function getBreed() {
            return $this->breed;
        }
        // cathesMice
        function setCatchesMice($catchesMice) {
            $this->catchesMice = $catchesMice;
        }
        function getCatchesMice() {
            return $this->catchesMice;
        }
    }
// object dog
$dog = new Dog ('Rodger', 'dog', 'brown, white and black', 'male', '1', 'bones', 'beagle');
echo $dog->getName() . "\n";
echo $dog->makeSound() . "\n";
// object cat
$cat = new Cat ('Marla', 'cat', 'black', 'female', '10', 'fish', 'no breed', 'catches');
echo $cat->getCatchesMice() . "\n";
echo $cat->makeSound() . "\n";
?>