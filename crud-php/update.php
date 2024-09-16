<?php include "config.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</head>

<body>
<?php
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $sql = "SELECT * FROM employee WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    while ($row= mysqli_fetch_assoc($result)){
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $password = $row['password'];
    $address = $row['address'];
    $image =  $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['name'], "upload/" . $image); 
?>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <h2 class="text-center">Crud Opration</h2>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Name</label>
                    <input type="text" class="form-control" placeholder="Name" value="<?php echo $name; ?>" name="name">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Mobile</label>
                    <input type="text" class="form-control" placeholder="Mobile" value="<?php echo $mobile; ?>" name="mobile">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Email</label>
                    <input type="text" class="form-control" placeholder="Email" value="<?php echo $email; ?>" name="email">
                </div>
                
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Password</label>
                    <input type="password" class="form-control" placeholder="Password" id="pass1" value="<?php echo $password; ?>" name="pass1">
                </div>

            </div>
            <div class="form-group col-md-4">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" placeholder="1234 Main St" value="<?php echo $address; ?>" name="address">
            </div>
            <div class="form-group col-md-4">
                <label for="">Image</label>
                <input type="file" class="form-control" name="image1"  id="">
                <input type="hidden" name="old_image" value="<?php echo $row['image']; ?>">
                <img src="<?php echo "upload/". $row['image'];?>" alt="" height="100px" width="70px" >\
                <br><span><?php echo $row['image']; ?></span>
            </div>
          
            <div class="form-group col-md-4 mt-3">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>

        </form>
        <?php } }?>
    </div>
    
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    // print_r($_POST);
    $id =$_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['pass1'];
    $address = $_POST['address'];
    $image = $_FILES['image1']['name'];
    move_uploaded_file($_FILES['image1']['tmp_name'], "upload/" . $image);
    $sql = "UPDATE `employee` SET `name`='$name',`email`='$email',`mobile`='$mobile',`password`='$password',`address`='$address',`image`='$image' WHERE id=$id";
    $run = mysqli_query($conn, $sql);
    header("Location: index.php");

}
?>