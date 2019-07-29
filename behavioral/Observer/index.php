<?php

use behavioral\Observer\PageEn;
use behavioral\Observer\PageUS;
use behavioral\Observer\NewsGenerator;

$newMaker = new NewsGenerator();
$newMaker->addNews('The greater news ever!');
$newMaker->addNews('The weather is warm today!');
$newMaker->addNews('Ronaldo scores two goals.');
$pageGB = new PageEn('www.news.gb');
$pageUS = new PageUS('www.news.us');
$newMaker->attach($pageGB);
$newMaker->attach($pageUS);
$newMaker->notify();

echo $pageUS->getNews() . ' and ' . $pageGB->getNews();
