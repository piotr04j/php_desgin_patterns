<?php

use behavioral\Strategy\MatchMarker;
use behavioral\Strategy\TextQuestion;

include_once('Marker.php');
include_once('Question.php');
include_once('MatchMarker.php');
include_once('TextQuestion.php');

$correctAnswer = new MatchMarker('Strategy');
$question = new TextQuestion('What kind of design pattern is it?', $correctAnswer);
$mark = $question->mark('Strategy') ? 'true' : 'false';

echo $question->askQuestion() . '. Is this the strategy pattern? ' . 'Yes it\'s '. $mark;