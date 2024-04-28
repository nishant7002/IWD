<?php
// Base class
class Plant {
    public function photosynthesis() {
        echo "Converting sunlight into energy.<br>";
    }
}

// Intermediate class
class Tree extends Plant {
    public function grow() {
        echo "Growing taller and stronger.<br>";
    }
}

// Derived class
class FruitTree extends Tree {
    public function produceFruit() {
        echo "Producing fruit.<br>";
    }
}

// Create an object of FruitTree
$myFruitTree = new FruitTree();

// Call methods from all levels of inheritance
$myFruitTree->photosynthesis();
$myFruitTree->grow();
$myFruitTree->produceFruit();
?>
