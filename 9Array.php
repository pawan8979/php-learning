<?php
//array = "Variable" which can hold more than one value at a time

$fruits = array("apple", "orange", "banana");
$fruits[0] = "pineapple";
array_push($fruits, "mango");
array_pop($fruits);
array_shift($fruits);
array_unshift($fruits);
$reversed = array_reverse($fruits);
count($fruits);

echo $fruits[0] . "<br>";
foreach($fruits as $fruit)
{
    echo $fruit . "<br>";
}
?>