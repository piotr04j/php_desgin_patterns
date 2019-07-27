<?php


use behavioral\Command\Kid;
use behavioral\Command\TV;

include_once('Command.php');
include_once('User.php');
include_once('TV.php');
include_once('Kid.php');

$tv = new TV();
$child = new Kid($tv);

echo $child->execute();
