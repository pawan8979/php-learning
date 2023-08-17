<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method= "get">
        <label for="uname">Username:</label><br>
        <input type="text" id="uname" name="uname"><br>
        <label for="pass">Password:</label><br>
        <input type="password" id="pass" name="pass"><br><br>
        <input type="submit" value="Login">
    </form> -->
    <form action="3GetPost.php" method= "post">
        <label for="uname">Username:</label><br>
        <input type="text" id="uname" name="uname"><br>
        <label for="pass">Password:</label><br>
        <input type="password" id="pass" name="pass"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

<?php

// $_GET, $_POST = special variables used to collect data from an HTML form
//                 data is sent to the file in the action attribute of <form>
//                 <form action= "some_file.php" method="get">


// $_GET = Data is appended to the url
//         NOT secure
//         char limit
//         Bookmark is possible with values
//         GET requests can be cached
//         Better for a search page

// $_POST = Data is packaged inside the body of the HTTP requests
//         MORE secure
//         No data limit
//         Cannot Bookmark
//         GET requests are not cached
//         Better for submitting credentials

    // echo "{$_GET["uname"]} <br>";
    // echo "{$_GET["pass"]} <br>";
    echo "{$_POST["uname"]} <br>";
    echo "{$_POST["pass"]} <br>";

?>