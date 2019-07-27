<?php


use behavioral\Observe\PageEn;
use behavioral\Observe\PageUS;

include_once('Observable.php');
include_once('Observer.php');
include_once('NewsGenerator.php');
include_once('PageEn.php');
include_once('PageUS.php');

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