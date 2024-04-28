<?php
// Define a class 'Book'
class Book {
    public $title;
    public $author;

    // Constructor to set the title and author
    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    // Method to display book details
    public function display() {
        echo "Title: " . $this->title . ", Author: " . $this->author . "<br>";
    }
}

// Create an instance of Book
$originalBook = new Book("1984", "George Orwell");

// Display original book details
echo "Original Book: ";
$originalBook->display();

// Clone the original book
$clonedBook = clone $originalBook;

// Change the title of the cloned book
$clonedBook->title = "Animal Farm";

// Display cloned book details
echo "Cloned Book: ";
$clonedBook->display();

// Verify that the original book's details remain unchanged
echo "After Cloning Original Book: ";
$originalBook->display();
?>
