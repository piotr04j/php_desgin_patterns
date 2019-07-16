<?php

use creational\AbstractFactory\CreatorBook;


include_once('CreatorBook.php');

$bookFactory= new CreatorBook();
$polishBook = $bookFactory->createProduct(1, 'PL', "some title");

echo $polishBook->getTitle();
