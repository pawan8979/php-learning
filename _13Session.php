<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
  <label for="username">username:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">password:</label><br>
  <input type="password" id="password" name="password"><br><br>
  <input type="submit" name="login" value="login">
</form> 
</body>
</html>

<?php

if(isset($_POST["login"]))
{
   
    if(!empty($_POST["username"]) && !empty($_POST["password"]))
    {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        header("Location: home.php");
        // echo "{$_SESSION["username"]} <br>";
        // echo "{$_SESSION["password"]} <br>";
    
    }
}

?>