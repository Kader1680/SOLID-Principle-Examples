<?php


abstract class CoffeeMaker {

    abstract public function make();
}

// Espresso coffee
class Espresso extends CoffeeMaker {
    public function make() {
        echo "Making an Espresso.\n";
    }
}

// Latte coffee
class Latte extends CoffeeMaker {
    public function make() {
        echo "Making a Latte.\n";
    }
}

// Cappuccino coffee
class Cappuccino extends CoffeeMaker {
    public function make() {
        echo "Making a Cappuccino.\n";
    }
}


// -------------------- Using Interface


 

// Define the interface
interface CoffeeBuilder {
    public function make();
}

// Implement specific coffee types
class EspressoCup implements CoffeeBuilder {
    public function make() {
        echo "Making an Espresso.\n";
    }
}

class LatteCup implements CoffeeBuilder {
    public function make() {
        echo "Making a Latte.\n";
    }
}

class CappuccinoCup implements CoffeeBuilder {
    public function make() {
        echo "Making a Cappuccino.\n";
    }
}


?>

?>
