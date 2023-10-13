<?php
require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/Customer.php';
$book1 = new Book(9785267006323, "1984", "George Orwell", 1);
$book2 = new Book(9780061120084, "To Kill a Mockingbird", "Harper Lee", 0);
$book3 = new Book(9780061120084, "To Kill HIM", "Harper Lee", 2);
$customer1 = new Customer(1, 'John', 'Doe', 'johndoe@mail.com');
$customer2 = new Customer(2, 'Mary', 'Poppins', 'mp@mail.com');

$info1 = (string) $book1;
$info2 = (string) $book2;
$info3 = (string) $book3;
$book3->title = "Kill him ananta jalil";
$info4 = (string) $book3;
echo $info1;
echo "<br>";
echo $info2;
echo "<br>";
echo $info3;
echo "<br>";
echo $info4;
echo "<br>";
echo $book1->title;
echo "<br>";
echo (string) $customer1;
echo "<br>";
if($book1->addCopy(4)) {
    echo "Added Successfully<br>";
} else {
    echo "Add Operation Unsuccessfull<br>";
}
?>