<?php
$animals = array('Cat', 'Dog', 'Duck', 'Monster');

switch ($animals[array_rand($animals)]) {
    case 'Cat':
    echo 'Meow!';
    break;
    case 'Dog':
    echo 'Woef!';
    break;
    case 'Duck':
    echo 'Quack!';
    break;
    default:
    echo 'Unknown Animal dectected!';
    break;
}
