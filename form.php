
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>

<body>
    <!-- <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST"> -->
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <label>Name</label>
        <input type="text" name="fname"><br>
        <label>Number</label>
        <input type="text" name="number"><br>
        <label>Age</label>
        <input type="text" name="age"><br><br>
        <input type="submit" name="save">
    </form>
    <?php
    if(isset($_POST['save'])){
        echo $_POST['fname']."<br>";
        echo $_POST['number']."<br>";
        echo $_POST['age']."<br>";
    }


    ?>
</body>

</html>

