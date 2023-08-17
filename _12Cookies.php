<?php

 setcookie("fav_food", "pizza", time() + (86400 *2), "/");
 setcookie("fav_drink", "coffee", time() + (86400 *3), "/");
            
 foreach($_COOKIE as $key => $value)
 {
    echo"{$key} = {$value} <br>";
 }
 if(isset($_COOKIE["fav_food"]))
 {
    echo"Buy some {$_COOKIE["fav_food"]} !!";
 }
?>