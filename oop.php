<?php

class Book {

    private $title;
    private $availableCopies;

    public function __construct( $title, $availableCopies ) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getAvailableCopies(){
        return $this->availableCopies;
    }

    public function borrowBook(){
        if($this->availableCopies > 0){
            $this->availableCopies--;
        } else {
            echo "No copies of {$this->$title} are available to borrow." . PHP_EOL;
        }
    }

    public function returnBook(){
        $this->availableCopies++;
    }

}

class Member {

    private $name;

    public function __construct( $name ) {
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function borrowBook(Book $book){
        echo "{$this->name} is borrowing '{$book->getTitle()}'" . PHP_EOL;
    }

    public function returnBook(Book $book){
        return returnBook();
    }

}
// Usage

// Create 2 books
$book1 = new Book('The Great Gatsby', 5);
$book2 = new Book('To Kill a Mockingbird', 3);

// Create 2 members
$member1 = new Member('John Doe');
$member2 = new Member('Jane Smith');

// Member One borrows Book 1
$member1->borrowBook($book1);

// Member Two borrows Book 2
$member2->borrowBook($book2);

// Print the available copies of each book
echo "Available Copies of '{$book1->getTitle()}': " . $book1->getAvailableCopies() . PHP_EOL;
echo "Available Copies of '{$book2->getTitle()}': " . $book2->getAvailableCopies() . PHP_EOL;
