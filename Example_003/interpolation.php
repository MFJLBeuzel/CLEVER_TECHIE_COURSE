<?php
//1 Preferred
"text {$array['name']} more text"; //associative single
"text $array[2] more text"; //numeric single
"text $object->name $object->price more text"; //property

//3 The only way
"text {$object->buy()} more text"; //method call
"text {$array['release year']} more text"; //associative single with space
"text {$array[1][3]} more text"; //multi dimensional numeric
"text {$array['random'][3]} more text"; //multi dimensional associative
"text ".add(5, 10)." more text"; //functions
"text ".ANSWER." more text"; //constants
