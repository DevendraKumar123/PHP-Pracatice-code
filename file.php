<?php

if(isset($_FILES['image'])){
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    move_uploaded_file($file_tmp,"image_up/".$file_name);
}
else{
    echo "can't uploaded file";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>File</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" ><br>
        <input type="submit">

    </form>
</body>
</html>