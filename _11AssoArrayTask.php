<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method= "post">
        <label for="country">Enter Country:</label><br>
        <input type="text" id="country" name="country"><br>
        <input type="submit" value="Find Capital">
    </form>
</body>
</html>

<?php

$capitals = array("USA"=>"Washington D.C.",
                    "Japan"=>"Kyoto",
                    "South Korea"=>"Seoul",
                    "India"=>"New Delhi");
        
    echo "The Capital is " . $capitals[$_POST["country"]] . "<br>";
            
?>