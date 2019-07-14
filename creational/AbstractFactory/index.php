<?php


$bookFactory= new CreatorBook();
$polishBook = $bookFactory->createProduct(1, "some title");

echo $polishBook->getTitle();
