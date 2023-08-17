<?php
//associative array = An array made of key => value pairs

// countries => capitals
// id => username
// item => price

$capitals = array("USA"=>"Washington D.C.",
                    "Japan"=>"Kyoto",
                    "South Korea"=>"Seoul",
                    "India"=>"New Delhi");
            
$capitals["USA"]= "Las Vegas";
$capitals["china"] = "Beijing";

array_pop($capitals);
array_shift($capitals);
$keys = array_keys($capitals);
foreach($keys as $key){
    echo"{$key}<br>";
}
$values = array_values($capitals);
foreach($values as $value){
    echo"{$value}<br>";
}

array_flip($capitals); //key become value and vice versa
$reversed = array_reverse($capitals);
count($capitals);

foreach($capitals as $key=>$value){
    echo"{$key} => {$value} <br>";
}
?>