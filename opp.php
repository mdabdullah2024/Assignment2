<?php 
class Book {


    // TODO: Add properties as Private
    private $title;
    private $availableCopies;
   
    
    public function __construct($title, $availableCopies) {
   
   
        // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;
   
        }
   
   
   // TODO: Add getTitle method
   public function getTitle() {
    return $this->title;
}
   
    
    // TODO: Add getAvailableCopies method
    public function getAvailableCopies() {
        return $this->availableCopies;
    }
   
    
   
    // TODO: Add borrowBook method
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        }
        return false;
    }
   
    
   
    // TODO: Add returnBook method
    public function returnBook() {
        $this->availableCopies++;
    }
   
    
   }
   
   
   class Member {
   
   
    // TODO: Add properties as Private
    private $name;
   
   
    public function __construct($name) {
   
   
         // TODO: Initialize properties
         $this->name = $name;
   
        }
   
   
   
    // TODO: Add getName method
    public function getName() {
        return $this->name;
    }
   
    
    // TODO: Add borrowBook method
    public function borrowBook(Book $book) {
        if ($book->borrowBook()) {
            return "{$this->name} borrowed '{$book->getTitle()}' successfully.\n";
        } else {
            return "{$this->name} cannot borrow '{$book->getTitle()}'. No available copies.\n";
        }
    }
   
    
   
    // TODO: Add returnBook method
    public function returnBook(Book $book) {
        $book->returnBook();
        echo "{$this->name} returned '{$book->getTitle()}'.\n";
    }
   
    
   }
   
   
   
   // Usage
   
   

   // You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.

   



    
   
   // TODO: Create 2 books with the following properties
   
   
   //Book 1 - Name: The Great Gatsby, Available Copies: 5.
   $book1 = new Book("The Great Gatsby", 5);
   
   //Book 2 - Name: To Kill a Mockingbird, Available Copies: 3.
   $book2 = new Book("To Kill a Mockingbird", 3);
   
   
    
   // TODO: Create 2 members with the following properties
   
   
   //Member 1 - Name: John Doe
   $member1 = new Member("John Doe");
   
   //Member 2 - Name: Jane Smith
   $member2 = new Member("Jane Smith");
   
   
    
   // TODO: Apply Borrow book method to each member
   // Borrow books
    $member1->borrowBook($book1);
    $member2->borrowBook($book2);
   
    
   // TODO: Print Available Copies with their names:
    echo "Available copies for '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";
    echo "Available copies for '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n";
   
    
   