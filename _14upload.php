<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="download.php" method="post" enctype="multipart/form-data">
    <input type="file" name= "myfile"><br><br>
    <input type="submit" name="upload" value="Upload File">
    </form>
</body>
</html>

<?php

if(isset($_POST["upload"])){
    $file_name = $_FILES["myfile"]["name"];
    $file_tmp_name = $_FILES["myfile"]["tmp_name"];
    if(move_uploaded_file($file_tmp_name, "uploads/" . $file_name))
    {
        echo"File uplaod successfully";
    }
    else{
        echo"Error";
    }
}
?>
<a download= "<?php echo $file_name; ?>" href="uploads/<?php echo $file_name;?>"><?php echo $file_name;?></a>