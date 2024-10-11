<?php

$personData = file_get_contents('example.json');
$person = json_decode($personData, true);

$name = '{"name": "rakib", "age": 30}';

$personName = json_encode($name);
$insertData = file_put_contents('data/quiz-x.json', $personName);

echo "<pre>";
print_r($person);
echo "</pre>";
