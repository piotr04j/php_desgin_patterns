<?php


use behavioral\Command\Kid;
use behavioral\Command\TV;

$tv = new TV();
$child = new Kid($tv);

echo $child->execute();
