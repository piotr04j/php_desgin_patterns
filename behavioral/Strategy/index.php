<?php

use behavioral\Strategy\MatchMarker;
use behavioral\Strategy\TextQuestion;

$correctAnswer = new MatchMarker('Strategy');
$question = new TextQuestion('What kind of design pattern is it?', $correctAnswer);
$mark = $question->mark('Strategy') ? 'true' : 'false';

echo $question->askQuestion() . '. Is this the strategy pattern? ' . 'Yes it\'s '. $mark;
