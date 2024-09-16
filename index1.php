<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>

<body>
    <form action="index.php" method="POST">
        <label>Name</label>
        <input type="text" name="fname">
        <label>Number</label>
        <input type="text" name="number">
        <label>Age</label>
        <input type="text" name="age">
        <input type="submit">
    </form>
</body>

</html> -->
<?php

$servername ='localhost:3307';
$username ='root';
$password ='';
$database ='form';

$conn = new mysqli($servername,$username,$password,$database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fname'];
    $number = $_POST['number'];
    $age = $_POST['age'];
    $sql="insert into info(name, number, age) values('$name','$number','$age')";

echo "connection Successfull";
$conn ->close();
}

?>