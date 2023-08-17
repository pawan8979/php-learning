<?php

//Arithmetic Operator
// + - * / ** %

$x= 20;
$y= 10;
$z = null;

$z = $x + $y;
echo"$z <br>";
$z = $x - $y;
echo"$z <br>";
$z = $x * $y;
echo"$z <br>";
$z = $x / $y;
echo"$z <br>";
$z = $x ** $y;
echo"$z <br>";
$z = $x % $y;
echo"$z <br>";

//Increment and Decrement Operator

$counter = 0;
$counter++;
echo"$counter <br>";
$counter--;
echo"$counter <br>";

  // logical operators = combine conditional statements
    // if(condition1 && codition2)

    // && = True if both conditions are true
    // || = True if at least one condition is true
    // ! = True if false. False if true

    $temp = 105;
    $cloudy = true;

    if($temp >= 0 && $temp<= 30)
    {
        echo"The weather is good <br>";
    }
    elseif($temp >= 0 || $temp<= 30)
    {
        echo"Weather is partially bad <br>";
    }
    else{
        echo"The weather is bad <br>";
    }

    if(!$cloudy)
    {
        echo"It's cloudy <br>";
    }

//Operator Precedence
// ()
// **
// * / %
// + -

$total = 1+2-3*4/5**6;
echo"$total";

?>